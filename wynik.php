<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Rafał Teodorowski">
        <META NAME="Description" CONTENT="Nazywam się Rafał Teodorowski i o to moja strona startowa.">
        <META NAME="Keywords" CONTENT="Rafał, Teodorowski, informatyka, programowanie, internetowe, politechnika, warszawska">
        <link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
        <script type="text/javascript" src="style/jscript.js" charset="UTF-8"></script>
        <title>Wpisane</title>
    </head>
    <div id="wroc"><a href="menu.php">Wróć</a></div>
    <body>

        ﻿<?php
        include('logowanie.php');
        include('zapisz.php');
        if (!isset($_SESSION['zmienna'])) {
            header("location: index.php");
        }
        ?>

        <div id="asd">
            Imię: <?php echo $_SESSION['imie']; ?><br>
            Nazwisko: <?php echo $_SESSION['nazwisko']; ?><br>
            Data urodzenia:	<?php echo $_SESSION['dataur']; ?><br>
            Pesel: <?php echo $_SESSION['pesel']; ?><br>
            Wiek: <?php echo $_SESSION['wiek']; ?><br>
            Pleć: <?php echo $_SESSION['plec']; ?><br>
            Komentarz: <?php echo $_SESSION['opis']; ?><br>
        </div>

        <div id="stopka">
            <b id="wyloguj"><a href="wyloguj.php">Wyloguj się</a></b>
            <div class="valid">

                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    <img style="border:0;width:88px;height:31px"
                         src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                         alt="Poprawny CSS!" />
                </a>

                <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F~teodoror%2FProjekt_3%2Fwynik.php">
                    <img style="border:0;width:90px;height:38px; margin-bottom:-6px; margin-left: -5px" 
                         src="../Obrazy/Valid_HTML5.png"
                         alt="Poprawny HTML5"/>
                </a>
            </div>
        </div>
        <div id="proin">Programowanie Internetowe</div>

    </body>
</html>
