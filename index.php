<?php
  require_once("./php/functions.php");
  $user = checkUsuari();

  if(isset($user)){
      if($user->TipoUsuario === 2){
          header('Location: ./index-propietari.php');
      }else if($user->TipoUsuario === 3){
          header('Location: ./index-admin.php');
      }else{
          header('Location: ./index-client.php');
      }
  }
?>

<!doctype html>
<html lang="ca">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> -->

    
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/background.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="icon" href="./img/LogoEatit.png" type="image/png">


    <title>EAT IT Inicio</title>
  </head>

  <body>
    <!-- Background -->
    <div class="box">
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>

    <header>
      <div class="container">

        <div class="vertical">

          <nav class="menu">

            <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>

            <label class="menu-open-button" for="menu-open">
              <span class="hamburger hamburger-1"></span>
              <span class="hamburger hamburger-2"></span>
              <span class="hamburger hamburger-3"></span>
            </label>
            
            <a href="./restaurants-client.php" class="menu-item"> <i class="fas fa-utensils"></i><span class="sr-only">Restaurants</span> </a>
            <a href="./login.php" class="menu-item"> <i class="fas fa-user-alt"></i><span class="sr-only">Login</span> </a>
            <a href="./registre.php" class="menu-item"> <i class="fas fa-sign-in-alt"></i><span class="sr-only">Registre usuari</span> </a>
            <a href="#" class="menu-item"> <i class="fas fa-info"></i><span class="sr-only">Termes d'usuari</span> </a>
          </nav>

        </div>
      </div>
      
    </header>

    <main>
      <section>
        <div class="container">
          <h1 class="sr-only">Pagina inicial usuari</h1>
          <p class="sr-only">En aquesta pagina es mostren diferents opcións</p>
        </div>
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
