<?php
class Tweet extends User {
	protected $pdo;    // Database protected var. 

	function __construct($pdo) {
		$this->pdo = $pdo; 
	}
}

?>