<?php

namespace App\Http\Controllers\website\candidate;

use App\Http\Controllers\Controller;
use App\Models\CandidateDetailsModel;
use App\Models\SalaryTypeModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(){    

        $user_details = Auth::user();
        $salary_types =  SalaryTypeModel::where('is_active',1)->get();
        return view('website.candidate.profile',compact('salary_types','user_details'));
    }

    public function updateProfile(Request $request){

        $validator = Validator::make($request->all(), [  
            'name' => 'required|string',
            'phone' => 'nullable|numeric|digits_between:10,10',
            'address' => 'nullable', 
            'dob' => 'nullable|date' ,
            'email' => "required|email",
            'featured_image' => 'nullable|image|mimes:png,jpg,jpeg|max:524' ,
            'cover_image' => 'nullable|image|mimes:png,jpg,jpeg|max:524' ,
            'job_title' => "nullable|string",
            'salary' =>"nullable|numeric",
            'salary_type_id' =>"nullable|numeric",
            'introduction_video_url' =>"nullable|url",
            'description' => "nullable",
            'location_id_' => "nullable|numeric",
            'friendly_address' => "nullable|string",
            'candidate_tags' => "nullable|string",

        ]);

        if($validator->fails()){
            return response()->json(['status' => 401 ,'error' => $validator->errors()->toArray() ]);
        }else{

            //this is for user update
              $user =   User::find(Auth::user()->id);

              $user->name = $request->name;
              $user->phone = $request->phone;
              $user->email = $request->email;
 
               $user->save(); 


               //check data is already exist or not 
                $check_data =  CandidateDetailsModel::where('user_id',$user->id)->first();

               

                $candidate_details = new CandidateDetailsModel();
               

               $candidate_details->dob = $request->dob;
               $candidate_details->job_title = $request->job_title;
               $candidate_details->salary = $request->salary;
               $candidate_details->salary_type_id = $request->salary_type_id;
               $candidate_details->introduction_video_url = $request->introduction_video_url;
               $candidate_details->description = $request->description;
               $candidate_details->location_id = $request->location_id;
               $candidate_details->friendly_address = $request->friendly_address;
               $candidate_details->candidate_tags = $request->candidate_tags;

                
               $candidate_details->save();


            //this is for user_details update or insert

               return response()->json(['status' => 200 ,'message' => "data is updated"]);

        }
           


    }

}
