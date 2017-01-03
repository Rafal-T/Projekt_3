function losujImie() {
    var liczba, imie;
    imie = ['Adam', 'Adolf', 'Adrian', 'Albert', 'Aleksander', 'Bartłomiej', 'Bartosz', 'Benedykt', 'Beniamin', 'Jacek', 'Jakub', 'Jan', 'Janusz', 'Jarosław', 'Jerzy', 'Tadeusz', 'Teodor', 'Tomasz', 'Wacław', 'Waldemar', 'Wiesław', 'Wiktor', 'Witold', 'Zbigniew', 'Zdzisław', 'Zenon', 'Zygmunt'];
    liczba = Math.floor(Math.random() * imie.length);
    return imie[liczba];
}
function losujNazwisko() {
    var liczba, nazwisko;
    nazwisko = ['Nowak', 'Kowalski', 'Wiśniewski', 'Dąbrowski', 'Lewandowski', 'Wójcik', 'Kamiński', 'Kowalczyk', 'Zieliński', 'Szymański', 'Woźniak', 'Kozłowski', 'Jankowski', 'Wojciechowski', 'Kwiatkowski', 'Kaczmarek', 'Mazur', 'Krawczyk', 'Piotrowski', 'Grabowski', 'Nowakowski', 'Pawłowski', 'Michalski', 'Nowicki', 'Adamczyk', 'Dudek', 'Zając', 'Wieczorek', 'Jabłoński', 'Król', 'Majewski', 'Olszewski', 'Jaworski', 'Wróbel', 'Malinowski', 'Pawlak', 'Witkowski'];
    liczba = Math.floor(Math.random() * nazwisko.length);
    return nazwisko[liczba];
}

var numer_staly = 1;
var numer_kolumn = 4;

function generuj() {

    var numer = document.getElementById("liczba").value;
    numer_staly = numer;
    if (numer > 0) {
        var body = document.body;
        var tbl = document.createElement('table');
        tbl.id = "my-table";

        for (var i = 0; i <= numer; i++) {
            var tr = tbl.insertRow();
            tr.id = "myRow" + i;
            for (var j = 0; j < 4; j++) {
                if (i == 0) {
                    var x = document.createElement("B");
                    switch (j) {
                        case 0:
                            var td = tr.insertCell();
                            x.appendChild(document.createTextNode("lp"));
                            td.appendChild(x);
                            break;
                        case 1:
                            var td = tr.insertCell();
                            x.appendChild(document.createTextNode("imie"));
                            td.appendChild(x);
                            break;
                        case 2:
                            var td = tr.insertCell();
                            x.appendChild(document.createTextNode("nazwisko"));
                            td.appendChild(x);
                            break;
                        case 3:
                            var td = tr.insertCell();
                            td.id = "przycisk";
                            break;
                    }
                } else {
                    switch (j) {
                        case 0:
                            var td = tr.insertCell();
                            td.appendChild(document.createTextNode(i));
                            break;
                        case 1:
                            var td = tr.insertCell();
                            td.appendChild(document.createTextNode(losujImie()));
                            break;
                        case 2:
                            var td = tr.insertCell();
                            td.appendChild(document.createTextNode(losujNazwisko()));
                            break;
                        case 3:
                            var td = tr.insertCell();
                            td.appendChild(document.createTextNode(''));
                            td.setAttribute('contenteditable', 'true');
                            break;
                    }
                }
            }

        }
        document.getElementById("tabela").innerHTML = "";
        body.appendChild(tbl);

    }
    document.getElementById('przycisk').innerHTML += '<button id=\'columnButton\' class=\'button\' onClick=\'dodaj()\'>Dodaj</button>';
}

function dodaj() {
    var numer = numer_staly;
    document.getElementById('columnButton').remove();
    document.getElementById('przycisk').setAttribute('contenteditable', 'true');
    document.getElementById('przycisk').removeAttribute("id");



    for (i = 0; i <= numer; i++) {
        if (i == 0) {
            var row = document.getElementById("myRow" + 0);
            var x = row.insertCell(numer_kolumn);
            x.appendChild(document.createTextNode(''));
            x.id = "przycisk";
            document.getElementById('przycisk').innerHTML += '<button id=\'columnButton\' class=\'button\' onClick=\'dodaj()\'>Dodaj</button>';
        } else {
            var row = document.getElementById("myRow" + i);
            var x = row.insertCell(numer_kolumn);
            x.setAttribute('contenteditable', 'true');
        }
    }
    numer_kolumn++;
}


function sprawdzWszystko() {
    var imie = document.rejestracja.imie;
    var nazwisko = document.rejestracja.nazwisko;
    var pesel = document.rejestracja.pesel;
    if (userid_validation(imie, 2, 1)) {
        if (allLetterimie(imie, 1)) {
            if (pierwszaLitera(imie, 1)) {
                if (userid_validation(nazwisko, 2, 2)) {
                    if (allLetterimie(nazwisko, 2)) {
                        if (pierwszaLitera(nazwisko, 2)) {
                            if (tylkoLiczby(pesel)) {
                                if (sprawdzPesel(pesel)) {
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
}

function imieczynazwisko(liczba) {
    if (liczba == 1)
        return "Imię";
    else if (liczba == 2)
        return "Nazwisko";
}
function userid_validation(imie, mx, liczba) {
    var coto = imieczynazwisko(liczba);

    var imie_dlu = imie.value.length;
    if (imie_dlu == 0 || imie_dlu < mx)
    {
        alert(coto + " nie może być puste lub długość powinna być dłuższa niż " + mx);
        imie.focus();
        return false;
    }
    return true;
}

function allLetterimie(imie, liczba) {
    var coto = imieczynazwisko(liczba);
    var letters = /^[A-Za-z]+$/;

    if (imie.value.match(letters)) {
        return true;
    } else {
        alert(coto + " mo�e sk�ada� si� tylko z liter");
        imie.focus();
        return false;
    }
}

function pierwszaLitera(imie, liczba) {
    var coto = imieczynazwisko(liczba);
    var mojstring = imie.value;
    var x = mojstring[0].match(/[A-Z]/g);

    if (x) {
        return true;
    } else {
        alert(coto + "-> pierwsza litera musi by� du�a");
        imie.focus();
        return false;
    }
}

function tylkoLiczby(pesel) {
    var liczby = /^[0-9]+$/;
    var mojstring = pesel.value;
    //alert("1");
    if (pesel.value.match(liczby)) {
        // alert("2");
        if (mojstring.length == 11) {
            //alert("b�dzie true");
            return true;
        } else {
            alert("Pesel musi si� sk�ada� z 11 cyfr");
            pesel.focus();
            return false;
        }
    } else {
        alert("W peselu mo�na wpisywac tylko liczby");
        pesel.focus();
        return false;
    }
    //alert("3");
}

function obliczWiek() {
    var x = new Date(document.rejestracja.dataur.value).getFullYear();
    document.rejestracja.wiek.value = (2016 - x);

}

function sprawdzPesel(pesel) {
    //alert("Haloo");
    var mojstring = pesel.value;                  // foramt rrmmddnnnnn
    var data = document.rejestracja.dataur.value; // format rrrr-mm-dd
    if (mojstring[0] == data[2]) {
        if (mojstring[1] == data[3]) {
            if (mojstring[2] == data[5]) {
                if (mojstring[3] == data[6]) {
                    if (mojstring[4] == data[8]) {
                        if (mojstring[5] == data[9]) {
                            //alert("Poprawny PEsel")
                            var frm = document.getElementsByName('rejestracja')[0];
                            frm.submit(); // Submit
                            frm.reset();  // Reset
                            return true;
                        }
                    }

                }

            }
        }
    }
    alert("Niepoprawny pesel");
    return false;
}

function maxRozmiar() {
    var dlugosc = document.getElementById("opisid").value.length;
    document.getElementById("znakiID").value = 300 - dlugosc;
}

function resetMeIfChecked() {
    var allRadios = document.getElementsByName('re');
    var booRadio;
    var x = 0;
    for (x = 0; x < allRadios.length; x++) {

        allRadios[x].onclick = function () {

            if (booRadio == this) {
                this.checked = false;
                booRadio = null;
            } else {
                booRadio = this;
            }
        };

    }
}