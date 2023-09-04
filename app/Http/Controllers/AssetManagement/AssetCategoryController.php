<?php

namespace App\Http\Controllers\AssetManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//model imports
use App\Models\AssetManagement\AssetCategory;

class AssetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $categories = AssetCategory::all();
            return response()->json($categories, 200); // 200 OK status code
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500); // 500 Internal Server Error status code
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        AssetCategory::create($data);

        return redirect()->route('categories.index')
            ->with('success', 'Asset category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $category = AssetCategory::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404); // 404 Not Found status code
        }

        return response()->json($category, 200); // 200 OK status code
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category->update($data);

        return redirect()->route('categories.index')
            ->with('success', 'Asset category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = AssetCategory::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404); // 404 Not Found status code
        }

        $category->delete();

        return response()->json(['message' => 'Category deleted successfully'], 200); // 200 OK status code
    }
}
