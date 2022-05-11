<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website.home');
})->name('home');
Route::get('/candidates', function () {
    return view('website.candidates');
})->name('candidates');
Route::get('/jobs', function () {
    return view('website.jobs');
})->name('jobs');

Route::get('/job-by-category', function () {
    return view('website.job_by_category');
})->name('job_by_category');

Route::get('/job-by-location', function () {
    return view('website.jobs_by_location');
})->name('job_by_location');

Route::get('/contact-us', function () {
    return view('website.contact_us');
})->name('contact');

Route::get('/career-with-jobsbloc', function () {
    return view('website.career_with_jobsbloc');
})->name('career_with_jabsbloc');

Route::get('/login-register', function () {
    return view('website.login_register');
})->name('login_register');

Route::get('/about-us', function () {
    return view('website.about_us');
})->name('about_us');

Route::get('/terms-conditions', function () {
    return view('website.terms_condition');
})->name('terms_conditions');

Route::get('/privacy-policy', function () {
    return view('website.privacy_policy');
})->name('privacy_policy');


Route::get('/test', function () {
    return view('website.test');
});
// this is for candidates
Route::get('/candidates/dashboard/', function () {
    return view('website.candidate.dashboard');
});

Route::get('/candidates/profile/', function () {
    return view('website.candidate.profile');
});

Route::get('/candidates/resume/', function () {
    return view('website.candidate.resume');
});

Route::get('/candidates/shortlist-jobs/', function () {
    return view('website.candidate.shortlist_jobs');
});

Route::get('/candidates/applied-jobs/', function () {
    return view('website.candidate.applied_jobs');
});
Route::get('/candidates/alert-jobs/', function () {
    return view('website.candidate.alert_job');
});
Route::get('/candidates/change-password/', function () {
    return view('website.candidate.change_password');
});

Route::get('/candidates/delete-profile/', function () {
    return view('website.candidate.delete_profile');
});

//this is for employer 

Route::get('/employer/dashboard/', function () {
    return view('website.employer.dashboard');
});

Route::get('/employer/profile/', function () {
    return view('website.employer.profile');
});

Route::get('/employer/shortlist-candidates/', function () {
    return view('website.employer.shortlist_candidates');
});



Route::get('/employer/resume/', function () {
    return view('website.employer.resume');
});



Route::get('/employer/applied-jobs/', function () {
    return view('website.employer.applied_jobs');
});
Route::get('/employer/alert-jobs/', function () {
    return view('website.employer.alert_job');
});
Route::get('/employer/change-password/', function () {
    return view('website.employer.change_password');
});

Route::get('/employer/delete-profile/', function () {
    return view('website.employer.delete_profile');
});

Route::get('/employer/my-jobs/', function () {
    return view('website.employer.my_jobs');
});

Route::get('/employer/cart/', function () {
    return view('website.employer.cart');
});

Route::get('/employer/check-out/', function () {
    return view('website.employer.checkout');
});

Route::get('/employer/submit-job/', function () {
    return view('website.employer.submit_job');
});
Route::get('/employer/submit-job-form/', function () {
    return view('website.employer.submit_job_form');
});


//route for admin


//====================================guset admin ==============================================

Route::group(['prefix' => 'admin','middleware'=> ['guest','preventBackHistory'] ,'namespace' => 'App\Http\Controllers\Admin'],function(){
    Route::get('/',function (){  return view('admin.auth.login');})->name('login_view');
    // Route::post('/login','Auth\LoginController@login')->name('admin.login');
 });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
