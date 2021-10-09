<?php

$conexion = new mysqli("localhost", "id17405495_2222", "C&p1N>2GqbTq>8l0","id17405495_1111"); /*SE VERIFICAN LOS DATOS*/
    if($conexion){
        echo "la gestion fue exitosa !!";
        /* header("Location: index.php); */
    }else{
        echo "Fallo la gestion";
    }
?>