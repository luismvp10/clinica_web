<?php
if(!empty($_POST)){
	$conexion=(mysqli_connect("localhost","root",""));
    mysqli_select_db($conexion,'hospital') or die ("no se encuentra la bd");	
	foreach($_POST as $field_name=>$val){
//		echo $field_name; //codigo del horario
//		echo $val; // nombre del paciente		
				if(!empty($field_name)&&!empty($val)){					 
					mysqli_query($conexion,"UPDATE horarios set paciente='' where paciente='$val'");
					mysqli_query($conexion,"UPDATE datosusuario set cita='$field_name' where idusuario='$val'");
					mysqli_query($conexion,"UPDATE horarios set paciente='$val' where id='$field_name'");
					echo"usuario movido exitosamente";
				}else{
					echo"no se pudo actualizar";
				}
	}
}
?>