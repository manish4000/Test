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


