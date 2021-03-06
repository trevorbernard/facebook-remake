<?php

/*
 *
 * */

//Event::listen('Larabook.Registration.Events.UserRegistered', function ()
//{
//
//});

Route::get('/', [
    'as'   => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('register', [
    'as'   => 'register_path',
    'uses' => 'RegistrationController@create'
]);

Route::post('register', [
    'as'   => 'register_path',
    'uses' => 'RegistrationController@store'
]);

/*
 * Sessions
 */
Route::get('login', [
    'as'   => 'login_path',
    'uses' => 'SessionsController@create'
]);

Route::post('login', [
    'as'   => 'login_path',
    'uses' => 'SessionsController@store'
]);

Route::get('logout', [
    'as'   => 'logout_path',
    'uses' => 'SessionsController@destroy']);
/*
 * statuses
 */
Route::resource('status','StatusesController');
Route::get('statuses', [
    'as'   => 'statuses_path',
    'uses' => 'StatusesController@index'
]);

Route::post('statuses', [
    'as'   => 'status_store',
    'uses' => 'StatusesController@store'
]);

Route::post('statuses/{id}/comments', [
    'as'   => 'comment_path',
    'uses' => 'CommentsController@store'
]);

//Route::get('messaging', function ()
//{
//    return View::make('messaging.message');
//});

Route::get('users', [
    'as'   => 'users_path',
    'uses' => 'UsersController@index'
]);

Route::get('@{username}', [
    'as'   => 'profile_path',
    'uses' => 'UsersController@show'
]);

/*
 * this will be the follow route to the the following
 * controller. temp pointing to users controller.
 */
Route::post('follows', [
    'as'   => 'follows_path',
    'uses' => 'FollowsController@store'
]);


Route::delete('follows/{id}', [
    'as'   => 'follow_path',
    'uses' => 'FollowsController@destroy'
]);

/*
 * Password resets
 */

Route::controller('password', 'RemindersController');

Route::get('github/{username}', [
    'as'   => 'github_api',
    'uses' => 'ApiController@show'
]);

Route::get('github', [
    'as'   => 'github_api',
    'uses' => 'ApiController@index'
]);

/*
 * travis custom stuff
 */
//Route::get('api-test', function ()
//{
//    return View::make('messaging.api-test');
//});

Route::get('maps', [
    'as'   => 'google_maps',
    'uses' => 'ApiController@google'
]);

//Route::get('geolocation',[
//    'as' => 'geolocation',
//    function(){
//        return View::make('messaging.geolocation');
//    }]
//);

Route::resource('comment','CommentsController');
//return View::make('messaging.geoLocation');