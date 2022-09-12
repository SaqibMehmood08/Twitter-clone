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
    return view('welcome');
});
Route::get('/edit', function () {
return view('edit');
});
Auth::routes();
  Route::get('/home/{user}', [App\Http\Controllers\ProfilesController::class, 'index']);
 
// move back to previous page
 Route::get('/back', [App\Http\Controllers\HomeController::class, 'return']);


 //  home page show
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  

  //  post tweet
   Route::post ( '/p',[App\Http\Controllers\PostsController::class, 'index']);


// //   show detailed profile
Route::get('/profile/{user}/edit', 'App\Http\Controllers\profilesController@edit')->name('profiles.edit');


// edit profile
Route::get('/pro/{user}/set', 'App\Http\Controllers\profilesController@set')->name('profile.set');


// Update Profile
Route::patch('/update/{user}/update', 'App\Http\Controllers\profilesController@update')->name('update.set');



// // follow user 
 Route::post('/follow/{user}',[App\Http\Controllers\FollowsController::class, 'store']);


//  fetch posts you are follwing

Route::get ( '/home', [App\Http\Controllers\PostsController::class, 'posts']);


// get one post detailed view
Route::get('/profile/{id}', [App\Http\Controllers\PostsController::class, 'getDetail']);


// fetch users for suggetions
//Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'suggetions']);