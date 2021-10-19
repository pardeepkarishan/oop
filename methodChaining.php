<?php

// super object and sub object, but this is not method chaining.
class ABC {
	public $value = '$value property of ABC class';
}

class XYZ {
	public $abc;

	public function __construct($value='')
	{
		$this->abc = new ABC;
	}
}

$ob = new XYZ;
// var_dump($ob);
// echo $ob->abc->value;// super object and sub object


// method chaining
class OperationY{
	function getValue(){
		echo "function get value";
		return $this;
	}

	function processValue(){
		echo "processing values.";
		return $this;
	}

	function output(){
		echo "output";
	}
}


$op = new OperationY;
$op->getValue()->processValue()->output();