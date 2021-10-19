<?php
trait one{
	public function test()
	{
		echo "test method of one triat";
	}
}

trait two{
	public function test($value='')
	{
		echo "test method of two trait";
	}
}

class abc{
	use one,two{
		two::test insteadof one; // here which test method will be called is defind because it is defined in both traits. her it will be called from trait two instead of trait one. 
		one::test as testone; // if want to use both then one we can use by $obj->testone.
	}
}

$obj = new abc();
$obj->test();