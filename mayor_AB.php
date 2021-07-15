<htm>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>
	<br>
<h1>MAYOR DE DOS NÚMEROS "A" Y "B"</H1>
<HR>
<?PHP
        $nnn1 = $_POST['A'];
        $nnn2 = $_POST['B'];
           
            if($nnn1 > $nnn2){
                echo "<h4>El numero mayor de $nnn1 y $nnn2 es : $nnn1 </h4><br>";
            }else if($nnn1 == $nnn2){
                echo "<h4>Los dos Numeros Son Iguales !!! <h4><br>";
            }else{
                echo "<h4>El numero mayor de $nnn2 y $nnn1 es : $nnn2 </h4>";
            }
?>
<hr><br>
<a href="frm_mayor_AB.php">	REGRESAR</a>
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