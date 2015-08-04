<?php
class PostsControllerTest extends TestCase {
	public function __construct()
	{
		//$this->mock = Mockery::mock('Eloquent', 'Post');
		$this->mock = Mockery::mock('Eloquent', 'Post');
	}

	public function tearDown()
	{
		Mockery::close();
	}

	public function testIndex()
	{	
		/*$this->mock
			->shouldReceive('all')
			->once()
			->andReturn('foo');*/

		$this->client->request('GET', 'posts');

		$this->assertViewHas('posts');
	}

	public function testShow()
	{
		$response = $this->action('GET', 'PostsController@show', ['id' => 1]);
	}

		
}