<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<HTML>
<HEAD><TITLE> EJ2B – Conversor Decimal a base n </TITLE></HEAD>
<BODY>
<?php
$num="48";
 $base="8";
 
 echo "El numero en decimal es: ".$num."<br/>";
 echo "lo bamos a pasar a base: ".$base;
 
function octal($num)
{
	
	while ($num > 0)
	{
		$resultado=$num/$base; 
		$resto=$num%$base; 
		$resultadoRestos[]=$resto;
		$num=($resultado); 
	}
	($resultadoRestos); 
	foreach ($resultadoRestos as $clave => $valor) 
	{ 
		echo $valor;
	} 
}

echo " y en binario es: ";
$binarios=binario($num);
?>
</BODY>
</HTML>