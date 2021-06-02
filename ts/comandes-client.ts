window.onload = function comandesClient(){
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
    xhttp.open("POST", "./php/comandes-client.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("");
}