<?php

namespace App\Http\Controllers\Utilities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//model imports
use App\Models\Utilities\Organisation;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $organisation = Organisation::all();
            return response()->json($organisation, 200); // 200 OK status code
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
            'organisation_name' => 'string',
            'organisation_logo' => 'string|nullable',

        ]);

        $organisation = Organisation::create($validatedData);

        return response()->json($organisation, 200); // 200 OK status code

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $organisation = Organisation::find($id);

        if (!$organisation) {
            return response()->json(['error' => 'Organisation not found'], 404); // 404 Not Found status code
        }

        return response()->json($organisation, 200); // 200 OK status code
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
         $organisation = Organisation::find($id);

         if (!$asset) {
             return response()->json(['error' => 'Organisation not found'], 404); // 404 Not Found status code
         }

         $validatedData = $request->validate([
             'organisation_name' => 'string',
             'organisation_logo' => 'string|nullable',

         ]);

         $organisation->update($validatedData);

         return response()->json($organisation, 200); // 200 OK status code
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $organisation = Organisation::find($id);

        if (!$organisation) {
            return response()->json(['error' => 'Organisation not found'], 404); // 404 Not Found status code
        }

        $organisation->delete();

        return response()->json(['message' => 'Organisation deleted successfully'], 200); // 200 OK status code
    }
}
