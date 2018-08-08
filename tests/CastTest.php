<?php

namespace Howkins\Cast;

class CastTest extends \PHPUnit_Framework_TestCase
{
	protected $cast;
	
	function setUp() {
		$this->cast = new CastBuilder();
	}
	
	function testBool()
	{
		$this->assertTrue($this->cast->_bool('true'));
		$this->assertFalse($this->cast->_bool('false'));
		$this->assertFalse($this->cast->_bool('0.0'));
		$this->assertTrue($this->cast->_bool('string'));
		$this->assertTrue($this->cast->_bool('1'));
		$this->assertTrue($this->cast->_bool(true));
		$this->assertFalse($this->cast->_bool(false));
		$this->assertTrue($this->cast->_bool(1));
		$this->assertFalse($this->cast->_bool(0));
		$this->assertFalse($this->cast->_bool(''));
		$this->assertFalse($this->cast->_bool(null));
		$this->assertTrue($this->cast->_bool('null'));
	}

	function testString()
	{
		$this->assertSame('single quoted', $this->cast->_str('single quoted'));
		$this->assertSame('double quoted', $this->cast->_str("double quoted"));
		$this->assertSame('', $this->cast->_str(''));
		$this->assertSame('', $this->cast->_str(null));
		$this->assertSame('1', $this->cast->_str(true));
		$this->assertSame('', $this->cast->_str(false));
		$this->assertSame('0', $this->cast->_str(0));
		$this->assertSame('1', $this->cast->_str(1));
		$this->assertSame('0', $this->cast->_str(0.0));
		$this->assertSame('array', $this->cast->_str(array(1)));
		$this->assertSame('array', $this->cast->_str(array('k'=>'v')));
	}
}