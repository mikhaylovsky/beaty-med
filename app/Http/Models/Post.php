<?php

namespace App\Http\Models;

use App\Comment;
use Carbon\Carbon;
//use App\Tag;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function addComment($body, $post)
    {
       $this->comments()->create(['body'=> $body, 'post_id'=>$post,'user_id'=> 1,]);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {

        if( isset($filters['month']) && $month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if(  isset($filters['year']) && $year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives()
    {
        return static::selectRaw( 'year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw( 'min(created_at) desc' )
            ->get()
            ->toArray();
    }

//    public  function tags()
//    {
//        return $this->belongsToMany(Tag::class, 'post_tags');
//    }

}
