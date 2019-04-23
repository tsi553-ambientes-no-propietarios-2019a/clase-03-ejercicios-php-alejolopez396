<?php

/**

*Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

*Ejemplos:
*Murciélago
*aceituno
*acuífero
*http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */

?>
<!DOCTYPE>
<html>
<head>
</head>
<body>
    <?php
    function comprobarVocales($palabra){
        echo"<h1 style=\"text-align:center\">";
        echo $palabra;
        echo"</h1>";
        $vocales=0;
        $palabra = strtolower($palabra);
        $longitud = strlen($palabra);
    
        for($i=0;$i<$longitud;$i++){
            if(in_array($palabra[$i],["a", "e", "i", "o", "u"])){
                $vocales++;
            }
        }
        return $vocales;
    }
    $palabra="murcielago";
    $numVocales = comprobarVocales($palabra);
    echo "La palabra '$palabra' tiene $numVocales vocales ";
   
    ?>
</body>
</html>