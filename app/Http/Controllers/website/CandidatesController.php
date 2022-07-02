<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\candidateAwardModel;
use App\Models\candidateEducationModel;
use App\Models\candidateExperienceModel;
use App\Models\candidateSkillModel;
use App\Models\User;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function index(){

        $candidates =   User::select('users.*','candidate_details.location_id','locations.title as location','job_categories.title as job_category')
                                                ->leftJoin('candidate_details','candidate_details.user_id','=','users.id')
                                                ->leftJoin('locations','locations.id','=','candidate_details.location_id')
                                                ->leftJoin('job_categories','job_categories.id' ,'=' ,'users.job_category_id')
                                                ->where('role','candidate')->get(); 

        return view('website.candidates',compact('candidates'));
    }


    public function candidateDetails(Request $request){

       

        $resume =   User::select('users.*','candidate_details.*','locations.title as location','job_categories.title as job_category')
                                                ->leftJoin('candidate_details','candidate_details.user_id','=','users.id')
                                                ->leftJoin('locations','locations.id','=','candidate_details.location_id')
                                                ->leftJoin('job_categories','job_categories.id' ,'=' ,'users.job_category_id')
                                                ->leftJoin('candidate_education','candidate_education.user_id','=','users.id')
                                                ->where('users.id',$request->id)->first(); 

        $resume_education = candidateEducationModel::where('user_id',$request->id)->get();                                        
        $resume_experience = candidateExperienceModel::where('user_id',$request->id)->get();                                        
        $resume_awards = candidateAwardModel::where('user_id',$request->id)->get();                                        
        $resume_skills = candidateSkillModel::where('user_id',$request->id)->get();                                        



        return view('website.candidate_details',compact('resume','resume_education','resume_experience','resume_awards','resume_skills'));


    }


}
