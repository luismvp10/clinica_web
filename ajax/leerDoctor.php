<?php
    include("../php/conexion.php");
    $conexion=Conectarse();
    
    $sql = "SELECT curp, nombre, apPaterno, password FROM usuarios WHERE tipo='administrador'";
    $res = mysqli_query($conexion, $sql);
    
    $filasAdmin = "";
    $etiqsX = array();
    $valsY = array();
    $i = 0;
    
    while($filas = mysqli_fetch_array($res, MYSQLI_BOTH)){
        $filasAdmin .= "<tr>";
        $filasAdmin .= "<td class='text-center'>$filas[0]</td>
        <td class='text-center'>$filas[1]</td>
        <td class='text-center'>$filas[2]</td>
        <td class='text-center'>$filas[3]</td>";
        $filasAdmin .= "<td class='text-center'>
        <button  class='btn btn-warning upd' data-curp='$filas[0]' onClick='datosToModal()'>Modificar</button>  &nbsp;&nbsp;
        <button  class='btn btn-danger del' data-curp='$filas[0]' onClick='deleteAdmin()'>Eliminar</button>
        
            
            
        </td>";
        $filasAdmin .= "</tr>";
        $etiqsX[$i] = $filas[0];
        $valsY[$i] = $filas[2];
        $i++;
    }
?>