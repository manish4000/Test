<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Job\JobCategoryModel;
use App\Models\Job\JobTypeModel;
use App\Models\JobModel;
use App\Models\LocationModel;
use Illuminate\Http\Request;

class JobsController extends Controller
{

    public function index(){

        $jobs_data = JobModel::where('is_active',1)->get();

        $Job_types = JobTypeModel:: where('is_active',1)->get();
        $job_categories = JobCategoryModel::where('is_active',1)->where('parent_id',null)->get();
        $locations = LocationModel::where('is_active',1)->get();


        return view('website.jobs',compact('jobs_data','Job_types','job_categories','locations'));
    }
}
