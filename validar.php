<?php 
$email = $_POST['usuario'];
$clave = $_POST['clave'];

$conexion = mysqli_connect("localhost","root","","cotizador");
$consulta = "SELECT * FROM usuario WHERE correo = '$email' and password = '$clave'";
$resultado = mysql_query($conexion,$consulta);

$filas = mysql_num_rows($resultado);//si hay resultados devuelve 1(xq encontrara solo un resultado), sino 0.
if ($filas==1) {
	header("location:index.html");
}else{
	echo "error en la autentificación";
}

mysql_free_result($resultado);
mysqli_close($conexion);

 ?>