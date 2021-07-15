<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<Body bgcolor=orange>
<h1>TABLA DE MCM</H1>
	<HR>
<?php
$m = $_POST['A'];
$n = $_POST['B'];

function mcm($m,$n) {
	 if ($m == 0 || $n == 0) return 0;
	 
	    $r = ($m * $n) / gcd($m, $n);
	    return abs($r);
	}

	function gcd($a, $b) {
	    while ($b != 0) {
	        $t = $b;
	        $b = $a % $b;
	        $a = $t;
	    }
	    return $a;
	}
echo "el MCM de $m y $n es: ";
echo mcm ($m,$n);
?>
<HR>
<br><br><a href="frm_MCM_AB.php">REGRESAR</a>
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
