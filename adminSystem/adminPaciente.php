<!doctype html>
<html lang = "en">
<head>

<!--Meta tag Keywords -->
<meta charset="utf-8">
<title> Paciente </title>

<!-- Java script -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- archivos css -->
<link rel="stylesheet" href="../css/bootstrap.css"> <!-- bootstrap-core-css -->
<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awsome_ICons-Css -->
<link type="text/css" rel="stylesheet" href="../css/cm-overlay.css" />
<link rel="stylesheet" href="../css/sesiones.css"> <!-- Sesiones -->

<!-- Jquery -->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/scriptPaciente.js"></script> 

<!-- Calendario -->
<link rel="stylesheet" href="../Calendario/Pikaday-master/css/pikaday.css">

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Convergence" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=ABeeZee:400,400i" rel="stylesheet">

<!-- Icon for web browser's Flange-->
<link rel="shortcut icon" href="../images/favicon.png">

</head>                      

<body>

<!-- Banner -->
<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                   
				
                <img src="../images/logo-h.png" class="img-responsive"  width="184" height="116" >
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#" class="">Bienvenido </a></li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pacientes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class=" dropdown">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agendar Cita</a>
                                </li>
                                <li><a href="#">Registrar</a></li>
                                 <li><a href="#">Ver Pacientes</a></li>
                            </ul>
                        </li>
                       
                        <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Doctores <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Administrar Doctores</a></li>
                                <li><a href="#">Registrar Nuevo Doctor</a></li>
                            </ul>
                        </li>
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administradores <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="verAdministradores.php">Ver Administradores</a></li>
                                <li><a href="agregarAdministrador.html">Agregar Administrador</a></li>
                                
                            </ul>
                        </li>
                     
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                       
                        <li class=""> <a href="#"><span class="glyphicon glyphicon-log-in"></span>  Cerrar Sesi&oacute;n</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- //Banner -->

<br><br><br><br><br><br>

<!-- Content Section -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="pull-right">
				<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Paciente</button>
			</div>
		</div>
	</div>
    <div class="row">
    	<div class="col-md-12">
        	<h4> Pacientes : </h4>
            	<div class="records_content"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->

<br><br><br><br><br><br>

<!-- Boostrap modal to add new record -->
<!-- Modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Agregar nuevo paciente</h4>
			</div>
            <div class="modal-body">
     
                <div class="form-group"> <!-- CURP -->
                    <label for="curp_p">CURP</label>
                    <input type="text" id="curp_p" placeholder="curp" class="form-control" />
                </div>
                
                <div class="form-group"> <!-- Nombre -->
                    <label for="nombre_p">Nombre</label>
                    <input type="text" id="nombre_p" placeholder="Nombre" class="form-control" />
                </div>
         
                <div class="form-group"> <!-- Apellido Paterno -->
                    <label for="apPaterno_p">Apellido Paterno</label>
                    <input type="text" id="apPaterno_p" placeholder="Apellido Paterno" class="form-control" />
                </div>
         
                <div class="form-group"> <!-- Apellido Materno -->
                    <label for="apMaterno_p">Apellido Materno</label>
                    <input type="text" id="apMaterno_p" placeholder="Apellido Materno" class="form-control" />
                </div>
                
                <div class="form-group"> <!-- Fecha de Nacimiento -->
                    <label for="datepicker">Fecha de Nacimiento</label>
                    <input type="text" id="datepicker" placeholder="Fecha de Nacimiento" class="form-control" />
                </div>
                
                <div class="form-group"> <!-- Genero -->
                    <label for="email">Genero</label>
                    <input type="text" id="genero_p" placeholder="Genero" class="form-control" />
                </div>
                
                <div class="form-group"> <!-- Teléfono -->
                    <label for="tel_p">Tel&eacute;fono</label>
                    <input type="text" id="tel_p" placeholder="Tel&eacute;fono" class="form-control" />
                </div>
                
                <div class="form-group"> <!-- Email -->
                    <label for="email_p">Correo Electronico</label>
                    <input type="text" id="email_p" placeholder="Correo Electronico" class="form-control" />
                </div>
                
                <div class="form-group"> <!-- Password -->
                    <label for="password_p">Contrase&ntilde;a</label>
                    <input type="password" id="password_p" placeholder="Contrase&ntilde;a" class="form-control" />
                </div>
     
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="agregarPaciente()">Guardar</button>
            </div>
        </div>
	</div>
</div>

<!-- js-scripts -->			
	
		<!-- js -->
			<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="../js/bootstrap.js"></script> 
			
			<script type="text/javascript">
			//Para leer la información de los doctores
			$(document).ready(function () {
    			// READ recods on page load
		    leerPacientes(); // calling function
			});
			</script>
            
            <script src="../Calendario/Pikaday-master/pikaday.js"></script>
			<script>
    			var picker = new Pikaday({ field: document.getElementById('datepicker') });
			</script>
<!-- //js-scripts -->


    
   

</body>
</html>