<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('components.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('components.categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);

        Category::create($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('components.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $category->update($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}