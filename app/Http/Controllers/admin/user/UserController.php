<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Models\candidateAwardModel;
use App\Models\CandidateDetailsModel;
use App\Models\candidateEducationModel;
use App\Models\candidateExperienceModel;
use App\Models\candidateSkillModel;
use App\Models\EmployerDetailsModel;
use App\Models\EmployerTeamModel;
use App\Models\Job\JobCategoryModel;
use App\Models\Job\SalaryTypeModel;
use App\Models\LocationModel;
use App\Models\socialNetworks;
use App\Models\User;
use App\Models\UserSocialNetwork;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){

        $user_data =  User::where('role',$request->role)->paginate(10);
        if($request->role == "candidate"){

            return view('admin.user.candidate',compact('user_data'));

        }elseif($request->role == "employer"){    
            return view('admin.user.employer',compact('user_data'));

        }
      

    }


    public function changeStatus(Request $request){

        $data =  User::select('is_active')->where('id',$request->id)->first()->toArray();;

        $status =($data['is_active'] == '1')?'0':'1';

      if(User::where('id',$request->id)->update(['is_active'=> $status ])){

        return   redirect()->back()->with('status_update','The status is updated');       

       }else{
           return   redirect()->back()->with('status_not_update', 'Oops.. somthing went wrong');    
       }  

    }

    public function profile(Request $request){


        $user = User::select('role')->where('id',$request->id)->first();
  

        if($user->role == "candidate"){

            $resume =   User::select('users.*','candidate_details.*','candidate_resume.portfolio_photos','candidate_resume.cv','locations.title as location','job_categories.title as job_category')
            ->leftJoin('candidate_details','candidate_details.user_id','=','users.id')
            ->leftJoin('locations','locations.id','=','candidate_details.location_id')
            ->leftJoin('job_categories','job_categories.id' ,'=' ,'users.job_category_id')
            ->leftJoin('candidate_education','candidate_education.user_id','=','users.id')
            ->leftJoin('candidate_resume','candidate_resume.user_id','=','users.id')
            ->where('users.id',$request->id)->first(); 

        

                $resume_education = candidateEducationModel::where('user_id',$request->id)->get();                                        
                $resume_experience = candidateExperienceModel::where('user_id',$request->id)->get();                                        
                $resume_awards = candidateAwardModel::where('user_id',$request->id)->get();                                        
                $resume_skills = candidateSkillModel::where('user_id',$request->id)->get();  
                    
            return view('admin.user.candidate_profile',compact('resume','resume_education','resume_experience','resume_awards','resume_skills'));

        }elseif($user->role == "employer"){    


            
            $employer_details  = EmployerDetailsModel::where('id',$request->id)->first();
            $locations = LocationModel::where('is_active',1)->get();
        
            $social_networks = socialNetworks::where('is_active',1)->get();
            $job_categories = JobCategoryModel::where('is_active',1)->get();
            $employer_team_details = EmployerTeamModel::where('user_id',$request->id)->get();
    
            $user_social_networks = UserSocialNetwork::where('user_id',$request->id)->get();
    
            return view('admin.user.employer_profile',compact('user_details','social_networks','employer_details','locations','job_categories','employer_team_details','user_social_networks'));



        }

    }



}
