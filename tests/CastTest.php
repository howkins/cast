<?php

namespace Howkins\Cast;

class CastTest extends \PHPUnit_Framework_TestCase
{
	protected $cast;
	
	function setUp() {
		$this->cast = new CastBuilder();
	}
	
	function testString()
	{
		$this->assertSame('', $this->cast->_str('')); //string
		$this->assertSame('string', $this->cast->_str('string')); //string
		$this->assertSame('false', $this->cast->_str('false')); //string
		$this->assertSame('true', $this->cast->_str('true')); //string
		$this->assertSame('0', $this->cast->_str(0)); //int
		$this->assertSame('1', $this->cast->_str(1)); //int
		$this->assertSame('', $this->cast->_str(false)); //bool
		$this->assertSame('1', $this->cast->_str(true)); //bool
		$this->assertSame('0', $this->cast->_str( array() )); //array
		$this->assertSame('1', $this->cast->_str( array(1) )); //array
		$this->assertSame('0', $this->cast->_str( (object)array() )); //object
		$this->assertSame('1', $this->cast->_str( (object)array(1) )); //object
		$this->assertSame('0', $this->cast->_str(0.0)); //float
		$this->assertSame('0.1', $this->cast->_str(0.1)); // float
		$this->assertSame('', $this->cast->_str(null)); //null
	}
	
	function testInteger()
	{
		$this->assertSame(0, $this->cast->_int('')); //string
		$this->assertSame(0, $this->cast->_int('string')); //string
		$this->assertSame(0, $this->cast->_int('false')); //string
		$this->assertSame(0, $this->cast->_int('true')); //string
		$this->assertSame(0, $this->cast->_int(0)); //int
		$this->assertSame(1, $this->cast->_int(1)); //int
		$this->assertSame(0, $this->cast->_int(false)); //bool
		$this->assertSame(1, $this->cast->_int(true)); //bool
		$this->assertSame(0, $this->cast->_int( array() )); //array
		$this->assertSame(1, $this->cast->_int( array(1) )); //array
		$this->assertSame(0, $this->cast->_int( (object)array() )); //object
		$this->assertSame(1, $this->cast->_int( (object)array(1) )); //object
		$this->assertSame(0, $this->cast->_int(0.0)); //float
		$this->assertSame(0, $this->cast->_int(0.1)); // float
		$this->assertSame(0, $this->cast->_int(null)); //null
	}
	
	function testBool()
	{
		$this->assertSame(false, $this->cast->_bool('')); //string
		$this->assertSame(true, $this->cast->_bool('string')); //string
		$this->assertSame(false, $this->cast->_bool('false')); //string
		$this->assertSame(true, $this->cast->_bool('true')); //string
		$this->assertSame(false, $this->cast->_bool(0)); //int
		$this->assertSame(true, $this->cast->_bool(1)); //int
		$this->assertSame(false, $this->cast->_bool(false)); //bool
		$this->assertSame(true, $this->cast->_bool(true)); //bool
		$this->assertSame(false, $this->cast->_bool( array() )); //array
		$this->assertSame(true, $this->cast->_bool( array(1) )); //array
		$this->assertSame(false, $this->cast->_bool( (object)array() )); //object
		$this->assertSame(true, $this->cast->_bool( (object)array(1) )); //object
		$this->assertSame(false, $this->cast->_bool(0.0)); //float
		$this->assertSame(true, $this->cast->_bool(0.1)); // float
		$this->assertSame(false, $this->cast->_bool(null)); //null
	}
	
	function testArray()
	{
		$this->assertSame(array(''), $this->cast->_arr('')); //string
		$this->assertSame(array('string'), $this->cast->_arr('string')); //string
		$this->assertSame(array('false'), $this->cast->_arr('false')); //string
		$this->assertSame(array('true'), $this->cast->_arr('true')); //string
		$this->assertSame(array(0), $this->cast->_arr(0)); //int
		$this->assertSame(array(1), $this->cast->_arr(1)); //int
		$this->assertSame(array(false), $this->cast->_arr(false)); //bool
		$this->assertSame(array(true), $this->cast->_arr(true)); //bool
		$this->assertSame(array(), $this->cast->_arr( array() )); //array
		$this->assertSame(array(1), $this->cast->_arr( array(1) )); //array
		$this->assertSame(array(), $this->cast->_arr( (object)array() )); //object
		$this->assertSame(array(1), $this->cast->_arr( (object)array(1) )); //object
		$this->assertSame(array(0.0), $this->cast->_arr(0.0)); //float
		$this->assertSame(array(0.1), $this->cast->_arr(0.1)); // float
		$this->assertSame(array(), $this->cast->_arr(null)); //null
	}
	
	function testObject()
	{
		$this->assertEquals((object)array('scalar'=>''), $this->cast->_obj('')); //string
		$this->assertEquals((object)array('scalar'=>'string'), $this->cast->_obj('string')); //string
		$this->assertEquals((object)array('scalar'=>'false'), $this->cast->_obj('false')); //string
		$this->assertEquals((object)array('scalar'=>'true'), $this->cast->_obj('true')); //string
		$this->assertEquals((object)array('scalar'=>0), $this->cast->_obj(0)); //int
		$this->assertEquals((object)array('scalar'=>1), $this->cast->_obj(1)); //int
		$this->assertEquals((object)array('scalar'=>false), $this->cast->_obj(false)); //bool
		$this->assertEquals((object)array('scalar'=>true), $this->cast->_obj(true)); //bool
		$this->assertEquals((object)array(), $this->cast->_obj( array() )); //array
		$this->assertEquals((object)array(1), $this->cast->_obj( array(1) )); //array
		$this->assertEquals((object)array(), $this->cast->_obj( (object)array() )); //object
		$this->assertEquals((object)array(1), $this->cast->_obj( (object)array(1) )); //object
		$this->assertEquals((object)array('scalar'=>0.0), $this->cast->_obj(0.0)); //float
		$this->assertEquals((object)array('scalar'=>0.1), $this->cast->_obj(0.1)); // float
		$this->assertEquals((object)array(), $this->cast->_obj(null)); //null
	}
	
	function testNull()
	{
		$this->assertSame(null, $this->cast->_null('')); //string
		$this->assertSame(null, $this->cast->_null('string')); //string
		$this->assertSame(null, $this->cast->_null('false')); //string
		$this->assertSame(null, $this->cast->_null('true')); //string
		$this->assertSame(null, $this->cast->_null(0)); //int
		$this->assertSame(null, $this->cast->_null(1)); //int
		$this->assertSame(null, $this->cast->_null(false)); //bool
		$this->assertSame(null, $this->cast->_null(true)); //bool
		$this->assertSame(null, $this->cast->_null( array() )); //array
		$this->assertSame(null, $this->cast->_null( array(1) )); //array
		$this->assertSame(null, $this->cast->_null( (object)array() )); //object
		$this->assertSame(null, $this->cast->_null( (object)array(1) )); //object
		$this->assertSame(null, $this->cast->_null(0.0)); //float
		$this->assertSame(null, $this->cast->_null(0.1)); // float
		$this->assertSame(null, $this->cast->_null(null)); //null
	}
	
	function testFloat()
	{
		$this->assertSame(0.0, $this->cast->_float('')); //string
		$this->assertSame(0.0, $this->cast->_float('string')); //string
		$this->assertSame(0.0, $this->cast->_float('false')); //string
		$this->assertSame(0.0, $this->cast->_float('true')); //string
		$this->assertSame(0.0, $this->cast->_float(0)); //int
		$this->assertSame(1.0, $this->cast->_float(1)); //int
		$this->assertSame(0.0, $this->cast->_float(false)); //bool
		$this->assertSame(1.0, $this->cast->_float(true)); //bool
		$this->assertSame(0.0, $this->cast->_float( array() )); //array
		$this->assertSame(1.0, $this->cast->_float( array(1) )); //array
		$this->assertSame(0.0, $this->cast->_float( (object)array() )); //object
		$this->assertSame(1.0, $this->cast->_float( (object)array(1) )); //object
		$this->assertSame(0.0, $this->cast->_float(0.0)); //float
		$this->assertSame(0.1, $this->cast->_float(0.1)); // float
		$this->assertSame(0.0, $this->cast->_float(null)); //null
	}

	
}