<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


Route::get('/', function () {

    return view('home');
});

Route::get('/jobs/create', function(){

    return view('jobs.create');

});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


Route::get('/jobs/{id}', function ($id)  {
    
    $job = Job::find($id);

   return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function(Request $request){
    // Validate the incoming request data
    $validatedData = $request->validate([
        'title' => 'required|string',
        'salary' => 'required|numeric'
    ]);

    // Log the validated data to inspect it
    Log::info('Validated Data:', $validatedData);

    // Create the job listing with validated data
    Job::create([
        'title' => $validatedData['title'],
        'salary' => $validatedData['salary'],
        'employer_id' => 1  // Assuming 'employer_id' is always 1 for simplicity; adjust as necessary
    ]);

    dd($validatedData);

    //return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/team', function () {
    return view('team');
});

