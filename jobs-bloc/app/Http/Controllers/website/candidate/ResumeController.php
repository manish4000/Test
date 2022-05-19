<?php

namespace App\Http\Controllers\website\candidate;

use App\Http\Controllers\Controller;
use App\Models\ResumeModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ResumeController extends Controller
{
    public function index(){    
        return view('website.candidate.resume');
    }

    public function updateResume(Request $request){


            // return response($request->all());
          $validator = Validator::make($request->all(), [              
            'portfolio_photos.*' => 'nullable|image|mimes:png,jpg,jpeg|max:524' ,
            'cv' => 'nullable|mimes:pdf,docx,doc' ,          

        ]);

        if($validator->fails()){
            return response()->json(['status' => 401 ,'error' => $validator->errors()->toArray() ]);
        }else{


            return DB::transaction( function() use ($request){

                    $user_id = Auth::user()->id;
                   
                    //this part for save user social network saving 


                        //  $user_social_network_model = new UserSocialNetwork;

                        //  $user_social_network_model->where('user_id',$user->id)->delete();

                        //    $social_platform = $request->network;

                        //    $url = $request->url;

                        //   for($i =0 ;$i<count($social_platform); $i++){

                        //     $data = [
                        //      'user_id' => $user->id ,
                        //      'social_network_id' => $social_platform[$i],
                        //      'url' => $url[$i]
                        //     ];

                        //     $user_social_network_model->insert($data);

                        //     $data = [];

                        //   }


                          



                    //check data is already exist or not 
                        $check_data =  ResumeModel::where('user_id',$user_id)->first();

                        if($check_data == null){
                            $candidate_resume = new ResumeModel();
                        }else{

                            $candidate_resume  = ResumeModel::where('user_id',$user_id)->first();
                        }
                                            
                        $candidate_resume->user_id =  $user_id;
                        

                        

                        if($request->hasFile('portfolio_photos')){

                            $portfolio_photos = [];  
                            
                            foreach($request->file('portfolio_photos') as $key => $image)
                                {
                                    $portfolio =  $request->file('portfolio_photos');

                                    $extension = $image->getClientOriginalExtension();
                                    $file_name = 'candidate-portfolio'.time().'.'.$extension;
                                    $image->move(CANDIDATE_PORTFOLIO_IMAGE_URL,$file_name);

                                    array_push($portfolio_photos, $file_name);

                                }
                            
                        }

                        $candidate_resume->portfolio_photos =  implode(',',$portfolio_photos);


                        if($request->hasFile('cv')){
                            
                                    $cv =  $request->file('cv');
                                    $extension = $cv->getClientOriginalExtension();
                                    $file_name = 'candidate-cv'.time().'.'.$extension;
                                    $cv->move(CANDIDATE_CV_URL,$file_name);

                                    $candidate_resume->cv = $file_name;

                        }

                        

                        if($candidate_resume->save()){

                            return response()->json(['status' => 200, "msg" =>"your data is update " ]); 

                        }else{

                            DB::rollback();
                            return response()->json(['status' => 500, "msg" =>"database error" ]); 
                        } 

           
    });

    }
}
}
