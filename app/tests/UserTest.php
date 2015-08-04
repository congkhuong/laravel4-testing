<?php

class CatTest extends TestCase {

	public function testHashesPasswordWhenSet()
	{
		Hash::shouldReceive('make')->once()->andReturn('hashed');
		$author = new User;
		$author->password = 'foo';
		$this->assertEquals('hashed', $author->password);
	}

}

