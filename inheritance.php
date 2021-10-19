<?php

Class TV {

	public $model = 'xyz';
	public $volume=1;

	function volumeUp(){
		$this->valume++;
	}

	function volumeDown(){
		$this->volume--;
	}

	function __construct($m,$v){
		$this->model=$m;
		$this->volume=$$v
	}

}


class TvWithTimer extends TV{
	public $timer = true;

	// if contructor is defind there then the chiled class constructor will be used.
}

class plazmaTv extends TV{
	// function overloading
	public $model = 'plazmaTv';
	function __construct(){

	}
}


// constructor
$tv_one = New TV('xyz',2);
// $tv_two = New TV;





?>