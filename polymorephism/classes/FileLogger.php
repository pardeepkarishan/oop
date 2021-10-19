<?php
class FileLogger implements LoggerInterface{
	public function log($message)
	{
		echo "File logger: $message";
	}
}