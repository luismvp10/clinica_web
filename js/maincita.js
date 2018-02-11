$(document).ready(function(){		
		$("td[button=true]").click(function(){
			if (confirm("Desea apartar esta cita?")) {
			var field_id=$(this).attr("id");
			var value=$(this).attr("name");			
			console.log('value:'+value+' field:'+field_id);
			$.post('php/apartarcita.php', field_id+"="+value,function(respuesta){	
				if (respuesta=="true")
 				window.location.reload(true);
 			else
 				alert(respuesta);	
			});			
		}
		});
	$("td[button=false]").click(function(){
			if (confirm("Desea cancelar esta cita?")) {
			var field_id=$(this).attr("id");
			var value=$(this).attr("name");			
			console.log('value:'+value+' field:'+field_id);
			$.post('php/cancelarcita.php', field_id+"="+value,function(respuesta){	
				if (respuesta=="true")
 				window.location.reload(true);
 			else
 				alert(respuesta);		
			});			
		}
		});		
	});	
