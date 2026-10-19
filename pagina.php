<?php
    echo "<H1> USO DE SWITCH </H1>";
    $fruta="piña";
    echo "<h2>VERSION 2 </h2>";
    echo "<h2>VERSION 3 </h2>";
    echo "<h2>VERSION 4 </h2>";
    
    switch( $fruta ){
        case "Manzana":
            echo "eres una Manzana";
            break;
        case "Fresa":
            echo "eres una Fresa";
            break;
        case "Naranja":
            echo "eres una Naranja";
            break;
        case "Lima":
            echo "eres una Lima";
            break;
        default:
            echo "No eres ninguna de estas frutas";
    }


    // USO DE MATCH
    echo "<H1> USO DE MATCH </H1>";
    $a=7;

    $x=10;
    $y=20;
    $z=30;
    $resultado=match ($a) {
         $x=> "Valor igual a X",
         $y=> "Valor igual a Y",
         $z=> "Valor igual a Z",
         default => "No coindide ninguno"
    };
    echo "RESULTADO: " . $resultado;
?>