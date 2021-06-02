<?php
    require_once("./functions.php");

    $usuari = checkUsuari();

    // $tipo = $_POST["tipo"];


    $params = "?idU=".intval($usuari->id);
    $pedidos = peticionGet('pedidos',$params)->pedidos;
    
    $output = '<div class="container sub-productes" id="mostrarProductes">
                    <h1>Comandes</h1>
                    <p class="sr-only">Productes del restaurant</p>
                <div class="producte">';

    if(count($pedidos) < 1){
                $output = $output.'<p>No has fet camp comanda</p>';
    }else{
            $output = $output.'<table class="table table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">Restaurant</th>
                                  <th scope="col">Descompte</th>
                                  <th scope="col">Estat</th>
                                  <th scope="col">Total</th>
                                </tr>
                              </thead>
                              <tbody>';
        foreach($pedidos as $key => $value){
            $params = intval($value->IDRestaurante);
            $ristorante = peticionGet('restaurantes',$params)->restaurantes;
            
            $output = $output.'<tr><td>'.$ristorante[0]->Nombre.'</td>';
            
            $params = intval($value->IDDescuento);
            $descuento = peticionGet('descuentos',$params)->descuentos;
            
            $output = $output.'<td>'.$descuento[0]->Codigo.'</td>
                                      <td>';
            if(intval($value->Estado) == 1){
                $output = $output.'<span class="text-primary">En procès</span>';
            }else if(intval($value->Estado) == 2){
                $output = $output.'<span class="text-success">LLesta</span>';
            }else{
                $output = $output.'<span class="text-danger">Tancada</span>';
            }
            $output = $output.'</td>
                                      <td>'.$value->TotalPedido.'€</td>
                                    </tr>';
        }
    }
    $output = $output.'</div></div>';
    echo $output;
?>