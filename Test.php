<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,1);
  	}
	
	public function testOnePlusOneThisTImeItWorks() {
		$this->assertEquals(1+1,2);
  	}
}

?>
