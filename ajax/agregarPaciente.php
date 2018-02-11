<?php
	if(isset($_POST['curp_p']) &&
	   isset($_POST['nombre_p']) &&
	   isset($_POST['apPaterno_p']) &&
	   isset($_POST['apMaterno_p']) &&
	   isset($_POST['datepicker']) &&
	   isset($_POST['genero_p']) &&
	   isset($_POST['tel_p']) &&
	   isset($_POST['email_p']) &&
	   isset($_POST['password_p']))
	{
		// Incluir la conexion a la base de datos
		include("../php/conexion.php");	
		
		//obtener los valores
		$curp_p = $_POST['curp_p'];
		$nombre_p = $_POST['nombre_p'];
		$apPaterno_p = $_POST['apPaterno_p'];
		$apMaterno_p = $_POST['apMaterno_p'];
		$fechaNacimiento_p = $_POST['datepicker'];
		$genero_p = $_POST['genero_p'];
		$tel_p = $_POST['tel_p'];
		$email_p = $_POST['email_p'];
		$password_p = $_POST['password_p'];
		
		echo $fechaNacimiento_p;
		
		$conexion = Conectarse();
		$query = "INSERT INTO paciente(curp, nombre, apPaterno, apMaterno, fechaNacimineto, genero, tel, email, password) VALUES ('$curp_p', '$nombre_p', '$apPaterno_p', '$apMaterno_p', '$datepicker', '$genero_p', '$tel_p', '$email_p', '$password_p')";
		if(!$result = mysqli_query($conexion, $query)){
			exit(mysqli_error($conexion));
		}
		echo "1 paciente Agregado !";
	}else{
		echo "No se pudo agregar !";
	}
?>