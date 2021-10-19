<?php
/* 
first it check if funtions is defined in it's class,
then in trait,
then in parent class.

*/
class Base{
	public function abc()
	{
		echo "abc method of base class";
	}
}
trait test{
	public function abc(){
		echo "abc method of test trait";
	}
}

class Child extends Base{
	public function abc(){
		echo "abc method of child class";
	}
}
$obj = new Child();
$obj->abc();