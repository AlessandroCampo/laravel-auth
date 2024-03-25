<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        $projects = Project::all();
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate(
            [
                'title' =>  'required|unique:projects|max:100',
                'description' => 'max:8192',
                'thumb' => 'max:250',
                'stack' => 'nullable'
            ]
        );
        Project::create($validated_data);
        return redirect()->route('dashboard');
    }

    public function show($id)
    {
        // Logic to show a specific project
    }

    public function edit($id)
    {
        // Return a view to edit the specified project
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
