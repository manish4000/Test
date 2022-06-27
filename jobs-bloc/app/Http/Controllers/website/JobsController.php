<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Job\JobCategoryModel;
use App\Models\Job\JobCategoryRelationModel;
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


    public function jobDetails(Request $request){

        $job_data = JobModel::select('job.*','locations.title as location','job_types.title as job_type')->leftjoin('job_types','job_types.id','=','job.job_type_id')
                                ->leftjoin('locations','locations.id','=','job.location_id')    
                                ->where('job.id',$request->id)->first();


                          $job_categories =  JobCategoryRelationModel::select('job_category_id')->where('job_id', $request->id)->get()->toArray();

                          
                        if($job_categories != null){

                            $job_categories_ids =    array_column($job_categories, 'job_category_id');  

                            $related_jobs = JobModel::select('job.*','locations.title as location','job_types.title as job_type')->leftjoin('job_types','job_types.id','=','job.job_type_id')
                            ->leftjoin('locations','locations.id','=','job.location_id')    
                            ->where('job.id',$request->id)->first();

                        }                          


        // $related_jobs =                         




        return view('website.job_details' ,compact('job_data'));


    }




}
