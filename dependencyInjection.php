<?php
/*
Dependency injection is instead of making class Logger object in the class User. We pass the object and initialize the variable of User class with the object and use. 
$this->dependeccyObject->dependencyClassFunction()
*/
class Logger{
	public function log($message)
	{
		echo "Logging message : $message";
	}
}

class User{
	public $logger;
	public function creatUser()
	{
		$this->logger->log("User created.");
	}

	public function deleteUser()
	{
		$this->logger->log("User deleted.");		
	}

	// Type hinting provice the object should be of same class.Logger $logger
	public function __construct(Logger $logger)
	{
		$this->logger=$logger;
	}
}

$logger = new Logger();
$user = new User($logger);
$user->creatUser();
$user->deleteUser();
