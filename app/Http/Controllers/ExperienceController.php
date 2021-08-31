<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ExperienceModel;

class ExperienceController extends Controller
{
    // experienceList
    public function experienceList()
    {
        $allData = ExperienceModel::all();
        return view('admin.experience.experienceList',compact('allData'));
    }

    // Add experience Form
    public function addExperience()
    {
        return view('admin.experience.addExperience');
    }

    // Add Process
    public function addProcess(Request $request)
    {
        $data = $request->all();
        $newData = new ExperienceModel;
        $newData -> fill($data);
        $newData->save();
        return back()->with('suucess','Expereinece Added Successfully');
    }

    // Edit Form
    public function edit(Request $request,$id)
    {
        $editdata = ExperienceModel::find($id);
        return view('admin.experience.edit',compact('editdata'));
    }

    // Edit process

    public function editProcess(Request $request,$id)
    {
        $data = $request->all();
        $newData = ExperienceModel::find($id);
        $newData->fill($data);
        $newData->save();
        return back();
    }


    // Delete process

    public function delete(Request $request,$id)
    {
        $newData = ExperienceModel::find($id);
        $newData->delete();
        return back();
    }
}
