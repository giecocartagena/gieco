<?php namespace giecocartagena\Services;

use giecocartagena\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
            'codigo' => 'required|max:16|unique:users',
			'name' => 'required|max:254',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:5',
		]);
	}

	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'codigo' => $data['codigo'],
            'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
