<?php

namespace App\Http\Controllers\Utilities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//model imports
use App\Models\Utilities\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departments = Department::all();
        return response()->json($departments, 200);
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
        $this->validate($request, [
            'department_name' => 'required|string|max:255',
            'org_id' => 'required|exists:organizations,id',
        ]);

        $department = Department::create([
            'department_name' => $request->input('department_name'),
            'org_id' => $request->input('org_id'),
        ]);

        return response()->json($department, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $department = Department::find($id);

        if (!$department) {
            return response()->json(['error' => 'Department not found'], 404); // 404 Not Found status code
        }

        return response()->json($department, 200); // 200 OK status code
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
        $this->validate($request, [
            'department_name' => 'required|string|max:255',
            'org_id' => 'required|exists:organizations,id',
        ]);

        $department->update([
            'department_name' => $request->input('department_name'),
            'org_id' => $request->input('org_id'),
        ]);

        return response()->json($department, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $department->delete();

        return response()->json(['message' => 'Department deleted successfully'], 200);

    }
}
