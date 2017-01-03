<?php
session_start();
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {

	}
	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$username = stripslashes($username);
		$password = stripslashes($password);
		$validuser = "student";
		$validpass = "zet";
		
		if ($username === $validuser && $password === $validpass) {
			$_SESSION['zmienna']=$username;
			header("location: menu.php");
		} else {
			echo "Has³o jest b³edne ";
		}
		
	}
}
?>