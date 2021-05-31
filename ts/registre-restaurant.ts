// comprovar BBDD
var bbddNom = false;

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
            var code = '<div class"mb-3"><label for="municipi" class="form-label">Municipi</label><select class="form-select" id="municipi">';
            for (var i = 0; i < municipio.length; i++) {
                code += '<option value="' + municipio[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue + '">' + municipio[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue + '</option>';
            }
            document.getElementById("output2").innerHTML = code += '</select><div id="errorMunicipi" class="form-text text-danger"></div></div>';
        }
    };
    xhttp.open("POST", "./php/cargaMunicipiosXML.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("provincia=" + document.getElementById("provincia").value);
}

// Registre

function registre_restaurant() {
    
    // Nom //

    // blanc
    if(document.getElementById("nom").value == ""){
        document.getElementById("errorNom").innerHTML = "* El nom no pot estar en blanc.";
    }else{
        document.getElementById("errorNom").innerHTML = "";

        comprovarNom();
    }

    // Descripció //

    // blanc
    if(document.getElementById("desc").value == ""){
        document.getElementById("errorDesc").innerHTML = "* La descripció no pot estar en blanc.";
    }else{
        document.getElementById("errorDesc").innerHTML = "";
    }

    // Tipus de menjar //

    // blanc
    if(document.getElementById("tipus").value == ""){
        document.getElementById("errorTipus").innerHTML = "* El tipus de menjar no pot estar en blanc.";
    }else{
        document.getElementById("errorTipus").innerHTML = "";
    }

    // Minim per comanda //

    // Blanc
    if(document.getElementById("minim").value == ""){
        document.getElementById("errorMinim").innerHTML = "* El minim per comanda no pot estar en blanc.";
    }else{
        document.getElementById("errorMinim").innerHTML = "";
    }

    // Ciutat //

    // Blanc
    if(document.getElementById("municipi").value == ""){
        document.getElementById("errorMunicipi").innerHTML = "* El municipi no pot estar en blanc.";
    }else{
        document.getElementById("errorMunicipi").innerHTML = "";
    }

    // Direccio //

    // Blanc
    if(document.getElementById("direccio").value == ""){
        document.getElementById("errorDireccio").innerHTML = "* La direcció no pot estar en blanc.";
    }else{
        document.getElementById("errorDireccio").innerHTML = "";
    }

    // Domicili //
    
    if(document.getElementById("domicili").value == ""){
        document.getElementById("errorDomicili").innerHTML = "* El servei a domicili no pot estar en blanc.";
    }else{
        document.getElementById("errorDomicili").innerHTML = "";
    }


    if(document.getElementById("nom").value != "" && 
        document.getElementById("desc").value != "" && 
        document.getElementById("tipus").value != "" && 
        document.getElementById("minim").value != "" &&
        document.getElementById("municipi").value != "" &&
        document.getElementById("direccio").value != "" &&
        document.getElementById("domicili").value != "" && 
        bbddNom == true){
        
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == "1") {
                    alert(this.responseText);
                    window.location.href = "./index.php";
                }else{
                    alert(this.responseText);
                }
                
            }
        };
        xhttp.open("POST", "./php/registre-restaurant.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("nom=" + document.getElementById("nom").value + 
                "&desc=" + document.getElementById("desc").value + 
                "&tipus=" + document.getElementById("tipus").value +
                "&minim=" + document.getElementById("minim").value +
                "&municipi=" + document.getElementById("municipi").value +
                "&direccio=" + document.getElementById("direccio").value +
                "&domicili=" + document.getElementById("domicili").value);
    }else{
        alert("bbddEmail "+bbddEmail);
        alert("bbddTel "+bbddTel);
        alert("bbddDni "+bbddDni);
        alert("bbddUsuari "+bbddUsuari);

    }
}

function comprovarNom() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText === "1") {
                bbddNom = false;
                document.getElementById("errorNom").innerHTML = "* El restaurant ja ha sigut registrat";
            } else {
                bbddNom = true;
                document.getElementById("errorNom").innerHTML = "";
            }
        }
    };
    xhttp.open("POST", "./php/bbddNomLocal.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("nom=" + document.getElementById("nom").value);
}