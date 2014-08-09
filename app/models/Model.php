<?php

class Model extends Eloquent {

	/**
	* Error message bag
	*
	* @var Illuminate\Support\MessageBag
	*/
	protected $errors;

	/**
	* Validation rules
	*
	* @var Array
	*/
	protected $rules = array();

	/**
	* Custom messages
	*
	* @var Array
	*/
	protected $messages = array();

	public function __construct(array $attributes = array())
	{
		parent::__construct($attributes);
	}

	/**
	* Listen for save event
	*/
	protected static function boot()
	{
		parent::boot();

		static::saving(function($model) {
			return $model->validate();
		});
	}

	/**
	* Validates current attributes against rules
	*/
	protected function validate()
	{
		$val = Validator::make($this->attributes, $this->rules, $this->messages);

		if($val->passes()) {
			return true;
		}

		$this->setErrors($val->messages());

		return false;
	}

	/**
	* Set error message bag
	*
	* @var Illuminate\Support\MessageBag
	*/
	protected function setErrors($errors)
	{
		$this->errors = $errors;
	}

	/**
	* Retrive error message bag
	*/
	public function getErrors()
	{
		return $this->errors;
	}

	/**
	* Inverse of wasSaved
	*/
	public function hasErrors()
	{
		return !empty($this->errors);
	}
}