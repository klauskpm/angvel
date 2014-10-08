<?php

class BaseController extends Controller {

	protected $transformer;

	protected $baseModel;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	protected function transform($data)
	{
		if(($data instanceof Illuminate\Support\Collection)) {

			return Response::api()->WithCollection($data, $this->transformer);

		} elseif(($this->baseModel?$data instanceof $this->baseModel:true)) {
			return Response::api()->WithItem($data, $this->transformer);
		}

		return false;
	}

}
