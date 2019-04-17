<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/

function mostrartitulo($texto){
  echo "<h1 style= \"text-align:center\">";
  echo $texto;
  echo "</h1>";
}

?>

<!DOCTYPE html>
<html>
  <head>
   
  </head>
  <body>
<?php
    mostrartitulo("Primer titulo");
    echo "<br>";
    mostrartitulo("Segundo titulo");
?>
 
  </body>
</html>
