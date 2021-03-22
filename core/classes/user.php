<?php
class User {
	protected $pdo;    // Database protected var. 

	function __construct($pdo) {
		$this->pdo = $pdo; // this pdp var = contructs pdo variable
	}

	//
	public function checkInput($var) {
		$var = htmlspecialchars($var);
		$var = trim($var);
		$var = stripcslashes($var);
		return $var;
	}
	

	public function login($email, $password){
		$passwordHash = md5($password);
		$stmt = $this->pdo->prepare("SELECT `user_id` FROM `users` WHERE `email` = :email AND `password` = :password");
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->bindParam(':password', $passwordHash, PDO::PARAM_STR);
		$stmt->execute();

		$count = $stmt->rowCount();
		$user = $stmt->fetch(PDO::FETCH_OBJ);

		if($count > 0){
			$_SESSION['user_id'] = $user->user_id;
			header('Location: home.php');
		}else{
			return false;
		}
	}
}

?>
