<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<Body bgcolor=orange>
<h1>TABLA DE MULTIPLICACION</H1>
<hr>
<?php
$count = $_POST['A'];
$n = $_POST['B'];

if(( $count % $n ) == 0){

	echo $count . " es multiplo de $n";
    
}else{

	echo $count . " no es multiplo de $n";

}

?>
<hr><br><a href="frm_multiplo_de_X.php">CLICK PARA VER OTRAS TABLAS</a>
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
