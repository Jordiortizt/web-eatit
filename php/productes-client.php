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
               <hr><!-- inici autogenerar-->';
               
               
             if(count($productes) < 1){
                $output = $output.'<p>No hi ha productes en aquest restaurant</p>';
             }else{
                 foreach($productes as $key => $value){
                 $output = $output.'<div class="sub-producte">
                   <div class="row">
                       <div class="col-1" id="'.$value->ID.'" onclick="restarProducte(this.id)"><i class="fas fa-minus"></i></div>
                       <div class="col-1"><p id="num'.$value->ID.'">0</p></div>
                       <div class="col-1 fotoProducte" id="foto'.$value->ID.'" style="background: url(\''.$value->URLFoto.'\'); background-size: cover;"></div>
                       <div class="col"><p id="producte'.$value->ID.'">'.$value->Plato.'</p></div>
                       <div class="col-2"><span id="preu'.$value->ID.'">'.$value->Precio.'</span><span>€</span></div>
                       <div class="col-1" id="'.$value->ID.'" onclick="afegirProducte(this.id)"><i class="fas fa-plus"></i></div>
                       </div>
                    </div>
                    <hr>';
                }
             }
                
                
            $output = $output.'<!-- fi autogenerar--></div>
            <div class="producte">
               <h2>Descomptes</h2>
               <p class="sr-only">En aquest apartat es mostren els descomptes del restaurant</p>
               <hr><!-- inici autogenerar-->';

            if(count($descomptes) < 1){
                $output = $output.'<p>No hi ha descomptes en aquest restaurant</p>';
             }else{
                    foreach($descomptes as $key => $value){
                        $output = $output.'<div class="sub-producte">
                                                <div class="row">
                                                    <div class="col-6">'.$value->Codigo.'</div>
                                                    <div class="col-6">'.$value->TotalDescuento.'€</div>
                                                </div>
                                            </div><hr>';
                    }
             }
            $output = $output.'</div></div>';
            
            echo $output;
?>