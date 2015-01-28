<?php

class PagesController extends \BaseController {

	public function home()
	{
		return Redirect::route('blog.list');
	}

}
