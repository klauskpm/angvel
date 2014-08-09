<?php

class Model extends Eloquent {

	protected $errors;
	protected $messages = array();
	protected $rules = array();

	public function __construct(array $attributes = array())
	{
		parent::__construct($attributes);
	}

	protected static function boot()
	{
		parent::boot();

		static::saving(function($model) {
			return $model->validate();
		});
	}

	protected function validate()
	{
		$val = Validator::make($this->attributes, $this->rules, $this->messages);

		if($val->passes()) {
			return true;
		}

		$this->setErrors($val->messages());

		return false;
	}

	protected function setErrors($errors)
	{
		$this->errors = $errors;
	}

	public function getErrors()
	{
		return $this->errors;
	}

}