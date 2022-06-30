<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){

        if($request->role == "candidate"){

            $user_data =  User::where('role',$request->role)->paginate(10);
    
            return view('admin.user.candidate',compact('user_data'));

        }elseif($request->role == "employer"){

            $user_data =  User::where('role',$request->role)->paginate(10);
    
            return view('admin.user.employer',compact('user_data'));

        }
      

    }
}
