window.onload = function restaurantsClient() {
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
    xhttp.open("POST", "./php/productes-client.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("");
}

function afegirProducte(id){
    var num = document.getElementById("num"+id).innerText.toString();
    if(num >= "99"){
        document.getElementById("num"+id).innerText = "99";
    }else{
        document.getElementById("num"+id).innerText = (parseInt(num) + 1).toString();
    }
}
 
function restarProducte(id){
    var num = document.getElementById("num"+id).innerText.toString();
    if(num <= "0"){
        document.getElementById("num"+id).innerText = "0";
    }else{
        document.getElementById("num"+id).innerText = (parseInt(num) - 1).toString();
    }
}