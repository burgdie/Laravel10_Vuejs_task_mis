<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return view('management.departments.index', compact('departments'));
    }

    public function create()
    {
        return view('management.departments.create');
    }

    public function store(Request $request)
    {
        Department::create([
            'user_id' => 1,
            'director_id' => $request->director_id,
            'name' => $request->name,

        ]);
        return redirect()->route('departmentsIndex');
    }
    public function edit($id)
    {
        $department = Department::find($id);
        //return $department;
        return view('management.departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        Department::where('id', $id)->update([
            'director_id' => $request->director_id,
            'name' => $request->name,
        ]);

        return redirect()->route('departmentsIndex');
    }

    public function delete($id)
    {
        Department::where('id', $id)->delete();
        return redirect()->route('departmentsIndex');
    }
}
