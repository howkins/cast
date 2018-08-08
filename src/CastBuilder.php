<?php

namespace Howkins\Cast;

use Howkins\Cast\Contracts\Cast;

class CastBuilder implements Cast
{
	protected $value;
		
	public function settype(&$value, $type)
	{
		$settype = settype($value, $type);
		$this->value = $value;
		return $settype;
	}
		
	public function _str($value = null)
	{
		return $this->_string($value);
	}
	
	public function _string($value = null)
	{
		$this->settype($value, 'string');
		return $value;
	}
	
	public function _int($value = null)
	{
		return $this->_integer($value);
	}
	
	public function _integer($value = null)
	{
		$this->settype($value, 'integer');
		return $value;
	}
	
	public function _bool($value = null, $strict = 0)
	{
		return $this->_boolean($value, $strict);
	}
	
	public function _boolean($value = null, $strict = 0)
	{
		if(!$strict && (strtolower($value) === "false" || strtolower($value) === "0.0")){
			$value = false;
		}
		$this->settype($value, 'boolean');
		return $value;
	}
	
	public function _arr($value = null)
	{
		return $this->_array($value);
	}
	
	public function _array($value = null)
	{
		$this->settype($value, 'array');
		return $value;
	}
	
	public function _obj($value = null)
	{
		return $this->_object($value);
	}
	
	public function _object($value = null)
	{
		$this->settype($value, 'object');
		return $value;
	}
	
	public function _null($value = null)
	{
		$this->settype($value, 'null');
		return $value;
	}
	
	public function _float($value = null)
	{
		$this->settype($value, 'float');
		return $value;
	}
	
	public function _double($value = null)
	{
		$this->settype($value, 'double');
		return $value;
	}
	
}