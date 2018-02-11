<?php
  
    // include Database connection file 
    include("../php/conexion.php");
    $conexion=Conectarse();
    // Design initial table header 
    $data = '<table class="table table table-hover ">
                        <tr>
                            <th class="text-center">CURP</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Apellido Paterno</th>
                            <th class="text-center">Password</th>
                            <th colspan="2" class="text-center">Opciones</th>
                        </tr>';
 
    $query = "SELECT curp, nombre, apPaterno, password FROM usuarios WHERE tipo='administrador'";
           


    if (!$result = mysqli_query($conexion, $query)) {
        exit(mysqli_error($conexion));
    }
 
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
       $number = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
                <td class="text-center">'.$row['curp'].'</td>
                <td class="text-center">'.$row['nombre'].'</td>
                <td class="text-center">'.$row['apPaterno'].'</td>
                <td class="text-center">'.$row['password'].'</td>
                <td class="text-center"><button onclick="upadteAdmin('.$row['curp'].');" class="btn btn-warning">Modificar</button></td>
                  <td>  <button onclick="deleteAdmin('.$row['curp'].')" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>';
            $number++;
        }
    }
    else
    {
        // records now found 
        $data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }
 
    $data .= '</table>';
 
    echo $data;
?>