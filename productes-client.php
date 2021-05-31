<!doctype html>
<html lang="es">
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
    
    <script src="./js/productes-client.js"></script>
    
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

        <a href="./index-client.php" class="menu-item"> <i class="fas fa-home"></i> </a>
        <p class="sr-only">Espai</p>
        <p class="sr-only">Espai</p>
        <p class="sr-only">Espai</p>
        <a href="./index-client.php" class="menu-item"> <i class="fas fa-angle-left"></i> </a>

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
         
        <div class="foto container" style="background: url('https://www.hola.com/imagenes/viajes/20190314138949/restaurantes-cool-barcelona/0-658-616/restaurantes-cool-barcelona-t.jpg?filter=w600&filter=ds75');"></div>
           
        <div class="container sub-productes" id="mostrarProductes">
            
            <h1>Te Quiero</h1>
            <p class="sr-only">Productes del restaurant</p>
            
            <div class="row icones">
               <div class="col"> <i class="fas fa-utensils"></i> <br><span style="color:black">Tapas</span></div>
                <div class="col"> <i class="fas fa-motorcycle"></i> <br><span style="color:black">Domicili</span></div>
               <div class="col"> <i class="fas fa-money-bill"></i> <br><span style="color:black">10€</span></div>
            </div>
            
            
            <div class="descripcio">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus aliquam amet voluptatem, expedita nostrum ratione consectetur, quisquam eius dolores! Repellat itaque sit reiciendis, voluptatum quod culpa expedita ad quaerat voluptate, illo quo voluptatem, magnam repudiandae. Rerum earum, numquam totam repellendus, impedit tenetur fugit modi velit, omnis aliquid accusamus cupiditate?</p>
            </div>
            
            <div class="producte">
               <hr>
                
                <div class="sub-producte">
                   <div class="row">
                       <div class="col-1"><i class="fas fa-minus"></i></div>
                       <div class="col-10"><p>Patatas</p></div>
                       <div class="col-1"><i class="fas fa-plus"></i></div>
                   </div>
                </div>
                <hr>
                <div class="sub-producte">
                   <div class="row">
                       <div class="col-1"><i class="fas fa-minus"></i></div>
                       <div class="col-10"><p>Patatas</p></div>
                       <div class="col-1"><i class="fas fa-plus"></i></div>
                   </div>
                </div>
                <hr>
                <div class="sub-producte">
                   <div class="row">
                       <div class="col-1"><i class="fas fa-minus"></i></div>
                       <div class="col-10"><p>Patatas</p></div>
                       <div class="col-1"><i class="fas fa-plus"></i></div>
                   </div>
                </div>
                <hr>
                <div class="sub-producte">
                   <div class="row">
                       <div class="col-1"><i class="fas fa-minus"></i></div>
                       <div class="col-10"><p>Patatas</p></div>
                       <div class="col-1"><i class="fas fa-plus"></i></div>
                   </div>
                </div>
                <hr>
                <div class="sub-producte">
                   <div class="row">
                       <div class="col-1"><i class="fas fa-minus"></i></div>
                       <div class="col-10"><p>Patatas</p></div>
                       <div class="col-1"><i class="fas fa-plus"></i></div>
                   </div>
                </div>
                <hr>
                <div class="sub-producte">
                   <div class="row">
                       <div class="col-1"><i class="fas fa-minus"></i></div>
                       <div class="col-1"><p>1</p></div>
                       <div class="col"><p>Patatas</p></div>
                       <div class="col-1"><i class="fas fa-plus"></i></div>
                   </div>
                </div>
                <hr>
                
                
            </div>
            
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