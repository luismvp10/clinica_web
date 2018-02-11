<?php
	include("../php/conexion.php");
	include("../php/posts.php");
	$conexion=Conectarse();
	$sql = "SELECT curp, nombre, apPaterno, password FROM usuarios WHERE boleta = '$curp'";
	$res = mysqli_query($conexion, $sql);
	$administrador = mysqli_fetch_assoc($res);
	echo json_encode($administrador);
?>