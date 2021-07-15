<htm>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body bgcolor=#cccccc>
<h1>SUMA DE TRES NÚMEROS "A","B" Y "C"</H1>
<HR>
<?php
	$operando1 = $_POST['A'];
	$operando2 = $_POST['B'];
	$operador3 = $_POST['C'];
	
	
		$solucion = $operando1 + $operando2 + $operador3;
	
	echo "<h4>La Suma de $operando1 + $operando2 + $operador3 es: ".$solucion."</h4>";
?>
<hr><br><a href="frm_suma_ABC.php">SUMAR OTROS NUMEROS</a>
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