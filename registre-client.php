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
    <link rel="stylesheet" href="./css/form.css">
    
    <script src="./js/registre-client.js"></script>
    
    <title>EAT IT Registre client</title>
  </head>

  <body>
    <!-- Background -->
    <div class="box">
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>

    <header>
      <!-- <div class="vertical"> -->

        <nav class="menu sr-only">
          
          

        </nav>
      <!-- </div> -->
    </header>
    
    <!-- Inici main -->
    <main>
     
      <!-- Inici secció login -->
      <section id="login" class="login">
        <h1 class="sr-only">Login</h1>
        <p class="sr-only">Pagina de eat it para hacer login</p>
        <!-- Inici container -->
        <div class="container">
              
              <!-- Inici carta -->
              <div class="carta row justify-content-center align-items-center vh-100">

                <!-- Inici sub-carta -->
                <div class="sub-carta col-12 col-lg-6 py-5">
                    <h2>Registre client</h2>
                    <p class="sr-only">Registre destinat als clients no propietaris de l'aplicació</p>
                    <form action="" onsubmit="return false;">
                      <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom">
                        <div id="errorNom" class="form-text text-danger"></div>
                      </div>

                      <div class="mb-3">
                        <label for="cognom" class="form-label">Cognoms</label>
                        <input type="text" class="form-control" id="cognom">
                        <div id="errorCognom" class="form-text text-danger"></div>
                      </div>
                      
                      <div class="mb-3">
                        <label for="tel" class="form-label">Telefon</label>
                        <input type="number" class="form-control" id="tel">
                        <div id="errorTel" class="form-text text-danger"></div>
                      </div>

                      <div class="mb-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control" id="dni">
                        <div id="errorDni" class="form-text text-danger"></div>
                      </div>

                      <div class="mb-3">
                        <label for="usuari" class="form-label">Nom d'usuari</label>
                        <input type="text" class="form-control" id="usuari">
                        <div id="errorUsuari" class="form-text text-danger"></div>
                      </div>

                      <div class="mb-3">
                        <label for="email" class="form-label">Correu Electronic</label>
                        <input type="email" class="form-control" id="email">
                        <div id="errorEmail" class="form-text text-danger"></div>
                      </div>
                      
                      <div class="mb-3">
                        <label for="password" class="form-label">Contrasenya</label>
                        <input type="password" class="form-control" id="password">
                        <div id="errorPassword" class="form-text text-danger"></div>
                      </div>
                      
                      <a href="./index.php" class="btn btn-cancelar float-start">Cancelar</a>
                      <button type="submit" class="btn btn-iniciar float-end" onclick="registre()">Enviar</button>
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