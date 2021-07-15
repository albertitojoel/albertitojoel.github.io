<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body >
<br>
<h1>FORMULARIO SI EL NUMERO ES PRIMO</h1>
<hr>
<?php 
$np = $_POST['A'];

if(primo($np)){
echo " El Numero $np Es Primo";
}
else {
	echo " El Numero $np No Es Primo";
}
function primo($num){
	if($num == 1 || $num == 2 || $num == 3 || $num == 5 || $num == 7){
		return true;
	}
	if($num >= 8 ){
			if ($num%2==0 || $num%3==0 || $num%5==0) {
			return false;
			}
		}
	if($num >= 8 ){
			if ($num%2>=1 || $num%3>=1 || $num%5>=1) {
			return true;
			}
		}
} 

?>
<hr>
<br><a href="frm_primo.php">DETERMINAR OTROS NUMEROS</a>
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