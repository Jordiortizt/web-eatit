<?php
  require_once("./php/functions.php");
  $usuari = checkUsuari();
  if(isset($usuari)){
    if($usuari->TipoUsuario === 1){
          header('Location: ./index.php');
      }else if($usuari->TipoUsuario === 3){
          header('Location: ./index.php');
      }
  }else{
      header('Location: ./index.php');
  }
?>
<!doctype html>
<html lang="ca">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/background.css">
    <link rel="stylesheet" href="./css/nav-restaurants.css">
    <link rel="stylesheet" href="./css/productes.css">
    <link rel="icon" href="./img/LogoEatit.png" type="image/png">
    
    <script src="./js/productes-propietari.js"></script>
    
    <title>EAT IT Productes client</title>
  </head>

  <body>
    <!-- Background -->
    <div class="box">
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>

    <header>

      <nav class="menu">
        <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
        <label class="menu-open-button" for="menu-open">
          <span class="hamburger hamburger-1"></span>
          <span class="hamburger hamburger-2"></span>
          <span class="hamburger hamburger-3"></span>
        </label>

        <a href="./index.php" class="menu-item"> <i class="fas fa-home"></i> </a>
        <p class="sr-only">Espai</p>
        <p class="sr-only">Espai</p>
        <p class="sr-only">Espai</p>
        <a href="./restaurants-propietari.php" class="menu-item"> <i class="fas fa-angle-left"></i> </a>

      </nav>
      <!-- </div> -->
    </header>
    
    <!-- Inici main -->
    <main>

      <h1 class="sr-only">Restaurants</h1>
      <p class="sr-only">Llista de restaurants</p>

      <section class="filtre" id="filtre">
        <div class="container">
          
        </div>
      </section>

      <section id="productes" class="productes container pt-5">
         
      </section>

    </main>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->

    
  </body>
</html>