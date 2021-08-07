<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use App\Models\Skill;

class MainPagesController extends Controller
{


    public function index()
    {
        $projects = Project::all();
        return view('projects_page.show_projects', compact('projects'));
    }


    public function chart()
    {
        $skills = Skill::all();
        return view('skills_page.show_skills', compact('skills'));
    }

    public function main() {
        $projects = Project::all();
        $skills = Skill::all();
        return view('main', compact('projects','skills'));
    }

    // Testing Search Function

    public function search(Request $request){

        $query = $request->input('query');

        $searched_items = Project::where('project_title', 'like', "%$query%")->orWhere('project_description', 'like', "%$query%")->get();

        return view('searchPage',compact('searched_items'));
    }


}
