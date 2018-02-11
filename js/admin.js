
function deleteAdmin(){

	
	$(".del").on("click",function(){
		var curp = $(this).attr("data-curp");
		$.confirm({
    		title: '',
    		content: "Est&aacute; seguro de eliminar el registro asociado al curp: " +curp+"?",
    		buttons:{
        Si: function(){
			  $.post("../ajax/borrarAdmin.php", {
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




function agregarAdmin() {

   // Obtenemos los valores
    var curp = $("#curp").val();
    var nombre = $("#nombre").val();
    var apPaterno = $("#apPaterno").val();
    var password = $("#password").val();
   
    // agregar
    /*La segunda variable del envio ajax indica el valor que se le manda osea 
    el valor del formulario*/
    $.post("../ajax/agregarAdmin.php", {
        curp: curp,
        nombre: nombre,
        apPaterno: apPaterno,
        password: password
    }, function (data, status) {
		
        // close the popup
        alert("Data:"+data + "\nStatus:"+status);
        $("#add_new_record_modal").modal("hide");
  // read records again
         location.reload();

        // clear fields from the popup
        $("#curp").val("");
        $("#nombre").val("");
        $("#apPaterno").val("");
        $("#password").val("");
       
    });
}



function datosToModal(){
	
	$(".upd").on("click", function(){
		var curp = $(this).attr("data-curp");
		$.ajax({
			method:"post",
			url:"../ajax/datosModalAdmin.php",
			data:{curp:curp},
			cache:false,
			success: function(resp){
				var administrador = JSON.parse(resp);
				$("#curpUpd").val(administrador.curp);
				$("#nombreUpd").val(administrador.nombre);
				$("#apPaternoUpd").val(administrador.apPaterno);
				$("#passwordUpd").val(administrador.password);
				$("#updAdmin_modal").modal("open");
			}
		});
	});
	
	
	
	
	
	
	}