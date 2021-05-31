window.onload = function restaurantsPropietari() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.response === "1") {
                document.getElementById("mostrarRestaurants").innerHTML = this.response;
            }
            else {
                document.getElementById("mostrarRestaurants").innerHTML = this.response;
            }
        }
    };
    xhttp.open("POST", "./php/restaurants-propietari.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("");
};
