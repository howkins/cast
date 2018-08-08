<?php

namespace Howkins\Cast\Contracts;

interface Cast
{
	public function settype(&$value = null, $type);
	public function _str($value = null);
	public function _string($value = null);
	public function _int($value = null);
	public function _integer($value = null);
	public function _bool($value = null);
	public function _boolean($value = null);
	public function _arr($value = null);
	public function _array($value = null);
	public function _obj($value = null);
	public function _object($value = null);
	public function _null($value = null);
	public function _float($value = null);
	public function _double($value = null);
}
