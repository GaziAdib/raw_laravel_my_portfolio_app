<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class AdminProjectsController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.projects.create_project', compact('categories'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'project_title' => 'required',
            'project_thumbnail' => 'required',
            'project_description' => 'required',
            'project_github_link' => 'required',
            'project_video_link' => 'required'

        ]);


        $project = new Project;

        if($file = $request->file('project_thumbnail')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $project->project_thumbnail = $name;
        }

        $project->project_title = $request->project_title;
        $project->project_description = $request->project_description;
        $project->project_github_link = $request->project_github_link;
        $project->project_video_link = $request->project_video_link;
        $project->category_id = $request->category_id;


        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Project Created Successfully!');
    }


    public function show($id)
    {
        // excample


    }


    public function edit($id)
    {
        $project = Project::find($id);
        $categories = Category::all();
        return view('admin.projects.edit_project', compact('project', 'categories'));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'project_title' => 'required',
            'project_thumbnail' => 'required',
            'project_description' => 'required',
            'project_github_link' => 'required',
            'project_video_link' => 'required'

        ]);

        $project = Project::find($id);

        if($file = $request->file('project_thumbnail')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $project->project_thumbnail = $name;
        }

        $project->project_title = $request->project_title;
        $project->project_description = $request->project_description;
        $project->project_github_link = $request->project_github_link;
        $project->project_video_link = $request->project_video_link;
        $project->category_id = $request->category_id;


        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Project Created Successfully!');
    }


    public function destroy($id)
    {
        $project = Project::find($id);
        @unlink(public_path($project->project_thumbnail));
        $project->delete();
    }
}
