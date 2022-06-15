<?php

namespace App\Http\Controllers\website\employer;

use App\Http\Controllers\Controller;
use App\Models\EmployerDetailsModel;
use App\Models\Job\JobCategoryModel;
use App\Models\LocationModel;
use App\Models\socialNetworks;
use App\Models\User;
use App\Models\UserSocialNetwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(){    

        $user_details = Auth::user();
        $employer_details  = EmployerDetailsModel::where('id',$user_details->id)->first();
        $locations = LocationModel::where('is_active',1)->get();
    
        $social_networks = socialNetworks::where('is_active',1)->get();
        $job_categories = JobCategoryModel::where('is_active',1)->get();

        $user_social_networks = UserSocialNetwork::where('user_id',$user_details->id)->get();

        return view('website.employer.profile',compact('user_details','social_networks','employer_details','locations','job_categories','user_social_networks'));
    }

    public function updateProfile(Request $request){


            // return response($request->all());

          $validator = Validator::make($request->all(), [  
            'name' => 'nullable',
            'phone' => 'nullable|numeric|digits_between:10,10',
            'address' => 'nullable', 
            'email' => "required|email",
            'logo_image' => 'nullable|image|mimes:png,jpg,jpeg|max:524' ,
            'cover_image' => 'nullable|image|mimes:png,jpg,jpeg|max:524' ,
            'introduction_video_url' =>"nullable|url",
            'url.*' =>"nullable|url",
            'network.*' =>"nullable|numeric",
            'description' => "nullable",
            'location_id' => "nullable|numeric",
            'friendly_address' => "nullable|string",
            'website' => "nullable|url"

        ]);

        if($validator->fails()){
            return response()->json(['status' => 401 ,'error' => $validator->errors()->toArray() ]);
        }else{


            return DB::transaction( function() use ($request){
                        //this is for user update
                        $user =   User::find(Auth::user()->id);

                        $user->phone = $request->phone;
                        $user->email = $request->email;
            
                        $user->save(); 

                    //this part for save user social network saving 


                         $user_social_network_model = new UserSocialNetwork;

                         $user_social_network_model->where('user_id',$user->id)->delete();

                           $social_platform = $request->network;

                           $url = $request->url;

                           $loop_time = ($social_platform == null)? 0 : count($social_platform);

                          for($i =0 ;$i<$loop_time; $i++){

                            $data = [
                             'user_id' => $user->id ,
                             'social_network_id' => $social_platform[$i],
                             'url' => $url[$i]
                            ];

                            $user_social_network_model->insert($data);

                            $data = [];

                          }


                    //check data is already exist or not 
                        $check_data =  EmployerDetailsModel::where('id',$user->id)->first();

                        if($check_data == null){
                            $employer_details = new EmployerDetailsModel();
                        }else{

                            $employer_details  = EmployerDetailsModel::where('id',$user->id)->first();
                        }
                    
                        
       
                
                        if($request->hasFile('logo_image')){
                
                            $image =  $request->file('logo_image');
                            $extension = $image->getClientOriginalExtension();
                            $file_name = 'employer-'.time().'.'.$extension;
                            $image->move(EMPLOYER_LOGO_IMAGE_URL,$file_name);
                            $employer_details->logo_image = $file_name;
                        }

                        if($request->hasFile('cover_image')){
                
                            $image =  $request->file('cover_image');
                            $extension = $image->getClientOriginalExtension();
                            $file_name = 'candidate-'.time().'.'.$extension;
                            $image->move(EMPLOYER_COVER_IMAGE_URL,$file_name);
                            $employer_details->cover_image = $file_name;
                        }   

                        // $cat=  $request->candidate_job_categories;

                        //  $job_categories = implode(',', $cat);


                        $employer_details->introduction_video_url = $request->introduction_video_url;
                        $employer_details->description = $request->description;
                        $employer_details->website = $request->website;
                        $employer_details->location_id = $request->location_id;
                        $employer_details->friendly_address = $request->friendly_address;
       
                            


                        if($employer_details->save()){

                            return response()->json(['status' => 200, "msg" =>"your data is update ",$social_platform ]); 

                        }else{

                            DB::rollback();
                            return response()->json(['status' => 500, "msg" =>"database error" ]); 
                        } 

           
    });

    }
}

}