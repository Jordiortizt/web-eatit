<?php
    require_once("./functions.php");

    $restaurant = checkRestaurant();

    // $tipo = $_POST["tipo"];

    $params = "?id=".intval($restaurant->ID);

    $productes = peticionGet('platos',$params)->platos;

    $params = "?Restaurante=".intval($restaurant->ID);

    $descomptes = peticionGet('descuentos',$params)->descuentos;

    $dom = '';
    $ico = '';
    if(intval($restaurant->ServicioDomicilio) == 1){
        $dom = 'A domicili i a recollir';
        $ico = 'fa-motorcycle';
    }else{
        $dom = 'A recollir';
        $ico = 'fa-store';
    }

        $output = '<div class="foto container" style="background: url(\''.$restaurant->URLFoto.'\');"></div>
           
        <div class="container sub-productes" id="mostrarProductes">
            
            <h1>'.$restaurant->Nombre.'</h1>
            <p class="sr-only">Productes del restaurant</p>
            
            <div class="row icones">
               <div class="col"> <i class="fas fa-utensils"></i> <br><span style="color:black">'.$restaurant->TipoDeComida.'</span></div>
                <div class="col"> <i class="fas '.$ico.'"></i> <br><span style="color:black">'.$dom.'</span></div>
               <div class="col"> <i class="fas fa-money-bill"></i> <br><span style="color:black">'.$restaurant->Minimo.'€</span></div>
            </div>
            
            
            <div class="descripcio">
                <p>'.$restaurant->Descripcion.'</p>
            </div>
            
            <div class="producte">
               <h2>Menu</h2>
               <p class="sr-only">En aquest apartat es mostren el menu del restaurant</p>
               <!-- inici autogenerar-->';
               
               
             if(count($productes) < 1){
                $output = $output.'<p>No hi ha productes en aquest restaurant</p>';
             }else{
                 $output = $output.'<div class="table-responsive"><table class="table table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">Imatge</th>
                                  <th scope="col">Nom</th>
                                  <th scope="col">Preu</th>
                                  <th scope="col">Descripció</th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>';
                              foreach($productes as $key => $value){
                                    $output = $output.'<tr>
                                      <td><img src="'.$value->URLFoto.'" class="fotoProducte"></td>
                                      <td>'.$value->Plato.'</td>
                                      <td>'.$value->Precio.'€</td>
                                      <td>'.$value->Descripcion.'</td>
                                      <td><button class="btn btn-info mb-1" onclick="modificarProducte('.$value->ID.')">Modificar</button></td>
                                      <td><button class="btn btn-danger" onclick="eliminarProducte('.$value->ID.')">Eliminar</button></td>
                                    </tr>';
                              }
                                
                              $output = $output.'</tbody>
                            </table>';
             }
                
            $output = $output.'<!-- fi autogenerar--></div>
            <a class="btn btn-primary d-block mx-auto" href="./registre-producte.php">Crear Producte</a>
            <div class="producte">
               <h2>Descomptes</h2>
               <p class="sr-only">En aquest apartat es mostren els descomptes del restaurant</p>
               <!-- inici autogenerar-->';

            if(count($descomptes) < 1){
                $output = $output.'<p>No hi ha descomptes en aquest restaurant</p>';
             }else{
                 $output = $output.'<div class="table-responsive"><table class="table table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">Codi de Descompte</th>
                                  <th scope="col">Preu</th>
                                  <th></th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>';
                              foreach($descomptes as $key => $value){
                                    $output = $output.'<tr>
                                      <td>'.$value->Codigo.'</td>
                                      <td>'.$value->TotalDescuento.'€</td>
                                      <td><button class="btn btn-info" onclick="modificarDescompte('.$value->ID.')">Modificar</button></td>
                                      <td><button class="btn btn-danger" onclick="eliminarDescompte('.$value->ID.')">Eliminar</button></td>
                                    </tr>';
                              }
                                
                              $output = $output.'</tbody>
                            </table></div>
                            <a class="btn btn-primary d-block mx-auto" href="./registre-descompte.php">Crear Descompte</a>';
             }
            $output = $output.'</div></div>';
            
            echo $output;
?>