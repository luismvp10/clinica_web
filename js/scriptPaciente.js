// JavaScript Document

/* Agregat Paciente */
function agregarPaciente(){
	/* Obtenemos la informacion */
	var curp_p = $("#curp_p").val();
	var nombre_p = $("#nombre_p").val();
	var apPaterno_p = $("#apPaterno").val();
	var apMaterno_p = $("#apMaterno_p").val();
	var datepicker = $("#datepicker").val();
	var genero_p = $("#genero_p").val();
	var tel_p = $("#tel_p").val();
	var email_p = $("#email_p").val();
	var password_p = $("#password_p").val();
	
	/*Agregamos el registro*/
	$.post("../ajax/agregarPaciente.php", {
		curp_p : curp_p,
		nombre_p : nombre_p,
		apPaterno_p : apPaterno_p,
		apMaterno_p : apMaterno_p,
		datepicker : datepicker, 
		genero_p : genero_p,
		tel_p : tel_p,
		email_p : email_p,
		password_p : password_p
	}, function(data, status){
		/*cerrar el popup*/
		$("#add_new_record_modal").modal("hide");
		/* lee los registros otra vez*/
		leerPacientes();
		/*Limpiar el formulario*/
		$("#curp_p").val("");
		$("#nombre_p").val("");
		$("#apPaterno").val("");
		$("#apMaterno_p").val("");
		$("#datepicker").val("");
		$("#genero_p").val("");
		$("#tel_p").val("");
		$("#email_p").val("");
		$("#password_p").val("");
	});
}

/*Leer los pacientes*/
function leerPacientes(){
	$.get("../ajax/leerPaciente.php", {} , function(data, status){
		$(".records_content").html(data);
	});
}

$(document).ready(function() {
    leerPacientes();
});