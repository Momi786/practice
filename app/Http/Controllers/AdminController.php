<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AboutModel;

class AdminController extends Controller
{
    // Dasboard View
    public function admin()
    {
        return view('admin.dashboard');
    }

    // About & Home Page Contant

    public function contant()
    {
        $aboutdata = AboutModel::all();
        return view('admin.about.about',compact('aboutdata'));
    }
    // Add Process
    public function addprocess(Request $request){
        $data = $request->all();
        $alldata = AboutModel::where('name',$data['name'])->first();
        $alldata->fill($data);
        $alldata->save();
        return back();


    }
}
