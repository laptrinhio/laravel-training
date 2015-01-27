<?php

class PagesController extends \BaseController {

	public function home()
	{
		// return View::make('pages.home');
		return Redirect::route('blog.list');
	}

}
