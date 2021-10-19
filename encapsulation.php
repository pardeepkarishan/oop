<?php
/*
private: with in the class only
protected : chiled class
public : every where
 
*/
class Tv{
	private $serialKey="dgb3234t5tfdfc123000w";
	protected $modal;
	public $volume;

	public function getModal(){
		echo "parent";
		return $this->modal;
	}

	protected function getSerial()
	{
		echo $this->serialKey;	
	}

	function __construct($modal){
		$this->modal=$modal;
	}

}


class user extends TV{
	// public function getModal(){
	// 	echo "child";
	// 	echo $this->modal;
	// }
}

$ob = new user('343cwfvf');
echo $ob->getSerial();
echo $ob->serialKey;