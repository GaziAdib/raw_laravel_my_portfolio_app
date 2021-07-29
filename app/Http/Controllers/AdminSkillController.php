<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class AdminSkillController extends Controller
{
    
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    
    public function create()
    {
        return view('admin.skills.create_skills');
    }

    
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'value' => 'required'
        ]);

    
        $skill = new Skill;

        
        $skill->name = $request->name;
        $skill->value = $request->value;
      

        $skill->save();
        
        return redirect()->route('admin.skills.index')->with('success', 'Skill Created Successfully!');
        
    }

   
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('admin.skills.edit_skills', compact('skill'));
        
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required'
        ]);

        $skill = Skill::find($id);

        $skill->name = $request->name;
        $skill->value = $request->value;

        $skill->save();

        return redirect()->route('admin.skills.index')->with('success', 'Skill Updated Successfully!');
    }

   
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->route('admin.skills.index')->with('success', 'Skill Deleted Successfully!');
    }
}
