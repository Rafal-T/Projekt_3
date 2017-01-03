<!DOCTYPE html>
<html>
    <head>
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Rafal Teodorowski">
        <META NAME="Description" CONTENT="Logowanie, loguj">
        <META NAME="Keywords" CONTENT="Rafal, Teodorowski, informatyka, programowanie, internetowe, politechnika, warszawska">
        <link rel="stylesheet" href="style/m_style.css" type="text/css" media="all" />	
        <title>Zaloguj</title>
    </head>
    <body>

        ﻿<?php
        include('logowanie.php');
        if (isset($_SESSION['zmienna'])) {
            header("location: ./menu.php");
        }
        ?>

        <div id="calosc">
            <ul class="topnav">
                <li><a href="../index.html">Strona główna</a></li>
                <li><a href="../Projekt_1/menu.html">Projekt 1</a></li>
                <li><a href="../Projekt_2/menu.html">Projekt 2</a></li>
                <li id="active"><a href="index.php">Projekt 3</a></li>
                <li><a href="../Projekt_4/menu.php">Projekt 4</a></li>
                <li><a href="../Projekt_5/menu.html">Projekt 5</a></li>
            </ul>

            <div id="content">

                <div id="login">
                    <h2>Logowanie</h2>
                    <form method="post">
                        <label>Login:</label>
                        <input id="name" name="username" placeholder="Login" type="text">
                        <p> </p>
                        <label>Hasło:</label>
                        <input id="password" name="password" placeholder="Hasło" type="password">
                        <p> </p>
                        <input name="submit" type="submit" value=" Login ">
                        <span><?php echo $error; ?></span>
                    </form>

                </div>

            </div>
            <div id="stopka">
                <div class="valid">
                    <a href="http://jigsaw.w3.org/css-validator/check/referer">
                        <img style="border:0;width:88px;height:31px"
                             src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                             alt="Poprawny CSS!" />
                    </a>

                    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F~teodoror%2FProjekt_3%2Fm_index.php">
                        <img style="border:0;width:90px;height:38px; margin-bottom:-6px; margin-left: -5px" 
                             src="../Obrazy/Valid_HTML5.png"
                             alt="Poprawny HTML5"/>
                    </a>

                </div>
            </div>
        </div>
    </body>
</html>