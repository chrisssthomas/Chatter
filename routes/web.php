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

use App\User;
use App\Tweet;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Tweet as TweetResource;


// Route::get('/profiles/{user}/followers', 'ProfilesController@showfollowers');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    // Tweets routes

    Route::get('/tweets', 'TweetController@index')->name('home');

    Route::post('/tweets', 'TweetController@store');

    // Profiles routes

    Route::post('/profiles/{user}/follow', 'FollowsController@store')->name('follow');

    Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->middleware('can:edit,user');

    Route::get('/profiles/{user}/message', 'MessageController@show');

    Route::patch('/profiles/{user}', 'ProfilesController@update')->middleware('can:edit,user');

    Route::get('/explore', 'ExploreController');

    Route::post('/tweets/{tweet}/like', 'TweetlikesController@store');

    Route::delete('/tweets/{tweet}/like', 'TweetlikesController@destroy');
});

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');


Auth::routes();
