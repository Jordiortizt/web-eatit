window.onload = function restaurantsClient() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.response === "1") {
                document.getElementById("productes").innerHTML = this.response;
            }
            else {
                document.getElementById("productes").innerHTML = this.response;
            }
        }
    };
    xhttp.open("POST", "./php/productes-client.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("");
};
function afegirProducte(id) {
    var num = document.getElementById("num" + id).innerText.toString();
    var foto = document.getElementById("foto" + id).style.backgroundImage;
    var titol = document.getElementById("producte" + id).innerText.toString();
    var preu = document.getElementById("preu" + id).innerText.toString();
    if (num >= "99") {
        document.getElementById("num" + id).innerText = "99";
    }
    else {
        document.getElementById("num" + id).innerText = (parseInt(num) + 1).toString();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // alert(this.responseText);
            }
        };
        xhttp.open("POST", "./php/afegirCarro.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id + "&titol=" + titol + "&foto=" + foto + "&preu=" + preu);
    }
}
function restarProducte(id) {
    var num = document.getElementById("num" + id).innerText.toString();
    if (num <= "0") {
        document.getElementById("num" + id).innerText = "0";
    }
    else {
        document.getElementById("num" + id).innerText = (parseInt(num) - 1).toString();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // alert(this.responseText);
            }
        };
        xhttp.open("POST", "./php/restarCarro.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id);
    }
}
