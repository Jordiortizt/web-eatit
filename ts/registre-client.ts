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

function registre() {
    
    // Nom
    if(document.getElementById("nom").value == ""){
        document.getElementById("errorNom").innerHTML = "* El nom no pot estar en blanc.";
    }else{
        document.getElementById("errorNom").innerHTML = "";
    }

    // Cognoms
    if(document.getElementById("cognom").value == ""){
        document.getElementById("errorCognom").innerHTML = "* El cognom no pot estar en blanc.";
    }else{
        document.getElementById("errorCognom").innerHTML = "";
    }

    // Telefon

    // blanc
    if(document.getElementById("tel").value == ""){
        document.getElementById("errorTel").innerHTML = "* El telefon no pot estar en blanc.";
    }else{
        document.getElementById("errorTel").innerHTML = "";

        // format
        if(formatTel()){
            document.getElementById("errorTel").innerHTML = "";
            // bbdd
            comprovarTel();

        }else{
            document.getElementById("errorTel").innerHTML = "* El format del telefon no es correcte";
        }
    }

    // DNI
    if(document.getElementById("dni").value == ""){
        document.getElementById("errorDni").innerHTML = "* El DNI no pot estar en blanc.";
    }else{
        document.getElementById("errorDni").innerHTML = "";
        if(formatDNI()){
            document.getElementById("errorDni").innerHTML = "";

            comprovarDNI();

        }else{
            document.getElementById("errorDni").innerHTML = "* El format del DNI no es vàlid";
        }
    }

    // Nom d'usuari
    if(document.getElementById("usuari").value == ""){
        document.getElementById("errorUsuari").innerHTML = "* L'usuari no pot estar en blanc.";
    }else{
        document.getElementById("errorUsuari").innerHTML = "";
    }

    // Email

    // Blanc
    if(document.getElementById("email").value == ""){
        document.getElementById("errorEmail").innerHTML = "* El correu electronic no pot estar en blanc.";
    }else{
        document.getElementById("errorEmail").innerHTML = "";
        // Format
        if(formatEmail()){
            document.getElementById("errorEmail").innerHTML = "";

            // bbdd Email
            comprovarEmail();

        }else{
            document.getElementById("errorEmail").innerHTML = "* El format del correu no es correcte";
        }
    }

    // Contrasenya
    
    if(document.getElementById("password").value == ""){
        document.getElementById("errorPassword").innerHTML = "* La contrasenya no pot estar en blanc.";
    }else{
        document.getElementById("errorPassword").innerHTML = "";
    }


    if(document.getElementById("nom").value != "" && 
        document.getElementById("cognom").value != "" && 
        document.getElementById("tel").value != "" && 
        document.getElementById("dni").value != "" &&
        document.getElementById("usuari").value != "" &&
        document.getElementById("email").value != "" &&
        document.getElementById("password").value != "" &&
        email == true && tel == true && dni == true && pass == true &&
        bbddEmail == true && bbddTel == true && bbddDni == true){
        
        alert("Bondia");

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.response === "1") {
                    window.location.href = "./login.php";
                }else{
                    
                }
                
            }
        };
        xhttp.open("POST", "./php/registre-client.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("nom=" + document.getElementById("nom").value + 
                "&cognoms=" + document.getElementById("cognoms").value + 
                "&tel=" + document.getElementById("tel").value +
                "&email=" + document.getElementById("email").value +
                "&dni=" + document.getElementById("dni").value +
                "&usuari=" + document.getElementById("usuari").value +
                "&password=" + document.getElementById("password").value);
    }else{
        alert("NOO");
    }
}

//
// FORMAT
//

// Telefon format

function formatTel() {
    formTel = parseInt(document.getElementById("tel").value);

    if(Number.isInteger(formTel) == true && formTel.toString().length == 9) {
        tel = true;
        alert("Form tel 1");
        return true;
    }else{
        tel = false;
        alert("Form tel 0");
        return false;
    }
}

// Email format

function formatEmail() {
    var format = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(format.test(document.getElementById("email").value)) {
        email = true;
        alert("Form email 1");
        return true;
    }else{
        email = false;
        alert("Form email 0");
        return false;
    }
}

// Dni format

function formatDNI() {
    dni = false;

    var numero
    var lletraintroduit
    var lletra
    var expresio_dni
    formDni = document.getElementById("dni").value;
    
    expresio_dni = /^\d{8}[a-zA-Z]$/;
    
    if(expresio_dni.test (dni) == true){
        numero = dni.substr(0,dni.length-1);
        lletraintroduit = dni.substr(dni.length-1,1);
        numero = numero % 23;
        lletra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        lletra = lletra.substring(numero,numero+1);
        if (lletra != lletraintroduit.toUpperCase()) {
            dni = false;
            alert("Form dni 0");
            return false;
        } else {
            dni = true;
            alert("Form dni 1");
            return true;
        }
    }else{
        dni = false;
        return false;
    }
}

// password format

function formatPass() {
    formPass = parseInt(document.getElementById("password").value);

    if(formPass.toString().length > 7) {
        pass = true;
        alert("Form pass 1");
        document.getElementById("errorTel").innerHTML = "* ";
        return true;
    }else{
        pass = false;
        alert("Form pass 0");
        document.getElementById("errorTel").innerHTML = "* El telèfon ja ha sigut registrat";
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
            if(this.responseText == 1) {
                tel = false;
                alert("bbdd tel 0");
            } else {
                tel = true;
                alert("bbdd tel 1");
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
            if(this.responseText == 1) {
                email = false;
                document.getElementById("errEmail").innerHTML = "* El correu ja ha sigut registrat";
                alert("bbdd dni 0");
            } else {
                email = true;
                document.getElementById("errEmail").innerHTML = "";
                alert("bbdd dni 1");
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
            if(this.responseText == 1) {
                email = false;
                document.getElementById("errEmail").innerHTML = "* El correu ja ha sigut registrat";
                alert("bbdd email 0");
            } else {
                email = true;
                document.getElementById("errEmail").innerHTML = "";
                alert("bbdd email 1");
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
            if(this.responseText == 1) {
                usuari = false;
                alert("bbdd usuari 0");
            } else {
                usuari = true;
                alert("bbdd usuari 1");
            }
        }
    };
    xhttp.open("POST", "./php/bbddUsuari.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + document.getElementById("usuari").value);
}