$(document).ready(function(){
$("select").change(function() {			
            var field_id=$(this).attr("name");
			var value=$(this).val();	
			console.log('value: '+value+' field:'+field_id);
			$.post('php/modificardoctorcita.php', field_id+"="+value,function(data){
				if(data!=''){
					console.log(data);
				}
			});			
        });
$("td[button=false]").click(function(){
		var value=$(this).attr("name");
		console.log('value: '+value);
		$.post('php/consultardatos.php',value,function(respuesta){	
				if (respuesta=="true")
 				window.location.href = "moverpaciente.php";
 			else
 				alert(respuesta);	
			});			
		});
$("td[button=true]").click(function(){
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