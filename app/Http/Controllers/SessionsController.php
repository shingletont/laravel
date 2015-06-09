<?php


Route::get('login', 'SessionController@create');
Route::get('logout', 'SessionController@destroy');
class SessionsController extends Controller{

	return View::make('sessions.create');

}