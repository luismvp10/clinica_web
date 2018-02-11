
function deleteDoc(){

	
	$(".del").on("click",function(){
		var curp = $(this).attr("data-curp");
		$.confirm({
    		title: '',
    		content: "Est&aacute; seguro de eliminar el registro asociado al curp: " +curp+"?",
    		buttons:{
        Si: function(){
			  $.post("../ajax/borrarDoctor.php", {
        curp: curp,    
    });
			
            $.alert('Confirmado!');
			 location.reload();
        },
        No: function(){
				
								location.reload();
						
			
			}
    }
});
	});
	
}




function agregarDoc() {

   // Obtenemos los valores
    var curp = $("#curp").val();
    var cedula = $("#cedula").val();
    var nombre = $("#nombre").val();
    var apPaterno = $("#apPaterno").val();
    var apMaterno = $("#apMaterno").val();
    var tel = $("#tel").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var especialidad_idespecialidad = $("#especialidad_idespecialidad").val();
   
    // agregar
    /*La segunda variable del envio ajax indica el valor que se le manda osea 
    el valor del formulario*/
    $.post("../ajax/agregarDoctor.php", {
        curp: curp,
        cedula: cedula,
        nombre: nombre,
        apPaterno: apPaterno
        apMaterno: apMaterno
        tel: tel
        email: email
       	password: password
        especialidad_idespecialidad: especialidad_idespecialidad
    }, function (data, status) {
		
        // close the popup
        alert("Data:"+data + "\nStatus:"+status);
        $("#add_new_record_modal").modal("hide");
  // read records again
         location.reload();

        // clear fields from the popup
        $("#curp").val("");
        $("#cedula").val("");
        $("#nombre").val("");
        $("#apPaterno").val("");
        $("#apMaterno").val("");
        $("#tel").val("");
        $("#email").val("");
        $("#password").val("");
        $("#especialidad_idespecialidad").val("");

       
    });
}



function datosToModal(){
	
	$(".upd").on("click", function(){
		var curp = $(this).attr("data-curp");
		$.ajax({
			method:"post",
			url:"../ajax/datosModalDoc.php",
			data:{curp:curp},
			cache:false,
			success: function(resp){
				var doctor = JSON.parse(resp);
				$("#curpUpd").val(doctor.curp);
				$("#cedulaUpd").val(doctor.cedula);
				$("#nombreUpd").val(doctor.nombre);
				$("#apPaternoUpd").val(doctor.apPaterno);
				$("#apMaternoUpd").val(doctor.apMaterno);
				$("#telUpd").val(doctor.tel);
				$("#emailUpd").val(doctor.email);
				$("#passwordUpd").val(doctor.password);
				$("#especialidad_idespecialidadUpd").val(doctor.especialidad_idespecialidad);
				$("#updDoc_modal").modal("open");
			}
		});
	});
	
	
	
	
	
	
	}