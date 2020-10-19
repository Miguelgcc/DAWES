<HTML>
<HEAD> <TITLE> Calculadora </TITLE> </HEAD>

<BODY>
<?php



$impares = array (
  array("indice","binario","octal"),
  array(0,0,0),
  array(1,1,1),
  array(2,10,2),
  array(3,11,3),
  array(4,100,4),
  array(5,101,5),
  array(6,110,6),
  array(7,111,7),
  array(8,1000,10),
  array(9,1001,11),
  array(10,1010,12),
  array(11,1011,13),
  array(12,1100,14),
  array(13,1101,15),
  array(14,1110,16),
  array(15,1111,17),
  array(16,10000,20),
  array(17,10001,21),
  array(18,10010,22),
  array(19,10011,23),
  
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