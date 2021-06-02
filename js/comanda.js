function confirmarComanda() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.response === "1") {
                window.location.href = "./comandes-client.php";
            }
            else {
                window.location.href = "./comandes-client.php";
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
    if (resultat < 0) {
        document.getElementById("total").innerHTML = '0';
    }
    else {
        document.getElementById("total").innerHTML = resultat.toString();
    }
}
