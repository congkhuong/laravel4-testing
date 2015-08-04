<?php

class AuthorTest extends BaseModelTest {

	public function testIsInvalidWithoutAName()
	{
		$author = new Author;
		$this->assertFalse($author->validate());
	}

}

