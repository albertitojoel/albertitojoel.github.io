<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body >
	<br>
<h1>RESULTADO DE LA SUMA DE DOS NUMEROS</H1>
<HR>
<?PHP
$A = $_POST['A'];
$B = $_POST['B'];
	$R=$A+$B;
	echo "<h3>La suma de $A + $B es: $R </h3>";

?>
<hr>
<br><a href="frm_suma.php">SUMAR OTROS NUMEROS</a>
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