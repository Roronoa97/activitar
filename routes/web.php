<?php

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

Route::view('/', 'index')->name('index');
Route::view('/about-us', 'about-us')->name('aboutus');
Route::view('/contact-us', 'contact-us')->name('contactus');
Route::resource('/profile', App\Http\Controllers\ProfileController::class);
Route::post('/contact-us', function(Request $request){
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message
    ];
    // dd($data);
    Mail::to('activitar@activitar.com')->send(new ContactUs($data));
    
    if(!Mail::failures()){
        return redirect()->route('contactus')->with('success', 'Congratulations, Please check your email service (Mailtrap or Mailgun or anything');
    }
});


