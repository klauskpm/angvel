<?php

class UserTest extends TestCase {
	/**
	 * Username is required
	 */
	public function testUsernameIsRequired()
	{
		// Create a new User
		// $data = array('name' => 'klaus', 'username' => 'usuario', 'password' => 'passwor');
		$user = new User();
		$user->name = 'klaus';
		$user->password = 'password';

		// User should not save
		$this->assertFalse($user->save());

		// Save the errors
		$errors = $user->getErrors()->all();

		// There should be 1 error
		$this->assertCount(1, $errors);

		// The username error should be set
		$this->assertEquals($errors[0], "O campo de usuário deve ser preenchido.");
	}
}