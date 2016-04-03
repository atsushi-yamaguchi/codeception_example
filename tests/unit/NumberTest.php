<?php

class NumberTest extends \PHPUnit_Framework_TestCase
{
	public function test_1()
	{
		$this->assertEquals(Number::encryption(1192), 'TSwLEV');
	}

	public function test_2()
	{
		$this->assertEquals(Number::unencryption('TSwLEV'), 1192);
	}
}
