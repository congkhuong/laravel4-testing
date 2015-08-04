<?php

class PostsController extends BaseController {

	protected $post;

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function index()
	{
		//return 'all posts';
		$posts = $this->post->all();
		return View::make('posts.index', compact('posts'));
	}

	public function show($id)
	{
		
	}

	public function edit($id)
	{
		$model = Post::firstOrFail();

		return View::make('posts.edit', compact('model'));
	}

	public function update($id)
	{
		$rules = array(
	        'title' => 'required',
	        'description' => 'required'
	    );

    	$validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()) {
	        $messages = $validator->messages();
	        return Redirect::back()->withErrors($messages);
	    } else {
	        $model = Post::firstOrFail();
	        $post->fill(Input::all());
	        $post->save();
	        return Redirect::to('posts');
	    }
	}

	public function create()
	{
		return View::make('posts.create');
	}

	public function store()
	{	
		$rules = array(
	        'title' => 'required',
	        'description' => 'required'
	    );

    	$validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()) {
	        $messages = $validator->messages();
	        return Redirect::back()->withErrors($messages);
	    } else {
	        $post = new Post;
	        $post->fill(Input::all());
	        $post->save();
	        return Redirect::to('posts');
	    }
			return View::make('posts.create');
	}
}