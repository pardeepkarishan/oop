<?php
function __autoload($class){
	include_once "classes/$class.php";
}

$fileLogger = new FileLogger();
$dbLogger = new DbLogger();

$user = new UserProfile($fileLogger);
$user->createUser();