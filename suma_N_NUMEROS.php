<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body bgcolor=#cccccc>
<h1>SUMA DE "N" ES NÚMEROS DE LA SERIE 1, 2, 3, 4, ..., N</H1>
<HR>
<?php
 
$n = $_POST['A'];

$s = ($n* ($n+1))/2;

echo "La suma dels n&uacute;mero es: $s <br />"; 
?>
<hr>
<br><br><a href="frm_suma_N_NUMEROS.php">SUMAR OTROS NUMEROS</a>
<br><br><a href="index.php">IR AL INICIO</a>
<div class="fixed" >
			<strong>INTEGRANTES:</strong>
			<HR>
			<p>CHURACUTIPA TICONA JOEL ALBERTH
			<br>TICONA CHURA JHONI YUBER
			<br>TICONA SALAMANCA NELSON ANGEL</p>
		</div>
</body>
</html>