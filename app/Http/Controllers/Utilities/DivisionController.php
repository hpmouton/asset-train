<?php

namespace App\Http\Controllers\Utilities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//model imports
use App\Models\Utilities\Division;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $divisions = Division::all();
        return response()->json($divisions, 200);
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
        $validator = Validator::make($request->all(), [
            'division_name' => 'required|string|max:255',
            'division_location' => 'required|string|max:255',
            'dep_id' => 'required|exists:departments,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400); // 400 Bad Request status code
        }

        $division = Division::create($request->all());
        return response()->json($division, 201); // 201 Created status code

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $division = Division::find($id);

        if (!$division) {
            return response()->json(['error' => 'Division not found'], 404); // 404 Not Found status code
        }

        return response()->json($division, 200);

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
        $division = Division::find($id);

        if (!$division) {
            return response()->json(['error' => 'Division not found'], 404); // 404 Not Found status code
        }

        $validator = Validator::make($request->all(), [
            'division_name' => 'required|string|max:255',
            'division_location' => 'required|string|max:255',
            'dep_id' => 'required|exists:departments,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400); // 400 Bad Request status code
        }

        $division->update($request->all());
        return response()->json($division, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $division = Division::find($id);

        if (!$division) {
            return response()->json(['error' => 'Division not found'], 404); // 404 Not Found status code
        }

        $division->delete();
        return response()->json(['message' => 'Division deleted successfully'], 200);

    }
}
