<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function index(){

        $candidates =   User::select('users.*','candidate_details.*','locations.title as location')
                                                ->leftJoin('candidate_details','candidate_details.user_id','=','users.id')
                                                ->leftJoin('locations','locations.id','=','candidate_details.location_id')
                                                ->where('role','candidate')->get(); 

        return view('website.candidates',compact('candidates'));
    }
}
