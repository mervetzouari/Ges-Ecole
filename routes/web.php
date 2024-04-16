<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\KidsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StaticController::class, 'index' ]);

Route::get('about-me', function () {
    return view('aboutme');
}) ; 

Route::view('contact-me','contact', ["pagename"=>"Mon nom ", "description"=>"décrire ur self"]);

Route::get('category/{id}',[StaticController::class, 'category' ]);
Route::get('contact1-me',[StaticController::class, 'contact1' ])-> name ("contact");/* named route : nadel esm ech najem nadilou w mana9ach nadel men page el page */

Route::resource('kids',KidsController::class); // inadi lel edit creat show delet 