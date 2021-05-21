// comprovar Format
var email = false;
var tel = false;
var dni = false;
var pass = false;

// comprovar BBDD
var bbddEmail = false;
var bbddTel = false;
var bbddDni = false;
var bbddPass = false;

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
    if(document.getElementById("tel").value == ""){
        document.getElementById("errorTel").innerHTML = "* El telefon no pot estar en blanc.";
    }else{
        document.getElementById("errorTel").innerHTML = "";
        if(comprovarTel()){

        }
    }

    // DNI
    if(document.getElementById("dni").value == ""){
        document.getElementById("errorDni").innerHTML = "* El DNI no pot estar en blanc.";
    }else{
        document.getElementById("errorDni").innerHTML = "";
    }

    // Nom d'usuari
    if(document.getElementById("usuari").value == ""){
        document.getElementById("errorUsuari").innerHTML = "* L'usuari no pot estar en blanc.";
    }else{
        document.getElementById("errorUsuari").innerHTML = "";
    }

    // Email
    if(document.getElementById("email").value == ""){
        document.getElementById("errorEmail").innerHTML = "* El correu electronic no pot estar en blanc.";
    }else{
        document.getElementById("errorEmail").innerHTML = "";
        if(comprovarEmail()){
            document.getElementById("errorEmail").innerHTML = "";
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
        email == true && tel == true && dni == true && pass == true){
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.response === "1") {
                    document.getElementById("errorUsuari").innerHTML = "";
                    document.getElementById("errorPassword").innerHTML = "";
                    window.location.href = "./index-client.php";
                }
                else {
                    document.getElementById("errorUsuari").innerHTML = "* L'usuari o contrasenya no existeix";
                    document.getElementById("errorPassword").innerHTML = "* L'usuari o contrasenya no existeix";
                }
            }
        };
        xhttp.open("POST", "./php/registre-client.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("usuari=" + document.getElementById("usuari").value + "&password=" + document.getElementById("password").value);
    }
}

function comprovarEmail() {
    var format = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(format.test(document.getElementById("email").value)) {
        email = true;
        return true;
    }else{
        email = false;
        return false;
    }
}

function comprovarTel() {
    var numTel = parseInt(document.getElementById("tel").value);

    if(Number.isInteger(numTel) == true && numTel.toString().length == 9) {
        bbddTel = true;
        telExisteix(numTel);
        return true;
    }else{
        controlTel = false;
        return false;
    }
}

var bbddDni = false;

function comprovarTercer() {
    controlDNI = false;

    //Validació del DNI
    var numero
    var lletraintroduit
    var lletra
    var expresio_dni
    var dni = document.getElementById("form-dni").value;
    
    expresio_dni = /^\d{8}[a-zA-Z]$/;
    
    if(expresio_dni.test (dni) == true){
        numero = dni.substr(0,dni.length-1);
        lletraintroduit = dni.substr(dni.length-1,1);
        numero = numero % 23;
        lletra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        lletra = lletra.substring(numero,numero+1);
        if (lletra != lletraintroduit.toUpperCase()) {
            document.getElementById("errDNI").innerHTML = "* La lletra del DNI no es correspon";
            controlDNI = false;
        } else {
            document.getElementById("errDNI").innerHTML = "";
            controlDNI = true;
            dniExisteix(dni);
        }
    }else{
        document.getElementById("errDNI").innerHTML = "* El format del DNI no és vàlid";
        controlDNI = false;
    }

    //Validació del sector laboral
    if(document.getElementById("form-sector").value == 0) {
        document.getElementById("errSector").innerHTML = "* No has seleccionat cap sector laboral";
        controlSector = false;
    } else {
        document.getElementById("errSector").innerHTML = "";
        controlSector = true;
    }

    //Validació de la població
    if(document.getElementById("form-poblacion").value == 0) {
        document.getElementById("errPoblacio").innerHTML = "* No has seleccionat cap població";
        controlPoblacio = false;
    } else {
        document.getElementById("errPoblacio").innerHTML = "";
        controlPoblacio = true;
    }

    //Control final per el botó de registrar
    if(controlDNI == true && controlSector == true && controlPoblacio == true) {
        document.getElementById("btnReg").disabled = false;
        document.getElementById("btnReg").setAttribute('type', 'submit');
    } else {
        document.getElementById("btnReg").disabled = true;
        document.getElementById("btnReg").setAttribute('type', '');
    }
}



//Funció per mirar si el correu ja existeix
function emailExisteix(emailExisteix) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == 1) {
                document.getElementById("errEmail").innerHTML = "* El correu ja ha sigut registrat";
                document.getElementById("errEmail").className = "text-danger";
                controlEmail = false;
            } else {
                document.getElementById("errEmail").innerHTML = "";
                controlEmail = true;
            }
        }
    };
    xhttp.open("POST", "./assets/ajax/comprovaCorreu.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + emailExisteix);
}


//Funció per mirar si el telèfon ja existeix
function telExisteix(telExisteix) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == 1) {
                document.getElementById("errTel").innerHTML = "* El telèfon ja ha sigut registrat";
                document.getElementById("errTel").className = "text-danger";
                controlTel = false;
            } else {
                document.getElementById("errTel").innerHTML = "";
                controlTel = true;
            }
        }
    };
    xhttp.open("POST", "./assets/ajax/comprovaTelefon.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("tel=" + telExisteix);
}

//Funció per mirar si el DNI ja existeix
function dniExisteix(dniExisteix) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == 1) {
                document.getElementById("errDNI").innerHTML = "* El DNI ja ha sigut registrat";
                controlDNI = false;
            } else {
                document.getElementById("errDNI").innerHTML = "";
                controlDNI = true;
            }
        }
    };
    xhttp.open("POST", "./assets/ajax/comprovaDNI.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("dni=" + dniExisteix);
}