<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category', 'author'])->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('posts', 'public');
            $validated['image'] = $path;
        }

        $validated['user_id'] = Auth::id();

        // Generate a unique slug
        $slug = Str::slug($validated['title']);
        $count = Post::where('slug', 'like', "$slug%")->count();
        $validated['slug'] = $count ? "{$slug}-{$count}" : $slug;

        Post::create($validated);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        $categories = Category::all(); // Fetch all categories for the dropdown
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($post->image);
            $path = $request->file('image')->store('posts', 'public');
            $validated['image'] = $path;
        }

        $validated['user_id'] = Auth::id();
        $validated['slug'] = Str::slug($validated['title']);
        $post->update($validated);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image);
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post deleted successfully');
    }
}
