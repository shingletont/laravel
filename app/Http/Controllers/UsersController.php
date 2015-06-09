<?php namespace App\Http\Controllers;

use Hash;
use Validator;
use Redirect;
use View;
use Input;
use \App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller {


	public function __construct(User $user)
	{
		$this->user = $user;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	//$user->username = 'NewUser';
	//$user->password = Hash::make('password');
	//$user->save();

	//$users::create([
	//	'username' => 'AnotherUser',
	//	'password' => Hash::make('1234')	
	//
	//]);

	// $user = $users::find(2);
	// $user->username = 'MorganReeves';
	// $user->save();

	// $user = $users::find(3);
	// $user->delete();

	//return $users::orderBy('id', 'asc')->take(2)->get();

	$users = $this->user->all();
	return View::make('users/index')->withUsers($users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::all();
		
		if ( ! $this->user->fill($input)->isValid())
		{

			return Redirect::back()->withInput()->withErrors($this->user->errors);

		}

		$this->user->save();

		return Redirect::route('users.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($email)
	{
			$user = $this->user->whereEmail($email)->first();
		return View::make('users.show', ['user' => $user]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
