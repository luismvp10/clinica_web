<?php
	/*Incluir el archivo de conexion de la bd*/
	include("../php/conexion.php");
	
	/*Diseño de la tabla */
	$data = '<table class="table table-hover">

		<tr>
			<th> N&uacute;mero </th>
        	<th> CURP </th>
            <th> Nombre </th>
            <th> Apellido Paterno </th>
            <th> Apellido Materno </th>
            <th> Tel&eacute;fono </th>
            <th> Email </th>            
       </tr>';
	   
	   $conexion = Conectarse();
	   $query = "SELECT * FROM paciente";
	   
	   if(!$result = mysqli_query($conexion, $query)){
		   exit(mysqli_error($conexion));
	   }
	   
	   /*si query resulta que contiene filas entonces los muestra */
	   if(mysqli_num_rows($result) > 0)
	   {
		   $number = 1;
		   while($row = mysqli_fetch_assoc($result))
		   {
			   $data .= '<tr class="text-center">
    	<td>' .$number.'</td>
        <td>' .$row['curp']. '</td>
        <td>' .$row['nombre']. '</td>
        <td>' .$row['apPaterno']. '</td>
        <td>' .$row['apMaterno']. '</td>
        <td>' .$row['tel']. '</td>
		<td>' .$row['email']. '</td>
		  <td>
                    <button onclick="GetUserDetails('.$row['curp'].')" class="btn btn-warning">Update</button>
                </td>
                <td>
                    <button onclick="DeleteUser('.$row['curp'].')" class="btn btn-danger">Delete</button>
                </td>   
    </tr>';
				$number++;
		   }
	   }
	   else{
		   /*encontrados*/
		   $data .= '<tr><td colspan="6">Records not found!</td></tr>';
	   }
	   
	   $data .= '</table>';
	   
	   echo $data;
	   
?>	  
		   