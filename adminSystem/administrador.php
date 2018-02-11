<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital de la Luz : Cl&iacute;nica de Especialidades</title>
<link rel="shortcut icon" href="../images/favicon.png">
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Therapeutic web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="../css/sesiones.css">
<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link type="text/css" rel="stylesheet" href="../css/cm-overlay.css" />
<link rel="stylesheet" href="../js/jquery-confirm-master/css/jquery-confirm.css">
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Convergence" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=ABeeZee:400,400i" rel="stylesheet">

<!-- //online-fonts -->
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
                   
				
                <img src="images/logo-h.png" class="img-responsive"  width="184" height="116" >
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="frmadmin.php" class="">Bienvenido 
				<?php
					session_start();
					echo $_SESSION['nombre'];
					?>!</a></li>
                         <li><a href="administradores.php" class="">Administradores</a></li>
                         <li><a href="doctores.php">Doctores</a></li>					
					<li><a href="pacientes.php">Pacientes</a></li>	
					<li><a href="citas.php">Citas</a></li>	
                       <li><a onclick="cambiar();" href="#">Cambiar contrase&ntilde;a</a></li>
                       
                        
                     
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                       
                        <li class=""> <a href="php/cerrarsesion.php"><span class="glyphicon glyphicon-log-in"></span> &nbsp; Cerrar Sesi&oacute;n</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- //Banner -->





<!-- // Modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar Administrador</h4>
            </div>
            <div class="modal-body">

                 <div class="form-group">
						<label for="inputText">CURP:</label>
						
							<input type="text" class="form-control " id="curp" name="curp" placeholder="CURP"  required>
					
					</div>
					<!--CURP-->

					   <!--Nombre-->
                    <div class="form-group">
						<label for="inputText">Nombre:</label>
					
							<input type="text" class="form-control " id="nombre" name="nombre" placeholder="Nombre"  required>	
					</div>
					<!--Nombre-->

					   <!--Apellido Paterno-->
                    <div class="form-group">
						<label for="inputText">Apellido Paterno:</label>
						
							<input type="text" class="form-control " id="apPaterno" name="apPaterno" placeholder="Apellido Paterno"  required>
					
					</div>
					<!--Apellido Paterno-->

                    <!--Contraseña-->
                    <div class="form-group">
						<label for="inputText">Contrase&ntilde;a:</label>
						
							<input type="password" class="form-control " id="password" name="password" placeholder="Contrase&ntilde;a"  required>
						
					</div>
					<!--Contraseña-->
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="agregarAdmin()">Agregar</button>
            </div>
        </div>
    </div>
</div>
<!---Modal--->

<!-- Content Section -->
<div class="container">
<br><br><br><br><br>
    <div class="row">
        <div class="agile-title">
            <h3>Administradores <span></span></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#add_new_record_modal">Agregar Administrador</button>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- /Content Section -->





<!-- Content Section -->
<?php
	
		include("../ajax/mostrarAdmin.php");

?>
<section id="administradores">
	<div class="container">
    	<div class="row">
        	<div class="col-md-10 col-md-offset-1">
            	<table class="table table-hover">
                	<thead>
                    	<tr>
                        <th class="text-center">CURP</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido Paterno</th>
                        <th class="text-center">Contrase&ntilde;a</th>
                        <th colspan="2" class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php echo $filasAdmin; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- /Content Section -->




<!--Modal UPDATE-->
<div class="modal" id="updAdmin_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar Administrador</h4>
            </div>
            <div class="modal-body">

                 <div class="form-group">
						<label for="inputText">CURP:</label>
						
							<input type="text" class="form-control " id="curpUpd" name="curpUpd" placeholder="CURP"  required>
					
					</div>
					<!--CURP-->

					   <!--Nombre-->
                    <div class="form-group">
						<label for="inputText">Nombre:</label>
					
							<input type="text" class="form-control " id="nombreUpd" name="nombreUpd" placeholder="Nombre"  required>	
					</div>
					<!--Nombre-->

					   <!--Apellido Paterno-->
                    <div class="form-group">
						<label for="inputText">Apellido Paterno:</label>
						
							<input type="text" class="form-control " id="apPaternoUpd" name="apPaternoUpd" placeholder="Apellido Paterno"  required>
					
					</div>
					<!--Apellido Paterno-->

                    <!--Contraseña-->
                    <div class="form-group">
						<label for="inputText">Contrase&ntilde;a:</label>
						
							<input type="password" class="form-control " id="passwordUpd" name="passwordUpd" placeholder="Contrase&ntilde;a"  required>
						
					</div>
					<!--Contraseña-->
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" >Agregar</button>
            </div>
        </div>
    </div>
</div>

<!--Modal UPDATE->










<!-- js-scripts -->			
	
		<!-- js -->
			<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript" src="../js/jquery-confirm-master/dist/jquery-confirm.min.js"></script>
			<script type="text/javascript" src="../js/bootstrap.js"></script> 
            <script type="text/jscript" src="../js/admin.js"></script>
       
		<!-- //js -->

		
<!-- //js-scripts -->
</body>
</html>