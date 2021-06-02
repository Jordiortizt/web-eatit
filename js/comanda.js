function confirmarComanda() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.response === "1") {
                console.log(this.responseText);
            }
            else {
                console.log(this.responseText);
            }
        }
    };
    xhttp.open("POST", "./php/comanda-confirmacio.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("descompte=" + document.getElementById("descompte").value +
        "&comentari=" + document.getElementById("comentari").value +
        "&total=" + document.getElementById("total").innerText);
}
function modificarDescompte(total) {
    var descompte = document.getElementById("descompte").value;
    var resultat = parseInt(total) - parseInt(descompte);
    document.getElementById("total").innerHTML = resultat.toString();
}
