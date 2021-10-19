<?php
trait addressFormat{
	public function addressFormater()
	{
		echo "address formatter";
	}
}

trait salaryFormat{
	public function salaryFormat()
	{
		echo "salary formater";
	}
}

class feeStructure{
	public function feeStructure(){
		echo "fee structure";
	}
}

class student extends feeStructure{
	use addressFormat;
}

$student = new student();
$student->addressFormater();