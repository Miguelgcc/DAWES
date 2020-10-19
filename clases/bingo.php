<HTML>
<HEAD> <TITLE> Arrays Multidimensionales </TITLE> </HEAD>

<BODY>
<?php
// Array 2 dimensiones -> array de arrays
// Tabla calificaciones de alumnos en programación
// 
// Nombre	PHP		Java
// ======================
// Juan		9		3
// Pedro	7		8
// Ana		10 		9
// Marta	3		5

$numeros = array ("fila1", array(3,21,30,52), 
"fila2", array(7,13,25,41,57,60),
"fila3", array(18,29,32,44,58));





 
  // Mostrar longitud del array
 $numdatos=count($numeros);


 

 // Mostrar todas las numeros
for ($fila = 0; $fila < $numdatos; $fila++) {
  echo "<p><b>Fila $fila</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo $numeros[$fila][$col];
  }
  echo "</ul>";
}



?>
</BODY>
</HTML>