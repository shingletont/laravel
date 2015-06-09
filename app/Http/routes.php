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
Route::filter('auth', function() {
    if (Auth::guest()) return Redirect::guest('login');
});

Route::get('/', 'MerchItemController@index');
Route::get('/about', 'PagesController@about');

// Route::get('users','UsersController@index');

// Route::get('users/{username}', 'UsersController@show');

Route::resource('users', 'UsersController');
Route::resource('merchitem', 'MerchItemController');
//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/*
Route::get('users', function())
{
 	$users = User::all();   // select * from users
 	$user = User::find(1);
 	return $user->username;
});
*/


// Route::get('/addUser', function()
// {
// 	\App\User::create([
// 		'name' => 'JeffreyWay',
// 		'email' => 'jeffrey@laravasts.com',
// 		'password'=> Hash::make('changeme')
// 	]);
// 	return 'Done';
// });

Route::resource('sessions', 'SessionsController');