<?php

class BlogController extends \BaseController {

	public function getList()
	{
		$blogs = Blog::all();
		return View::make('pages.list')->with('blogs', $blogs);
	}

	public function getBlog($id)
	{
		$blog = Blog::find($id);
		return View::make('pages.blogid')->with('blog', $blog);
	}

}
