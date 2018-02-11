<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Mi horario</title>
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
                        <li class="active"><a href="frmusuario.php" class="">Bienvenido 
				<?php
					session_start();
					echo $_SESSION['nombre'];
					?>!</a></li>
                         <li><a href="datospersonales.php" class="">Datos Personales</a></li>
                         <li><a href="horarios.php">Horarios</a></li>					
						
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
<br><br><br>
<br><br><br>
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">HORARIO</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>HORAS</th>
					<th>PACIENTE</th>	
					<th>DOCTOR</th>				
					<th>ACCION</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $user=$_SESSION['nombre'];
				     $result=mysqli_query($conexion,"SELECT cita FROM datosusuario where idusuario='$user'");
				     $cita=mysqli_fetch_array($result);
				     $codcita=$cita['cita'];
				     if ($codcita==0){
						 $result=mysqli_query($conexion,'SELECT * FROM horarios');
						 while ($horarios=mysqli_fetch_array($result)){
							 $id=$horarios['id'];						 
							 if ($horarios['paciente']==null){
						 echo "<tr><td id='id:$id' class='cam_editable'>".$horarios['id']."</td>";
						 echo "<td id='horas:$id' class='cam_editable'>".$horarios['horas']."</td>";				     
						 echo "<td id='paciente:$id' class='cam_editable'>".$horarios['paciente']."</td>";
						 echo "<td id='doctor:$id' class='cam_editable'>".$horarios['doctor']."</td>";	
						 echo"<td id='$id' name='$user' button='true'><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span> Apartar</button></td>";
						 echo"</tr>";
							 }
						 }
					 }else{
						 $result=mysqli_query($conexion,"SELECT * FROM horarios where id='$codcita'");
						 while ($horarios=mysqli_fetch_array($result)){
							 $id=$horarios['id'];
							 echo "<tr><td id='id:$id' class='cam_editable'>".$horarios['id']."</td>";
							 echo "<td id='horas:$id' class='cam_editable'>".$horarios['horas']."</td>";
							 echo "<td id='paciente:$id' class='cam_editable'>".$horarios['paciente']."</td>";
							 echo "<td id='doctor:$id' class='cam_editable'>".$horarios['doctor']."</td>";
							 echo"<td id='$id' name='$user' button='false'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Cancelar Cita</button></td>";
							 echo"</tr>";
						 }
					 }
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
	
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
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
<script type="text/javascript" src="js/maincita.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript">        
	function cambiar(){
          $('#modal2').modal('show');

        }
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>