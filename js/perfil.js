var btn = 0;
// comprovar Format
var email = false;
var tel = false;
var dni = false;
var pass = false;
var usuari = false;
// comprovar BBDD
var bbddEmail = false;
var bbddTel = false;
var bbddDni = false;
var bbddUsuari = false;
// format
var formEmail;
var formTel;
var formDni;
var formPass;
var formUsuari;
// Registre
function change() {
    // Nom
    if (document.getElementById("nom").value == "") {
        document.getElementById("errorNom").innerHTML = "* El nom no pot estar en blanc.";
    }
    else {
        document.getElementById("errorNom").innerHTML = "";
    }
    // Cognoms
    if (document.getElementById("cognom").value == "") {
        document.getElementById("errorCognom").innerHTML = "* El cognom no pot estar en blanc.";
    }
    else {
        document.getElementById("errorCognom").innerHTML = "";
    }
    // Telefon
    // blanc
    if (document.getElementById("tel").value == "") {
        document.getElementById("errorTel").innerHTML = "* El telefon no pot estar en blanc.";
    }
    else {
        document.getElementById("errorTel").innerHTML = "";
        // format
        if (formatTel()) {
            document.getElementById("errorTel").innerHTML = "";
            // bbdd
            //comprovarTel();
        }
        else {
            document.getElementById("errorTel").innerHTML = "* El format del telefon no es correcte";
        }
    }
    // DNI
    if (document.getElementById("dni").value == "") {
        document.getElementById("errorDni").innerHTML = "* El DNI no pot estar en blanc.";
    }
    else {
        document.getElementById("errorDni").innerHTML = "";
        if (formatDNI()) {
            document.getElementById("errorDni").innerHTML = "";
            // comprovarDNI();
        }
        else {
            document.getElementById("errorDni").innerHTML = "* El format del DNI no es vàlid";
        }
    }
    // Nom d'usuari
    if (document.getElementById("usuari").value == "") {
        document.getElementById("errorUsuari").innerHTML = "* L'usuari no pot estar en blanc.";
    }
    else {
        document.getElementById("errorUsuari").innerHTML = "";
    }
    // Email
    // Blanc
    if (document.getElementById("email").value == "") {
        document.getElementById("errorEmail").innerHTML = "* El correu electronic no pot estar en blanc.";
    }
    else {
        document.getElementById("errorEmail").innerHTML = "";
        // Format
        if (formatEmail()) {
            document.getElementById("errorEmail").innerHTML = "";
            // bbdd Email
            comprovarEmail();
        }
        else {
            document.getElementById("errorEmail").innerHTML = "* El format del correu no es correcte";
        }
    }
    // Contrasenya
    if (btn == 1) {
        if (document.getElementById("newpass").value == "") {
            document.getElementById("errorNewpass").innerHTML = "* La contrasenya no pot estar en blanc.";
        }
        else {
            document.getElementById("errorNewpass").innerHTML = "";
            // Format
            if (formatPass()) {
                document.getElementById("errorNewpass").innerHTML = "";
            }
            else {
                document.getElementById("errorNewpass").innerHTML = "* La contrasenya ha de ser minim 8 caracters";
            }
        }
    }
    if (btn == 1) {
        if (document.getElementById("nom").value != "" &&
            document.getElementById("cognom").value != "" &&
            document.getElementById("tel").value != "" &&
            document.getElementById("dni").value != "" &&
            document.getElementById("usuari").value != "" &&
            document.getElementById("email").value != "" &&
            document.getElementById("newpass").value != "" &&
            document.getElementById("direccio").value != "" &&
            document.getElementById("municipi").value != "" &&
            email == true && tel == true && dni == true && pass == true //&&
        //bbddEmail == true && bbddTel == true && bbddDni == true
        ) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == "1") {
                        alert('Ole');
                        location.reload();
                    }
                    else {
                        alert('aAAAH');
                    }
                }
            };
            xhttp.open("POST", "./php/change.php", true);
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send("nom=" + document.getElementById("nom").value +
                "&cognom=" + document.getElementById("cognom").value +
                "&tel=" + document.getElementById("tel").value +
                "&email=" + document.getElementById("email").value +
                "&dni=" + document.getElementById("dni").value +
                "&usuari=" + document.getElementById("usuari").value +
                "&password=" + document.getElementById("newpass").value +
                "&direccio=" + document.getElementById("direccio").value +
                "&ciutat=" + document.getElementById("municipi").value);
        }
    }
    else {
        if (document.getElementById("nom").value != "" &&
            document.getElementById("cognom").value != "" &&
            document.getElementById("tel").value != "" &&
            document.getElementById("dni").value != "" &&
            document.getElementById("usuari").value != "" &&
            document.getElementById("email").value != "" &&
            document.getElementById("direccio").value != "" &&
            document.getElementById("municipi").value != "" &&
            email == true && tel == true && dni == true //&&
        //bbddEmail == true && bbddTel == true && bbddDni == true
        ) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == "1") {
                        alert('Ole');
                        location.reload();
                    }
                    else {
                        console.log(this.responseText);
                    }
                }
            };
            xhttp.open("POST", "./php/change.php", true);
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send("nom=" + document.getElementById("nom").value +
                "&cognom=" + document.getElementById("cognom").value +
                "&tel=" + document.getElementById("tel").value +
                "&email=" + document.getElementById("email").value +
                "&dni=" + document.getElementById("dni").value +
                "&usuari=" + document.getElementById("usuari").value +
                "&direccio=" + document.getElementById("direccio").value +
                "&ciutat=" + document.getElementById("municipi").value);
        }
    }
}
//
// CAMBIAR CONTRASENYA
//
function mostrarInputsPass() {
    btn = 1;
    document.getElementById("paraInputs").innerHTML = '<div class="mb-3"><label for="oldpass" class="form-label">Antiga Contrasenya</label><input type="text" class="form-control" id="oldpass"><div id="errorOldPass" class="form-text text-danger"></div></div><div class="mb-3"><label for="newpass" class="form-label">Nova Contrasenya</label><input type="text" class="form-control" id="newpass"><div id="errorNewpass" class="form-text text-danger"></div></div>';
}
//
// FORMAT
//
// Telefon format
function formatTel() {
    formTel = parseInt(document.getElementById("tel").value);
    if (Number.isInteger(formTel) == true && formTel.toString().length == 9) {
        tel = true;
        return true;
    }
    else {
        tel = false;
        return false;
    }
}
// Email format
function formatEmail() {
    var format = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (format.test(document.getElementById("email").value)) {
        email = true;
        return true;
    }
    else {
        email = false;
        return false;
    }
}
// DNI format
function formatDNI() {
    var numero;
    var lletraintroduit;
    var lletra;
    var expresio_dni = /^\d{8}[a-zA-Z]$/;
    if (expresio_dni.test(document.getElementById("dni").value) == true) {
        numero = document.getElementById("dni").value.substr(0, document.getElementById("dni").value.length - 1);
        lletraintroduit = document.getElementById("dni").value.substr(document.getElementById("dni").value.length - 1, 1);
        numero = numero % 23;
        lletra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        lletra = lletra.substring(numero, numero + 1);
        if (lletra != lletraintroduit.toUpperCase()) {
            dni = false;
            return false;
        }
        else {
            dni = true;
            return true;
        }
    }
    else {
        dni = false;
        return false;
    }
}
// password format
function formatPass() {
    if (document.getElementById("password").value.length > 7) {
        pass = true;
        return true;
    }
    else {
        pass = false;
        return false;
    }
}
//
//  BBDD
//
// bbdd Telefon
function comprovarTel() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 1) {
                tel = false;
                document.getElementById("errorTel").innerHTML = "";
            }
            else {
                tel = true;
                document.getElementById("errorTel").innerHTML = "* El telèfon ja ha sigut registrat";
            }
        }
    };
    xhttp.open("POST", "./php/bbddTelefon.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("tel=" + document.getElementById("tel").value);
}
// bbdd DNI
function comprovarDNI() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 1) {
                email = false;
                document.getElementById("errorEmail").innerHTML = "* El correu ja ha sigut registrat";
            }
            else {
                email = true;
                document.getElementById("errorEmail").innerHTML = "";
            }
        }
    };
    xhttp.open("POST", "./php/bbddDNI.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("dni=" + document.getElementById("dni").value);
}
// bbdd Email
function comprovarEmail() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 1) {
                email = false;
                document.getElementById("errorEmail").innerHTML = "* El correu ja ha sigut registrat";
            }
            else {
                email = true;
                document.getElementById("errorEmail").innerHTML = "";
            }
        }
    };
    xhttp.open("POST", "./php/bbddEmail.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + document.getElementById("email").value);
}
// bbdd usuari
function comprovarUsuari() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 1) {
                usuari = false;
                document.getElementById("errorEmail").innerHTML = "* El usuari ja ha sigut registrat";
            }
            else {
                usuari = true;
                document.getElementById("errorEmail").innerHTML = "";
            }
        }
    };
    xhttp.open("POST", "./php/bbddUsuari.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + document.getElementById("usuari").value);
}
window.onload = function () {
    cargarXML();
};
function cargarXML() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            mostrarXML(this);
        }
    };
    xhttp.open("GET", "./php/cargaProvinciasXML.php", true);
    xhttp.send();
}
function mostrarXML(xml) {
    var xmlDoc = xml.responseXML;
    var provincia = xmlDoc.getElementsByTagName("provincia");
    var code = '<div class"mb-3"><label for="provincia" class="form-label">Provincia</label><select class="form-select" id="provincia" onchange="mostrarLocalidad()">';
    for (var i = 0; i < provincia.length; i++) {
        code += '<option value="' + provincia[i].getElementsByTagName("codigo")[0].childNodes[0].nodeValue + '">' + provincia[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue + '</option>';
    }
    document.getElementById("output").innerHTML = code += '</select></div>';
}
function mostrarLocalidad() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var xmlDoc = xhttp.responseXML;
            var municipio = xmlDoc.getElementsByTagName("municipio");
            var code = '<div class"mb-3"><label for="municipi" class="form-label">Municipi</label><select class="form-select" id="municipi" name="municipi">';
            for (var i = 0; i < municipio.length; i++) {
                code += '<option value="' + municipio[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue + '">' + municipio[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue + '</option>';
            }
            document.getElementById("output2").innerHTML = code += '</select></div>';
        }
    };
    xhttp.open("POST", "./php/cargaMunicipiosXML.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("provincia=" + document.getElementById("provincia").value);
}
