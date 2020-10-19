<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php
$num="168";
echo 'El numero en decimal es: '.$num."<br/>";
function binario($num)
{
	
	while ($num > 0)
	{
		$resultado=$num/2; 
		$resto=$num%2; 
		$resultadoRestos[]=$resto; 
		$num=intval($resultado); 
	}
	krsort($resultadoRestos); 
	foreach ($resultadoRestos as $clave => $valor) 
	{ 
		echo $valor; 
	} 
}

echo ' y en binario es: ';
$binarios=binario($num);
?>

</BODY>
</HTML>