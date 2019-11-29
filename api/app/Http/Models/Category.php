<?php

namespace App\Http\Models;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
    protected $fillable = [
        'name', 'slug', 'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * @param Builder $query
     * @param string $slug
     */
    public function scopeWhereSlug(Builder $query, string $slug)
    {
        $query->where('slug', $slug);
    }
}
