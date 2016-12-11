<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ListController@show');

// Route::get('/', function () {
//     return view('welcome');
// });


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/got', [
  'middleware' => ['auth'],
  'uses' => function () {
   echo "You are allowed to view this page!";
}]);

Route::get('/auth0/callback', function() {
   dd(Auth0::getUser());
});

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback');

Route::get('/logout', function() {
    Auth::logout();
    return Redirect::home();
});

Route::get('/auth0/callback', function() {
   dd(Auth0::getUser());
});