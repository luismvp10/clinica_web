<?php
if(!empty($_POST)){
	$enlace=mysqli_connect('localhost','root','');
	if (!$enlace){
		die('no se pudo conectar: '.mysqli_error());
	}
	mysqli_select_db($enlace,'hospital');	
	foreach($_POST as $field_name=>$val){
		$field_id=strip_tags(trim($field_name));
		$val=strip_tags(trim(mysqli_real_escape_string($enlace,$val)));
		$split_data=explode(':',$field_id);
		$field_name=$split_data[0];
		if(!empty($field_name)&&!empty($val)){			
			mysqli_query($enlace,"UPDATE datosusuario set cita='$field_name' where idusuario='$val'") or mysqli_error();
			mysqli_query($enlace,"UPDATE horarios set paciente='$val' where id='$field_name'") or mysqli_error();
			echo"true";
		}else{
			echo"false";
		}
	}
}
?>