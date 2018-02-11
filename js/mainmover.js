$(document).ready(function(){		
		$("td[button=true]").click(function(){
			if (confirm("Desea mover al usuario a esta cita?")) {
			var field_id=$(this).attr("id");
			var value=$(this).attr("name");			
			console.log('value:'+value+' field:'+field_id);
			$.post('php/moverpaciente.php', field_id+"="+value,function(respuesta){	
				if (respuesta=="true")
 				window.location.reload(true);
 			else
 				alert(respuesta);
				if (respuesta=="usuario movido exitosamente")
					window.location.href = "citas.php";
			});			
		}
		});	
});	