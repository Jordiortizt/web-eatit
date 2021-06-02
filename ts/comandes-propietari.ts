window.onload = function comandesPropietari(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(this.response === "1") {
                document.getElementById("comandes").innerHTML = this.response;
            }else {
                document.getElementById("comandes").innerHTML = this.response;
            }
        }
    };
    xhttp.open("POST", "./php/comandes-propietari.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("");
}

function cambiarEstat(estatActual, id){
    estatActual = estatActual + 1;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(this.response === "1") {
                location.reload();
            }else {
                document.getElementById("comandes").innerHTML = this.response;
            }
        }
    };
    xhttp.open("POST", "./php/cambiar-estat-comanda.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("estat=" + estatActual + 
                "&id=" + id);
}