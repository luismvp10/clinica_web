<?php
if(!empty($_POST)){
	$enlace=mysqli_connect('localhost','root','');
	if (!$enlace){
		die('no se pudo conectar: '.mysqli_error());
	}
	mysqli_select_db($enlace,'hospital');
	foreach($_POST as $field_name=>$val){
		$field_id=strip_tags(trim($field_name));
		if(!empty($field_id)){
			mysqli_query($enlace,"DELETE FROM usuarios where nombre='$field_id'") or mysqli_error();
			echo"true";
		}else{
			echo"false";
		}
	}
}
?>