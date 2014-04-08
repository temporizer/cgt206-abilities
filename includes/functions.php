<?php 
	session_start();

	function getUsers() {
		$file = "includes/users.txt";
		$users = file($file);
		unset($users[0]);
		
		foreach ($users as $user) {
			$userList[] = explode(":", $user);
		}

		return $userList;

	}

	function login($username, $password) {
		$usersList = getUsers();
		// echo "<pre>";
		// print_r($userList);
		// echo "</pre>";
		foreach ($usersList as $user) {
			
			if ($user[0] === strtolower($username) && $user[1] === $password) {
				$_SESSION['user'] = $user[0];
				$_SESSION['first_name'] = $user[2];
				$_SESSION['last_name'] = $user[3];
				$_SESSION['email'] = $user[4];
				$_SESSION['logged_in'] = TRUE;
			}
		}
		if (loggedIn()) {
			header("Location: index.php");
		} else {
			echo '<h2 style="text-align:center;">That username/password combination is not valid, <a href="index.php">try again</a>.</h2>';

		}
		unset($userList);
	}



	function logOut() {
		session_destroy();
		header('Location: index.php');
	}

	function loggedIn() {
		if (isset($_SESSION['logged_in'])){
			return true;
		} else {
			return false;
		}
	}
 ?>