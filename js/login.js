function iniciarSessio() {
    if (document.getElementById("usuari").value == "") {
        document.getElementById("errorUsuari").innerHTML = "* L'usuari no pot estar en blanc.";
    }
    else {
        document.getElementById("errorUsuari").innerHTML = "";
    }
    if (document.getElementById("password").value == "") {
        document.getElementById("errorPassword").innerHTML = "* La contrasenya no pot estar en blanc.";
    }
    else {
        document.getElementById("errorPassword").innerHTML = "";
    }
    if (document.getElementById("usuari").value != "" && document.getElementById("password").value != "") {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.response === "1") {
                    document.getElementById("errorUsuari").innerHTML = "";
                    document.getElementById("errorPassword").innerHTML = "";
                    window.location.href = "./index-client.php";
                    alert("SI");
                    console.log(this.responseText);
                }
                else {
                    alert("NO");
                    console.log(this.responseText);
                    document.getElementById("errorUsuari").innerHTML = "* L'usuari o contrasenya no existeix";
                    document.getElementById("errorPassword").innerHTML = "* L'usuari o contrasenya no existeix";
                }
            }
        };
        xhttp.open("POST", "./php/login.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("usuari=" + document.getElementById("usuari").value + "&password=" + document.getElementById("password").value);
    }
}
