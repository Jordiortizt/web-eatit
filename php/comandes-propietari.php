<?php
    require_once("./functions.php");

    $usuari = checkUsuari();

    // $tipo = $_POST["tipo"];


    $params = "?Propietario=".intval($usuari->id);
    $restaurantes = peticionGet('restaurantes',$params)->restaurantes;

    $output = '<div class="container sub-productes" id="mostrarProductes">
                    <h1>Comandes</h1>
                    <p class="sr-only">Productes del restaurant</p>
                <div class="producte">';

    if(count($restaurantes) < 1){
                $output = $output.'<p>No tens cap restaurant</p>';
    }else{
            $output = $output.'<div class="table-responsive"><table class="table table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">Restaurant</th>
                                  <th scope="col">Descompte</th>
                                  <th scope="col">Estat</th>
                                  <th scope="col">Client</th>
                                  <th scope="col">Comentari</th>
                                  <th scope="col">Total</th>
                                  <th><th>
                                  <th><th>
                                </tr>
                              </thead>
                              <tbody>';
        foreach($restaurantes as $key => $value){
            $params = "?idR=".intval($value->ID);
            $pedidos = peticionGet('pedidos',$params)->pedidos;
            
            foreach($pedidos as $key => $valor){
                $output = $output.'<tr><td>'.$value->Nombre.'</td>';

                $params = intval($valor->IDDescuento);
                $descuento = peticionGet('descuentos',$params)->descuentos;

                $output = $output.'<td>'.$descuento[0]->Codigo.'</td>
                                          <td>';
                if(intval($valor->Estado) == 1){
                    $output = $output.'<span class="text-primary">En procès</span>';
                }else if(intval($valor->Estado) == 2){
                    $output = $output.'<span class="text-success">LLesta</span>';
                }else{
                    $output = $output.'<span class="text-danger">Tancada</span>';
                }
                
                $params = intval($valor->IDUsuario);
                $useringo = peticionGet('usuarios',$params)->usuarios;
                
                $output = $output.'</td><td>'.$useringo[0]->Nombre.'</td>';
                
                $output = $output.'</td>
                                          <td>'.$valor->Comentario.'</td>
                                          <td>'.$valor->TotalPedido.'€</td>';
                if(intval($valor->Estado) == 1){
                    $output = $output.'<td><button class="btn btn-success" onclick=cambiarEstat('.intval($valor->Estado).','.intval($valor->ID).')>Comanda Llesta</button></td>';
                }else if(intval($valor->Estado) == 2){
                    $output = $output.'<td><button class="btn btn-danger" onclick=cambiarEstat('.intval($valor->Estado).','.intval($valor->ID).')>Comanda Finalitzada</button></td>';
                }
                    $output = $output.'</tr>';
            }
        }
    }
    $output = $output.'</tbody></div></div></div>';
    echo $output;
?>