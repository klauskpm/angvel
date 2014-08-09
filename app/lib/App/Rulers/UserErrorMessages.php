<?php

namespace App\Rulers;

class UserErrorMessages extends ErrorMessages {

	public $newMessages = array(
		'username.required' => 'O campo de usuário deve ser preenchido.',
		'password.min' => 'O campo de senha deve ter no minimo, :min letras.'
	);

	public function __construct()
	{
		$this->mergeMessages($this->newMessages);
	}

}