<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('pages.category.all-categories', compact('categories'));
    }

    public function show(Category $category)
    {
        return view('pages.category.show-category', compact('category'));
    }

    public function create()
    {
        return view('pages.category.create-category');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        session()->flash('message', 'Your post has now been published.');

        Category::create([
            'name' => request('name'),
            'slug' => request(str_replace(' ', '_', 'name')),
            'description' => request('description')

        ]);

        return redirect('/categories');
    }
}
