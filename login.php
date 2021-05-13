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
    <link rel="stylesheet" href="./css/nav-login.css">
    <link rel="stylesheet" href="./css/form.css">
    
    <title>EAT IT Login</title>
  </head>

  <body>
    <!-- Background -->
    <div class="box">
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>

    <header>
      <div class="vertical sr-only">

        <nav class="menu">
          <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
          <label class="menu-open-button" for="menu-open">
            <span class="hamburger hamburger-1"></span>
            <span class="hamburger hamburger-2"></span>
            <span class="hamburger hamburger-3"></span>
          </label>
          
          <a href="./index.php" class="menu-item"> <i class="fas fa-utensils"></i><span class="sr-only">Inici</span> </a>
          
        </nav>
      </div>
    </header>
    
    <!-- Inici main -->
    <main>
    
<!--
    <section>
        <div class="row bg-success justify-content-center align-items-center vh-100">
            <div class="col-4 bg-primary">
                <h1>bondia</h1>
            </div>
        </div> 
    </section>
-->
     
      <!-- Inici secció login -->
      <section id="login">
        <h1 class="sr-only">Login</h1>
        <p class="sr-only">Pagina de eat it para hacer login</p>
        <!-- Inici container -->
        <div class="container">
              
              <!-- Inici carta -->
              <div class="container carta row justify-content-center align-items-center vh-100">

                <!-- Inici sub-carta -->
                <div class="sub-carta col-12 col-lg-6 py-5">
                    <h2>Iniciar Sessión</h2>

                    <form action="">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Usuario o Correo Electronico</label>
                        <input type="email" class="form-control" id="usuario" aria-describedby="emailHelp">
                        <!-- <div id="helpusuario" class="form-text">Usuario</div> -->
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Contrasenya</label>
                        <input type="password" class="form-control" id="password">
                      </div>
                      <button type="submit" class="btn btn-iniciar">Cancelar</button>
                      <button type="submit" class="btn btn-cancelar">Enviar</button>
                    </form>
                    

                </div>
                <!-- Fi sub-carta -->
              </div>
              <!-- Fi carta -->

        </div>
        <!-- Fi container -->
      </section>
      <!-- Fi section login -->
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