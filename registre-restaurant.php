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
    
    <script src="./js/registre-restaurant.js"></script>
    
    <title>EAT IT Registre</title>
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
        <h1 class="sr-only">Registre</h1>
        <p class="sr-only">Pagina de eat it para registrar un restaurante</p>
        <!-- Inici container -->
        <div class="container">
              
              <!-- Inici carta -->
              <div class="carta row justify-content-center align-items-center vh-100">

                <!-- Inici sub-carta -->
                <div class="sub-carta col-12 col-lg-6 py-5 mt-5">
                    <h2>Registre Restaurant</h2>
                    <p class="sr-only">Registre</p>
                    <form action="" onsubmit="return false;">
                      <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom">
                        <div id="errorNom" class="form-text text-danger"></div>
                      </div>

                      <div class="mb-3">
                        <label for="desc" class="form-label">Descripció</label>
                        <textarea class="form-control" rows="3" id="desc"></textarea>
                        <div id="errorDesc" class="form-text text-danger"></div>
                      </div>
                      
                      <div class="mb-3">
                        <label for="tipus" class="form-label">Tipus de menjar</label>
                        <input type="text" class="form-control" id="tipus">
                        <div id="errorTipus" class="form-text text-danger"></div>
                      </div>

                      <div class="mb-3">
                        <label for="minim" class="form-label">Minim per comanda</label>
                        <input type="number" class="form-control" id="minim">
                        <div id="errorMinim" class="form-text text-danger"></div>
                      </div>
                      
                      <div id="output" class="mb-3"></div>
                      <div id="output2" class="mb-3"></div>
                      
                      <div class="mb-3">
                        <label for="direccio" class="form-label">Direcció</label>
                        <input type="text" class="form-control" id="direccio">
                        <div id="errorDireccio" class="form-text text-danger"></div>
                      </div>
                      
<!--
                      <div class="mb-3">
                          <label for="foto" class="form-label">Imatge del restaurant</label>
                          <input class="form-control" type="file" id="foto">
                      </div>
-->
                      
                      <div class="mb-3">
                        <label for="domicili" class="form-label">Servei a domicili</label>
                        <select class="form-select" id="domicili">
                          <option value="1" selected>Si</option>
                          <option value="0">No</option>
                        </select>
                        <div id="errorDomicili" class="form-text text-danger"></div>
                      </div>
                      
                      <a href="./restaurants-propietari.php" class="btn btn-cancelar float-start">Cancelar</a>
                      <button type="submit" class="btn btn-iniciar float-end" onclick="registre_restaurant()">Enviar</button>
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