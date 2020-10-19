<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$dni=756842148;"<br/>";
$a=23; "<br/>"; 
$valor=0; "<br/>";
echo"El numero del DNI es " .$dni. "<br/>";
$valor= (int)$dni%$a;
switch ($valor) {      
	case 0:	print "la letra del DNI es T "; break;
	case 1: print "la letra del DNI es R "; break;
	case 2: print "la letra del DNI es W "; break; 
	case 3: print "la letra del DNI es A "; break;
	case 4: print "la letra del DNI es G "; break;
	case 5: print "la letra del DNI es M "; break;
	case 6: print "la letra del DNI es Y "; break;
	case 7: print "la letra del DNI es F "; break;
	case 8: print "la letra del DNI es P "; break;
	case 9: print "la letra del DNI es D "; break;
	case 10: print "la letra del DNI es X "; break;
	case 11: print "la letra del DNI es B "; break;
	case 12: print "la letra del DNI es N "; break;
	case 13: print "la letra del DNI es J "; break;
	case 14: print "la letra del DNI es Z "; break;
	case 15: print "la letra del DNI es S "; break;
	case 16: print "la letra del DNI es Q "; break;
	case 17: print "la letra del DNI es V "; break;
	case 18: print "la letra del DNI es H "; break;
	case 29: print "la letra del DNI es L "; break;
	case 20: print "la letra del DNI es C "; break;
	case 21: print "la letra del DNI es K "; break;
	case 22: print "la letra del DNI es E "; break;
	case 23: print "la letra del DNI es O "; break;
}

?>
</BODY>
</HTML>