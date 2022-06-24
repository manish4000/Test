<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\JobModel;
use Illuminate\Http\Request;

class JobsController extends Controller
{

    public function index(){

        $jobs_data = JobModel::where('is_active',1)->get();


        return view('website.jobs',compact('jobs_data'));
    }
}
