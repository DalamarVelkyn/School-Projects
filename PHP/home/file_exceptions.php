<?php
	//display this exception if file fails to open
	class fileOpenException extends Exception
	{
		function __toString()
		{
			return "fileOpenException ". $this->getCode(). ": ". $this->getMessage()."<br />"." in ". $this->getFile(). " on line ". $this->getLine(). "<br />";
		}
	}
	
	//display this exception if writing to file fails
	class fileWriteException extends Exception
	{
		function __toString()
		{
			return "fileWriteException ". $this->getCode(). ": ". $this->getMessage()."<br />"." in ". $this->getFile(). " on line ". $this->getLine(). "<br />";
		}
	}
	
	//display this exception if file fails to lock
	class fileLockException extends Exception
	{
		function __toString()
		{
			return "fileLockException ". $this->getCode(). ": ". $this->getMessage()."<br />"." in ". $this->getFile(). " on line ". $this->getLine(). "<br />";
		}
	}
		
?>