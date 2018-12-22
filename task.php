<?php

/**
* this is blue print for task we are oriented to do at some time.
*/
class Task 
{
	public $description;
	public $completed;
	
	// function __construct($description)
	// {
	// 	$this->description = $description;
	// }
	
	function complete()
	{
		return $this->description;
	}
}
?>