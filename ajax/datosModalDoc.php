<?php
	include("../php/conexion.php");
	include("../php/posts.php");
	$conexion=Conectarse();

	$query = "SELECT doctor.curp,doctor.cedula,doctor.nombre,doctor.apPaterno,doctor.apMaterno,doctor.tel,doctor.email,doctor.password,especialidad.nombre AS name 
FROM doctor
INNER JOIN especialidad
ON doctor.especialidad_idespecialidad=especialidad.idespecialidad WHERE doctor.curp = '$curp'";";

	$res = mysqli_query($conexion, $query);
	$doc = mysqli_fetch_assoc($res);
	echo json_encode($doc);
?>