<?php
if(!empty($_POST)){
	$conexion=(mysqli_connect("localhost","root",""));
    mysqli_select_db($conexion,'hospital') or die ("no se encuentra la bd");	
	$nombreusuario=$_POST['nombreusuario'];
	$cedula=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido']; 
	$sangre=$_POST['sangre'];
	$direccion=$_POST['direccion'];
	$correo=$_POST['correo'];
	$telefono=$_POST['correo'];
	$fecha=$_POST['fecha'];
	$sexo=$_POST['sexo'];
	$regimensubsidiario=$_POST['regimensubsidiario'];
	$password=$_POST['password'];	
	$tipo='usuario';
	$consultarcedula="SELECT * FROM datosusuario where cedula='$cedula'";
	$resultadocedula=mysqli_query($conexion,$consultarcedula);
	$busquedacedula=mysqli_fetch_array($resultadocedula);
//	echo $busquedacedula;
	$consultarusuario="SELECT * FROM usuarios where nombre='$nombreusuario'";
	$resultadousuario=mysqli_query($conexion,$consultarusuario);	
	$busquedausuario=mysqli_fetch_array($resultadousuario);
//	echo $busquedausuario;	
	if(empty($busquedacedula)&&empty($busquedausuario)){		
		$insertar="INSERT INTO usuarios (nombre, password, tipo) VALUES ('$nombreusuario', '$password', '$tipo')";
        mysqli_query($conexion,$insertar) or die ("NO se pudo insertar usuario");
		$insertar="INSERT INTO datosusuario (idusuario, cedula, nombre, apellido, sangre, direccion, correo, telefono, fecha, sexo, regimensubsidiario, cita) VALUES ('$nombreusuario', '$cedula', '$nombre', '$apellido', '$sangre', '$direccion', '$correo', '$telefono','$fecha', '$sexo', '$regimensubsidiario', 0)";
        mysqli_query($conexion,$insertar) or die ("NO se pudo insertar datos personales");
        mysqli_close($conexion);
			echo"true";
		}else{
		    if (!empty($busquedacedula)){
				echo "la cedula ya esta registrada";
			}
		    if (!empty($busquedausuario)){
				echo "el nombre de usuario ya existe";
			}	
		}
}
?>