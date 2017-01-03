<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Rafał Teodorowski">
        <META NAME="Description" CONTENT="Nazywam się Rafał Teodorowski i o to moja strona startowa.">
        <META NAME="Keywords" CONTENT="Rafał, Teodorowski, informatyka, programowanie, internetowe, politechnika, warszawska">
        <link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
        <script type="text/javascript" src="style/jscript.js" charset="UTF-8"></script>
        <title>Formularz</title>
    </head>
    <body>

        ﻿<?php
        include('logowanie.php');
        include('zapisz.php');

        if (!isset($_SESSION['zmienna'])) {
            header("location: index.php");
        }
        ?>

        <div id="wroc"><a href="menu.php">Wróć</a></div>
        <div id="tabela2">
            <form method="post" id="rejestracjaid" name='rejestracja' onSubmit="return sprawdzWszystko();">
                <ul>
                    <li><label>Imię*</label> <input type="text" name="imie" size="47" required/></li>
                    <li><label>Nazwisko*</label> <input type="text" name="nazwisko" size="47" required/></li>
                    <li><label>Data urodzenia</label> <input type="date" min="1900-01-01" max="2010-12-31" name="dataur" id="dataur" onchange="obliczWiek()"/></li>
                    <li><label>Pesel*</label> <input type="text" name="pesel" size="47" required/></li>
                    <li><label>wiek</label> <input type="text" name="wiek" id="wiekId" readonly size="47"/></li>
                    <li><label>Płeć</label><select name="plec">  
                            <option selected="" value="Default">(Proszę wybrać płeć)</option>  
                            <option value="kobieta">Kobieta</option>  
                            <option value="mezczyzna">Mężczyzna</option> 
                        </select></li>  
                    <li><label>Kierunek</label>
                        <div>
                            <input type="radio" class="radio-butto" name="re" value="infa" onClick="resetMeIfChecked()" /><span>Informatyka</span>
                            <input type="radio" class="radio-butto" name="re" value="Ele" onClick="resetMeIfChecked()"/><span>Elektrotechnika</span>
                            <input type="radio" class="radio-butto" name="re" value="AiR" onClick="resetMeIfChecked()"/><span>Automatyka i Robotyka</span>
                        </div>
                    </li>

                    <li><label>Upload</label> <input type="file" name="plik" accept=".jpg, .tif, .png" /></li>
                    <li>
                        <label>Pole tekstowe</label>
                        <textarea name="opis" id="opisid" onkeyup="maxRozmiar()" maxlength="300"></textarea>
                    </li>
                    <li><label>Znaki</label> <input name="znaki" id="znakiID" type="text" readonly value="300"/></li>
                    <li><label>      </label><input type="checkbox" name="zgoda" value="ok" checked required/><span>Zgoda na przetwarzanie danych</span></li>

                    <li> <input id="czysc" type="reset" name="reset" value="Wyczyść formularz"/></li>
                    <li> <input id="submitid" type="submit" name="submit" value="Wyślij" /></li>
                </ul>
            </form>
        </div>
        <div id="stopka">
            <b id="wyloguj"><a href="wyloguj.php">Wyloguj się</a></b>
            <div class="valid">

                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    <img style="border:0;width:88px;height:31px"
                         src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                         alt="Poprawny CSS!" />
                </a>

                <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F~teodoror%2FProjekt_3%2Fmenu.php">
                    <img style="border:0;width:90px;height:38px; margin-bottom:-6px; margin-left: -5px" 
                         src="../Obrazy/Valid_HTML5.png"
                         alt="Poprawny HTML5"/>
                </a>
            </div>
        </div>
        <div id="proin">Programowanie Internetowe</div>

    </body>
</html>