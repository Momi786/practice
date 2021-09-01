<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ExperienceModel;
use App\Models\AboutModel;

class HomeController extends Controller
{
    public function index(){
        $data = ExperienceModel::all();
        $about = AboutModel::all();
        return view('web.index',compact('data','about'));
    }
}
