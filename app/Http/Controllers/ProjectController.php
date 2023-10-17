<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getproject()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('newtransaction')->with('projects', $projects);
    }

    public function index()
    {
        $allProjects = Project::orderBy('created_at', 'DESC')->get();

        return view('projects', compact('allProjects'));
    }

    public function create(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required'
        ]);

        if ($validated) {
            $addProject = new Project();
            $addProject->name = $request->name;
            $addProject->block_no = $request->block_number;
            $addProject->unit_no = $request->unit_number;
            $addProject->save();

            return redirect('/projects')->with('message', 'Add Project successfully!');
        } else {
            return back()->with('error', 'something went wrong!');
        }
    }

    public function edit($id)
    {
        $pageData = Project::find($id);
        return view("editprojectform", compact('pageData'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        if ($validated) {
            $pageData = Project::find($id);
            $pageData->name = $request->name;
            $pageData->block_no = $request->block_number;
            $pageData->unit_no = $request->unit_number;
            $pageData->active = $request->status;
            $pageData->save();

            return redirect('/projects')->with('message', 'Project Updated successfully!');
        } else {
            return back()->with('error', 'something went wrong!');
        }
    }


    public function destroy($id)
    {
        //
        $pageData = Project::find($id);
        $pageData->delete();
        return redirect()->back()->with('message', 'Successfully deleted');
    }
}
