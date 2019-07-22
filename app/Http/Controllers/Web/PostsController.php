<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Post;
use Carbon\Carbon;
use App\Repositories\Posts;

class PostsController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth')->except(['index', 'show']);
//    }

    public function index()
    {
        $posts = Post::all();

        return view('pages.posts.all-posts', compact('posts'));
    }

    public function show(Post $post)
    {
        dd($post);
        return view('pages.posts.show-post', compact('post'));
    }

    public function create()
    {
        return view('pages.posts.create-post');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        session()->flash('message', 'Your post has now been published.');

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()

        ]);

        return redirect('/posts');
    }
}
