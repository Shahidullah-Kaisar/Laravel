<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;


Route::get('/jobs/search', [JobController::class, 'search'])->name('jobs.search');


Route::resource('jobs', JobController::class); //এখানে 'jobs' হচ্ছে route prefix (বা base URL path)
Route::get('/', function(){ return redirect()->route('jobs.index'); });




