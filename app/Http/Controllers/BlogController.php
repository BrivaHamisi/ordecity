<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function show()
    {
        $blogs = Blog::with('category')->orderBy('publication_date', 'desc')->get();
        $categories = Category::all();
        $latestBlog = $blogs->first();
        return view('blogs', compact('blogs', 'categories', 'latestBlog'));
    }

    public function showDetails($id)
    {
        $blog = Blog::with('category')->findOrFail($id);
        return view('components.blogs.blog-details', compact('blog'));
    }

    public function filter(Request $request)
    {
        $category = $request->query('category', 'all'); // Default to 'all'
        $search = $request->query('search', '');

        $blogs = Blog::with('category')
            ->when($category !== 'all', function ($query) use ($category) {
                return $query->whereHas('category', function ($query) use ($category) {
                    $query->where('name', $category);
                });
            })
            ->when($search, function ($query) use ($search) {
                return $query->where('title', 'like', "%{$search}%")
                             ->orWhere('description', 'like', "%{$search}%");
            })
            ->orderBy('publication_date', 'desc')
            ->get();

        $html = view('components.blogs.blog-grid', compact('blogs'))->render();
        return response()->json(['success' => true, 'html' => $html]);
    }

    public function index()
    {
        $blogs = Blog::with('category')->paginate(10);
        return view('components.dashboard.allblogs', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('components.dashboard.createblog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
            'publication_date' => 'required|date',
            'reading_time' => 'required|integer|min:1',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
            'is_featured' => 'boolean',
        ]);

        $blog = new Blog();
        $blog->title = $validated['title'];
        $blog->category_id = $validated['category_id'];
        $blog->description = $validated['description'];
        $blog->publication_date = $validated['publication_date'];
        $blog->reading_time = $validated['reading_time'];
        $blog->is_featured = $validated['is_featured'] ?? false;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $uploadPath = public_path('blogs_images');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
            $request->file('image')->move($uploadPath, $imageName);
            $blog->image_path = 'blogs_images/' . $imageName;
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('components.dashboard.editblog', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
            'publication_date' => 'required|date',
            'reading_time' => 'required|integer|min:1',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
            'is_featured' => 'boolean',
        ]);

        $blog->title = $validated['title'];
        $blog->category_id = $validated['category_id'];
        $blog->description = $validated['description'];
        $blog->publication_date = $validated['publication_date'];
        $blog->reading_time = $validated['reading_time'];
        $blog->is_featured = $validated['is_featured'] ?? false;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image_path) {
                $oldImagePath = public_path($blog->image_path);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $uploadPath = public_path('blogs_images');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
            $request->file('image')->move($uploadPath, $imageName);
            $blog->image_path = 'blogs_images/' . $imageName;
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image_path) {
            $imagePath = public_path($blog->image_path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}