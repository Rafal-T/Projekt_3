<?php

session_start();
if(!isset($_SESSION['zmienna'])){
	header("location: ./menu.php");
}
if (isset($_POST['submit'])) {
    $_SESSION['imie'] = $_POST['imie'];
    $_SESSION['nazwisko'] = $_POST['nazwisko'];
    $_SESSION['dataur'] = $_POST['dataur'];
    $_SESSION['pesel'] = $_POST['pesel'];
    $_SESSION['wiek'] = $_POST['wiek'];
    $_SESSION['plec'] = $_POST['plec'];
    $_SESSION['kierunek'] = $_POST['re'];
    $_SESSION['opis'] = $_POST['opis'];
}
?>