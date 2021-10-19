<?php
/* 
static variables or funtions are related to class not with the object.
for example if we want to count the number of objects created of class.
*/
class abc
{
	public static $objectCount = 0;
	public static function getCount()
	{
		return self::$objectCount;
	}
	function __construct()
	{
		self::$objectCount++;
	}
}

// $obj = new abc();
// $obj = new abc();
// echo abc::getCount();
// die();
class xyz extends abc
{
	public static function getCount(){
		parent::getCount();
	}
}

$obj = new xyz();
echo $obj->getCount();