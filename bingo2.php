<HTML>
<HEAD> <TITLE> Arrays Multidimensionales </TITLE> </HEAD>

<BODY>
<?php
$jugador1="juan";
$jugador2="maria";
$jugador3="lucia";
$jugador4="pablo";

echo "cartones de ".$jugador1."<br>";
 $count=1;
 
do
{
echo "carton numero ".$count."<br>";

$carton = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
for ($i=1;$i<16;$i++) {
  $n = rand(1,60);
  
    $carton=$n." ";
  print_r($carton);
}
echo "<br>";
$count++;
}while($count<4);
echo "<br>";
echo "cartones de ".$jugador2."<br>";

do
{
echo "carton numero ".$count."<br>";

$carton = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
for ($i=1;$i<16;$i++) {
  $n = rand(1,60);
  
    $carton=$n." ";
  print_r($carton);
}
echo "<br>";
$count++;
}while($count<7);

echo "<br>";
echo "cartones de ".$jugador3."<br>";
do
{
echo "carton numero ".$count."<br>";

$carton = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
for ($i=1;$i<16;$i++) {
  $n = rand(1,60);
  
    $carton=$n." ";
  print_r($carton);
}
echo "<br>";
$count++;
}while($count<10);

echo "<br>";
echo "cartones de ".$jugador4."<br>";

do
{
echo "carton numero ".$count."<br>";

$carton = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
for ($i=1;$i<16;$i++) {
  $n = rand(1,60);
  
    $carton=$n." ";
  print_r($carton);
}
echo "<br>";
$count++;
}while($count<13);
?>

</BODY>
</HTML>