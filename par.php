<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
</head>
<body bgcolor=#00ffff>
<h1>NUMERO PAR</h1>
<HR>

<?PHP
$n = $_POST['A'];
$residuo=$n%2;
	if($residuo==0)
	{
	echo "<h3>El n&uacute;mero $n es PAR</h3>";
	}
	else
	{
	echo "<h3>El n&uacute;mero $n no es PAR</h3>";
	}

?>
<hr><br><a href="frm_par.php">DETERMINAR OTROS NUMEROS</a>
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