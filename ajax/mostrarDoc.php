<?php
    include("../php/conexion.php");
    $conexion=Conectarse();
    
    $query = "SELECT doctor.curp,doctor.cedula,doctor.nombre,doctor.apPaterno,doctor.apMaterno,doctor.tel,doctor.email,doctor.password,especialidad.nombre AS name 
FROM doctor
INNER JOIN especialidad
ON doctor.especialidad_idespecialidad=especialidad.idespecialidad";
    $res = mysqli_query($conexion, $query);
    
    $filasDoc = "";
    $etiqsX = array();
    $valsY = array();
    $i = 0;
    
    while($filas = mysqli_fetch_array($res, MYSQLI_BOTH)){
        $filasDoc .= "<tr>";
        $filasDoc .= "<td class='text-center'>$filas[0]</td>
        <td class='text-center'>$filas[1]</td>
        <td class='text-center'>$filas[2]</td>
        <td class='text-center'>$filas[3]</td>
        <td class='text-center'>$filas[4]</td>
        <td class='text-center'>$filas[5]</td>
        <td class='text-center'>$filas[6]</td>
        <td class='text-center'>$filas[7]</td>
        <td class='text-center'>$filas[8]</td>";

        $filasDoc .= "<td class='text-center'>
        <button  class='btn btn-warning upd' data-curp='$filas[0]' onClick='datosToModal()'>Modificar</button>  &nbsp;&nbsp;
        <button  class='btn btn-danger del' data-curp='$filas[0]' onClick='deleteDoc()'>Eliminar</button>
        
            
            
        </td>";
        $filasDoc .= "</tr>";
        $etiqsX[$i] = $filas[0];
        $valsY[$i] = $filas[2];
        $i++;
    }
?>