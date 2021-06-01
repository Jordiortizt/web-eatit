// window.onload = function restaurantsClient() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//             if(this.response === "1") {
//                 document.getElementById("mostrarRestaurants").innerHTML = this.response;
//             }else {
//                 document.getElementById("mostrarRestaurants").innerHTML = this.response;
//             }
//         }
//     };
//     xhttp.open("POST", "./php/restaurants-client.php", true);
//     xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhttp.send("");
// }

function afegirProducte(id){
    // var numProducte: number = + document.getElementById("num"+id).value;
    var numProducte = document.getElementById("num"+id).value = Number("num"+id);
    alert(numProducte);
}

function restarProducte(id){
    
}