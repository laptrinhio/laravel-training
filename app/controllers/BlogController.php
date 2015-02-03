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

	public function create()
	{
		return View::make('pages.create');
	}

	public function store()
	{
		$blog = Blog::create([
			'title' => Input::get('title'),
			'content' => Input::get('content')
		]);

		if(!$blog) {
			return Redirect::back()->withMessage('Error creating new blog');
		}

		return Redirect::route('blog.list');
	}

	public function delete($id)
	{
		$blog = Blog::find($id);

		$blog->delete();

		return Redirect::route('blog.list');
	}

	public function edit($id)
	{
		$blog = Blog::find($id);

		return View::make('pages.edit')->with('blog', $blog);
	}

	public function update($id)
	{
		$blog = Blog::find($id);

		$blog->title = Input::get('title');
		$blog->content = Input::get('content');

		$blog->save();

		return Redirect::route('blog.list');
	}

}
