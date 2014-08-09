<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

use App\Rulers\UserErrorMessages;

class User extends \Model implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $guarded = [];

	protected $rules = array(
		'name' => 'required',
		'username' => 'required|min:6',
		'password' => 'required|min:8'
	);

	protected $messages = array(
		'username.required' => 'O campo de usuário deve ser preenchido.',
		'password.min' => 'O campo de senha deve ter no minimo, :min letras.'
	);
}
