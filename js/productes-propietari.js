window.onload = function restaurantsPropietari() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.response != 0) {
                document.getElementById("productes").innerHTML = this.responseText;
            }
            else {
                document.getElementById("productes").innerHTML = this.responseText;
            }
        }
    };
    xhttp.open("POST", "./php/productes-propietari.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("");
};
function eliminarProducte(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.response != 0) {
                window.location.href = './productes-propietari.php';
            }
            else {
                alert("No elimina");
            }
        }
    };
    xhttp.open("POST", "./php/eliminar-producte.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("id=" + id);
}
function eliminarDescompte(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.response != 0) {
                window.location.href = './productes-propietari.php';
            }
            else {
                alert("No elimina");
            }
        }
    };
    xhttp.open("POST", "./php/eliminar-descompte.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("id=" + id);
}
