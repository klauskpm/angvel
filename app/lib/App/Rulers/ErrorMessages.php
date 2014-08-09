<?php
/**
*
* @Author Klaus Kazlauskas
* @Date 2014-08-08
* Laravel 4.2
*
*/
namespace App\Rulers;

class ErrorMessages {

	// To see other examples, please visit:
	// http://laravel.com/docs/validation#available-validation-rules

	public $messages = array(
		'required' => 'O campo :attribute deve ser preenchido.',
		'min' => 'O campo :attribute deve ter no minimo, :min caracteres.'
	);

	public function mergeMessages($newMessages) {
		return $this->messages = array_merge($this->messages, $newMessages);
	}

}