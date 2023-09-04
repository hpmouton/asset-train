<?php

namespace App\Http\Controllers\AssetManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//model imports
use App\Models\AssetManagement\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $assets = Asset::all();
            return response()->json($assets, 200); // 200 OK status code
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
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'string|nullable',
            'category_id' => 'required|integer', // Adjust validation rules as needed
            'acquisition_date' => 'date|nullable',
            'division_id' => 'required|integer', // Adjust validation rules as needed
            'manufacturer' => 'string|nullable',
            'serial_number' => 'string|nullable',
            'status' => 'integer|nullable',
        ]);

        $asset = Asset::create($validatedData);

        return response()->json($asset, 201); // 201 Created status code
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $asset = Asset::find($id);

        if (!$asset) {
            return response()->json(['error' => 'Asset not found'], 404); // 404 Not Found status code
        }

        return response()->json($asset, 200); // 200 OK status code
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $asset = Asset::find($id);

        if (!$asset) {
            return response()->json(['error' => 'Asset not found'], 404); // 404 Not Found status code
        }

        $validatedData = $request->validate([
            'name' => 'string',
            'description' => 'string|nullable',
            'category_id' => 'integer', // Adjust validation rules as needed
            'acquisition_date' => 'date|nullable',
            'division_id' => 'integer', // Adjust validation rules as needed
            'manufacturer' => 'string|nullable',
            'serial_number' => 'string|nullable',
            'status' => 'integer|nullable',
        ]);

        $asset->update($validatedData);

        return response()->json($asset, 200); // 200 OK status code
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asset = Asset::find($id);

        if (!$asset) {
            return response()->json(['error' => 'Asset not found'], 404); // 404 Not Found status code
        }

        $asset->delete();

        return response()->json(['message' => 'Asset deleted successfully'], 200); // 200 OK status code
    }
}
