<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Doctores</title>
    <link rel="stylesheet" href="css/sesiones.css">
    <link rel="shortcut icon" href="images/favicon.png">
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
<br><br><br><br><br><br><br>
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">LISTA DE DOCTORES</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>					
					<th>Doctor</th>	
					<th>Acciones</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $result=mysqli_query($conexion,'SELECT nombre FROM usuarios where tipo="doctor"');
				     while ($usuarios=mysqli_fetch_array($result)){
						 $id=$usuarios['nombre'];					 
						 echo "<td id='nombre:$id' class='cam_editable'>".$usuarios['nombre']."</td>";	 
						 echo"<td id='$id' button='true'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-minus'></span> Eliminar</button></td>";
						 echo"</tr>";
					 }				
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
    <br><br>
	<button type="button" onclick="ventananuevo();" class="btn btn-success btn-lg" >
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar
    </button>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	</div>


    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Doctor</h4>
            </div>
            <form role="form"  id= "frmdoctor" name="frmdoctor" onsubmit="Registrardoctor(); return false">
              <div class="col-lg-12">               
<br>
                <div class="form-group">
                  <label>Nombre:</label>
                  <input  name="nombre" class="form-control"placeholder="Nombre" required>
                </div>

                <div class="form-group">
                  <label>Contrase&ntilde;a:</label>
                  <input  name="password" id="p1" class="form-control" type="password" placeholder="Contrase&ntilde;a"required>
                </div>
                
                <div class="form-group">
                  <label>Repita Contrase&ntilde;a:</label>
                  <input  name="password2" id="p2" class="form-control" type="password" placeholder="Repita contrase&ntilde;a "required>
                </div>                         
                <br>
                <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Registrar
                </button>
                <br>
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
	
<!--//////////////////////////////////////////////////-->

  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Cambiar contraseña</h4>
            </div>
         
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               
   <br>
                <div class="form-group">
                  <label>Contrase&ntilde;a actual:</label>
                  <input  name="password0" id="p" class="form-control" type="password" placeholder="Contrase&ntilde;a actual"required>
                </div>
                <div class="form-group">
                  <label>Nueva Contrase&ntilde;a:</label>
                  <input  name="password1" id="p3" class="form-control" type="password" placeholder="Nueva Contrase&ntilde;a"required>
                </div>
                
                <div class="form-group">
                  <label>Repita Nueva Contrase&ntilde;a:</label>
                  <input  name="password2" id="p4" class="form-control" type="password" placeholder="Repita nueva contrase&ntilde;a"required>
                </div> 
                   <br>
                 <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                 
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cambiar
                </button> 
                   <br>
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
<!--//////////////////////////////////////////////////-->
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript">
	function cambiar(){
          $('#modal2').modal('show');

        }
        function ventananuevo(){
          $('#modal').modal('show');

        }
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>