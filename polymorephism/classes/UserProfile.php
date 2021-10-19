<?php
class UserProfile{
	private $logger;

	public function createUser()
	{
		$this->logger->log("User created.");
	}

	public function deleteUser()
	{
		$this->logger->log("User deleted.");
	}

	public function __construct(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}
}