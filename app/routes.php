<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/rottentomatoes/search','LoginController@verifyLogin');

Route::get('login', function(){
	return View::make('login');
});

Route::get('add-user', function(){
  return View::make('add-user');
});

Route::get('sign-up', function(){
  return View::make('sign-up');
});

Route::get('edit-user', function(){
  return View::make('edit-user');
});

Route::get('edit-user-only', function(){
  return View::make('edit-user-only');
});
Route::get('login-check', function(){
	return View::make('login-check');
});

Route::get('rottentomatoes', function(){
   $rottentomatoes = new \Itp\Api\RottenTomatoesSearch();
   $json =$rottentomatoes->getResults(Input::get('title')); //need to pass title

   //dd($json);
    return View::make('rottentomatoes', [
        'movies' => $json->movies

        ]);


});

Route::get('/rottentomatoes/search', function()
{
    return View::make('rottentomatoes-search');
});

Route::get('/userlist', 'LoginController@listUsers');
Route::get('/userverify', 'LoginController@loginUser');
Route::get('/adduserprocess', 'LoginController@addUser');
Route::get('/edituserprocess', 'LoginController@editUser');
Route::get('/edituseronly', 'LoginController@editUserOnly');
Route::get('/remove-user', 'LoginController@removeUser');
Route::get('/logout', 'LoginController@logout');
Route::get('/usersOnly', 'LoginController@listUsersOnly');
Route::get('/displayUsersAgain', 'LoginController@displayUsersAgain');
Route::get('/signupprocess', 'LoginController@signUp');