<HTML>
<HEAD> <TITLE> Calculadora </TITLE> </HEAD>

<BODY>
<?php



$impares = array (
  array("indice","valor","suma"),
  array(0,1,1),
  array(1,3,4),
  array(2,5,9),
  array(3,7,16),
  array(4,9,25),
  array(5,11,36),
  array(6,13,49),
  array(7,15,64),
  array(8,17,81),
  array(9,19,100),
  array(10,21,121),
  array(11,23,144),
  array(12,25,169),
  array(13,27,196),
  array(14,29,225),
  array(15,31,256),
  array(16,33,289),
  array(17,35,324),
  array(18,37,361),
  array(19,39,400),
  
);

for ($x = 0; $x < 21; $x++) {
   echo "<ul>";
  for ($y = 0; $y < 3; $y++) {
    echo "	".$impares[$x][$y];
  }
 echo "</ul>";
}

?>
</BODY>
</HTML>