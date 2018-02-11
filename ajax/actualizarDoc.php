<?php
// include Database connection file

 include("../php/conexion.php");
    $conexion=Conectarse();
 
// check request
if(isset($_POST))
{
    // get values
    $curp = $_POST['curp'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apPaterno'];
    $apMaterno = $_POST['apMaterno'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $especialidad_idespecialidad = $_POST['especialidad_idespecialidad'];
    // Updaste User details
    $query = "UPDATE doctor SET curp = '$curp', cedula = '$cedula', nombre = '$nombre',apPaterno='$apPaterno', apMaterno='$apMaterno',tel='$tel',email='$email',password='$password',especialidad_idespecialidad='$especialidad_idespecialidad' WHERE curp = '$curp'";


$query .= "UPDATE usuarios SET curp='$curp',nombre='$nombre',apPaterno='apPaterno',password='$password'
		WHERE curp='$curp'";


    if (!$result = mysqli_multi_query($conexion, $query)) {
        exit(mysqli_error($con));
    }
}

