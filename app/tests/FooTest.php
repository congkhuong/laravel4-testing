<?php
require 'vendor/phpunit/phpunit/PHPUnit/Framework/Assert/Functions.php';

class FooTest extends PHPUnit_Framework_TestCase {

    public function testResultDefaultsToZero()
	{
		$calc = new Calculator;
		$this->assertSame(0, $calc->getResult());
	}

	/**
	* @expectedException InvalidArgumentException
	*/
	public function testAdd()
	{
		$calc = new Calculator;
		$calc->add('five');
		$this->assertSame(5, $calc->getResult());
	}

	public function testAcceptsMultipleArgs()
	{
		$calc = new Calculator;
		$calc->add(1, 2, 3, 4);
		$this->assertEquals(10, $calc->getResult());

	}

	public function testSubtract()
	{
		$calc = new Calculator;
		$calc->subtract(4);
		$this->assertEquals(-4, $calc->getResult());
	}

	public function testAddAndMulti()
	{
		$calc = new Calculator;
		$calc->add(2);
		$calc->multi(5);
		$this->assertSame(10, $calc->getResult());
	}

}
