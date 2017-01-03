<?php
session_start();
	if(isset($_SESSION['zmienna'])){
		unset($_SESSION['zmienna']);
	}
	if(session_destroy() || session_unset() )
	{
		header("Location: index.php");
	}
?>