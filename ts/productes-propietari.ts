window.onload = function restaurantsPropietari() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(this.response != 0) {
                document.getElementById("productes").innerHTML = this.responseText;
            }else {
                document.getElementById("productes").innerHTML = this.responseText;
            }
        }
    };
    xhttp.open("POST", "./php/productes-propietari.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("");
}