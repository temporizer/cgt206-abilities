<?php
	include("includes/functions.php");

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];

		login($username, $password);

		

		}

 ?>