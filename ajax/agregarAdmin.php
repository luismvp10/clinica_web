<?php
  
        include("../php/conexion.php");
        $conexion=Conectarse();
        // get values 
        $curp = $_POST['curp'];
        $nombre = $_POST['nombre'];
        $apPaterno = $_POST['apPaterno'];
        $password = $_POST['password'];
        $tipo="administrador";
 
            $query = "INSERT INTO usuarios (curp, nombre, apPaterno, password, tipo) VALUES('$curp',  '$nombre','$apPaterno','$password','$tipo')";
        
        
        if (!$result = mysqli_query($conexion, $query)) {
            exit(mysqli_error($conexion));
			echo 0;
        }else{

        echo 1;
        
		}

?>