<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes - Single Page Portfolio (Frontend Only)
|--------------------------------------------------------------------------
| All sections (Home, About, Skills, Qualifications, Projects, Contact, Socials)
| are now unified into a single responsive frontend page.
*/

// Main Portfolio Single-Page (No Authentication Required)
Route::get('/', function () {
    return view('home');
})->name('home');

// Optional standalone fallback routes if needed
Route::get('/skills', function () {
    return redirect('/#skills');
});

Route::get('/qualifications', function () {
    return redirect('/#qualifications');
});

Route::get('/socials', function () {
    return redirect('/#social-media');
});

// Frontend contact endpoint simulation (returns success JSON)
Route::post('/contact', function (Request $request) {
    return response()->json([
        'status' => 'success',
        'message' => 'Thank you! Your message has been sent successfully.'
    ]);
});
