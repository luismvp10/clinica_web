<?php


    // include Database connection file
    include("../php/conexion.php");
    $conexion=Conectarse();
 
    // get user id
    $curp = $_REQUEST['curp'];
 
    // delete User
    $query = "DELETE FROM doctor WHERE curp = '$curp'";

    $query .= "DELETE FROM usuarios WHERE curp = '$curp'";


    if (!$result = mysqli_multi_query($conexion, $query)) {
        exit(mysqli_error($conexion));
    }

?>


