<?php
class Follow extends User {
	protected $pdo;    // Database protected var. 

	function __construct($pdo) {
		$this->pdo = $pdo; 
	}
}

?>