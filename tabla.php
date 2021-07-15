<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<Body bgcolor=orange>
<h1>TABLA DE MULTIPLICACION</H1>
<hr>
<?PHP
$tb = $_POST['tb'];
$n = $_POST['n'];
  echo " <b>TABLA DE MULTIPLICACION DE $tb </b> <br>";
  for($j=1;$j<=$n;$j++)
      {
       $r=$tb*$j;
       echo "<br> $tb x $j = $r";

      }

?>
<hr><a href="frm_tabla.php">CLICK PARA VER OTRAS TABLAS</a>
<br><a href="index.php">IR AL INICIO</a>
<div class="fixed" >
			<strong>INTEGRANTES:</strong>
			<HR>
			<p>CHURACUTIPA TICONA JOEL ALBERTH
			<br>TICONA CHURA JHONI YUBER
			<br>NELSON ANGEL TICONA SALAMANCA</p>
		</div>

</body>
</html>
