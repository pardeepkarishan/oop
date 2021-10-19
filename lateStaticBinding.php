<?php
/*
It assign the value of static members on the run time instead of compile time.
*/
class DB {
	protected static $table = 'baseTable';

	public function select()
	{
		echo "select * from ". static::$table;//use static keyword for replace talbe name from student class.
	}

	public function insert(){
		echo "insert INTO " . static::$table;
	}
}

class student extends DB{
	protected static $table = 'student';
}

class teacher extends DB{
	protected static $table = 'teacher';
}

$student = new student();
$teacher = new teacher();
$teacher->insert();
$student->select();