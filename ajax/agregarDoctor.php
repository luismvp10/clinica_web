<?php
    

        // include Database connection file 
        include("../php/conexion.php");
        $conexion=Conectarse();
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
 

// create string of queries separated by ;
$query  = "INSERT INTO doctor(curp, cedula, nombre,apPaterno,apMaterno,tel,email,password,especialidad_idespecialidad) VALUES('$curp', '$cedula', '$nombre','$apPaterno','$apMaterno','$tel','$email','$password','$especialidad_idespecialidad');";
        
$query .= "INSERT INTO usuarios (curp, nombre, apPaterno, password, tipo) VALUES ('$curp', '$nombre', '$apPaterno', '$password', 'medico');";

// execute query - $result is false if the first query failed
$result = mysqli_multi_query($conexion, $query);

if ($result) {
    do {
        // grab the result of the next query
        if (($result = mysqli_store_result($conexion)) === false && mysqli_error($conexion) != '') {
            echo "La consulta ha fallado: " . mysqli_error($mysqli);
        }
    } while (mysqli_more_results($conexion) && mysqli_next_result($conexion)); // while there are more results
} else {
    echo "La primer consulta ha fallado..." . mysqli_error($mysqli);
}
      
        echo "1 fila afectada";
        
    
?>