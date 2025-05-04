<?php

namespace App\View\Components\Section;

use App\Models\Post;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class Blog extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View
    {
        $query = Post::with(['category', 'author'])
            ->when(request('search'), function($q) {
                $q->where('title', 'like', "%".request('search')."%")
                  ->orWhere('content', 'like', "%".request('search')."%")
                  ->orWhereHas('category', function($q) {
                      $q->where('name', 'like', "%".request('search')."%");
                  });
            })
            ->when(request('category'), function($q) {
                $q->where('category_id', request('category'));
            })
            ->latest();

        $posts = $query->paginate(6);
        $categories = Category::withCount('posts')->get();
        $recentPosts = Post::latest()->take(5)->get();

        return view('components.section.blog', compact('posts', 'categories', 'recentPosts'));
    }
}
