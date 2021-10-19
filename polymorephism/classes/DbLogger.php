<?php
class DbLogger implements LoggerInterface{
	public function log($message)
	{
		echo "Db logger: $message";
	}
}