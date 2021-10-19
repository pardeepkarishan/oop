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

}


$tv_one = New TV;
$tv_two = New TV;

echo $tv_one->volume();
echo $tv_two->model;




?>