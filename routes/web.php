<?php

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


/* 
| Examples of creating resources to return data from the database as JSON,
| this would be needed for use with Vue and Axios on the front end, 
| the best stack of em all.
| 
| the /user endpoint returns all users as a collection
| 
| the /tweet endpoint returns a single tweet, found by the id of the table.
*/

use App\Http\Resources\User as UserResource;
use App\User;

use App\Http\Resources\Tweet as TweetResource;
use App\Tweet;

Route::get('/user', function () {
    return UserResource::collection(User::all());
});

// Route::get('/profiles/{user}/followers', 'ProfilesController@showfollowers');


Route::get('/tweet', function () {
    return new TweetResource(Tweet::find(1));
});



// Pre-auth landing page

Route::get('/', function () {
    return view('welcome');
});


// Authed routes 

Route::middleware('auth')->group(function () {

    // Tweets routes 

    Route::get('/tweets', 'TweetController@index')->name('home');

    Route::post('/tweets', 'TweetController@store');

    // Profiles routes

    Route::post('/profiles/{user}/follow', 'FollowsController@store')->name('home');

    Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->middleware('can:edit,user');

    Route::patch('/profiles/{user}', 'ProfilesController@update');

});

// Profile page, no auth needed

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');

Auth::routes();
