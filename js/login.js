function login() {
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
                if (this.responseText == 1) {
                    sessionStorage.setItem("tipus", "Administrador");
                    sessionStorage.setItem("usuari", usuari);
                    window.location.href = "admin.html";
                }
                else {
                    alert("Error");
                }
            }
        };
        xhttp.open("POST", "./php/login.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("usuari=" + document.getElementById("usuari").value + "& password=" + document.getElementById("password").value);
    }
}
