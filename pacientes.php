<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Pacientes</title>
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

 
	<div class="table tab-pane">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Usuario</th>
					<th>C&eacute;dula</th>	
					<th>Nombre</th>	
					<th>Apellido</th>	
					<th>Sangre</th>	
					<th>Direcci&oacute;n</th>	
					<th>Correo</th>	
					<th>Tel&eacute;fono</th>	
					<th>Fecha de Nacimiento</th>	
					<th>Sexo</th>	
					<th>Reg&iacute;men Subsidiario</th>	
					<th>Acciones</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $result=mysqli_query($conexion,'SELECT nombre FROM usuarios where tipo="usuario"');				    
				     while ($usuarios=mysqli_fetch_array($result)){
						 $id=$usuarios['nombre'];
					 //////////////////////////////////////
					 $result2=mysqli_query($conexion,"SELECT * FROM datosusuario where idusuario='$id'");
					 $dato=mysqli_fetch_array($result2);
					 //////////////////////////////////////
					 echo "<tr><td id='id:$id' class='cam_editable'>".$usuarios['nombre']."</td>";
					 echo "<td id='cedula:$id' class='cam_editable' contenteditable='true'>".$dato['cedula']."</td>";
				     echo "<td id='nombre:$id' class='cam_editable' contenteditable='true'>".$dato['nombre']."</td>";
					 echo "<td id='apellido:$id' class='cam_editable' contenteditable='true'>".$dato['apellido']."</td>";
					 //////////////////////////////////////
					 echo "<td id='sangre:$id' class='cam_editable' contenteditable='true'>".$dato['sangre']."</td>";
					 echo "<td id='direccion:$id' class='cam_editable' contenteditable='true'>".$dato['direccion']."</td>";
					 echo "<td id='correo:$id' class='cam_editable' contenteditable='true'>".$dato['correo']."</td>";
					 echo "<td id='telefono:$id' class='cam_editable' contenteditable='true'>".$dato['telefono']."</td>";
					 echo "<td id='fecha:$id' class='cam_editable' contenteditable='true'>".$dato['fecha']."</td>";
					 echo "<td id='sexo:$id' class='cam_editable' contenteditable='true'>".$dato['sexo']."</td>";
					 echo "<td id='regimen subsidiario:$id' class='cam_editable' contenteditable='true'>".$dato['regimensubsidiario']."</td>"; 
					 ///////////////////////////////////////	 
				     echo"<td id='$id' button='true'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-minus'></span> Eliminar</button></td>";
					 echo"</tr>";
					 }				
				?>
			</tbody>	
		</table>
	</div>
	
    
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
     <br>
    <br>
    
	<button type="button" onclick="ventananuevo();" class="btn btn-success btn-lg" >
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar
    </button>
    <br>
    <br>
    <br><br>
    <br>

    
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	</div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Paciente</h4>
            </div>
            <form role="form"  id= "frmpaciente" name="frmpaciente" onsubmit="Registrarpaciente(); return false">
              <div class="col-lg-12">               
<br><br>
                <div class="form-group">
                  <label>Nombre de Usuario:</label>
                  <input  name="nombreusuario" class="form-control"placeholder="Nombre de Usuario" required>
                </div>
                
                 <div class="form-group">
                  <label>C&eacute;dula:</label>
                  <input  name="cedula" class="form-control" placeholder="c&eacute;dula"required>
                </div>
                 
                <div class="form-group">
                  <label>Nombre:</label>
                  <input  name="nombre" class="form-control" placeholder="Nombre"required>
                </div>
                 
                <div class="form-group">
                  <label>Apellido:</label>
                  <input  name="apellido" class="form-control" placeholder="Apellido" required>
                </div>
                
                <div class="form-group">
                  <label>Tipo de Sangre:</label>
                  <select name='sangre' class='form-control'>
					  <option value="A+">A+</option>
					  <option value="A-">A-</option>
					  <option value="AB+">AB+</option>
					  <option value="B-">B-</option>
					  <option value="B+">B+</option>
					  <option value="O+">O+</option>
					  <option value="AB-">AB-</option>
					  <option value="O-">O-</option>
				  </select>
                </div>
                
                <div class="form-group">
                  <label>Direcci&oacute;n:</label>
                  <input  name="direccion"  class="form-control" placeholder="Direcci&oacute;n"required>
                </div>
                 
                 <div class="form-group">
                  <label>Correo:</label>
                  <input  name="correo" type="email"  class="form-control" placeholder="Correo" required>
                </div>
                
                 <div class="form-group">
                  <label>Tel&eacute;fono:</label>
                  <input  name="telefono" type="number"  class="form-control" placeholder="Tel&eacute;fono" required>
                </div>
                 
                <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <input  name="fecha" type="date"  class="form-control" required>
                </div>
                 
                 <div class="form-group">
                  <label>Sexo:</label>
                  <select name='sexo' class='form-control'>
					  <option value="Femenino">Femenino</option>
					  <option value="Masculino">Masculino</option>					  
				  </select>
                 </div>
                 
                 <div class="form-group">
                  <label>Regimen Subsidiario:</label>
                  <select name='regimensubsidiario' class='form-control'>
					  <option value="IPS">IPS</option>
					  <option value="SISBEN">SISBEN</option>					  
				  </select>
                 </div>                

                <div class="form-group">
                  <label>Contrase&ntilde;a:</label>
                  <input  name="password" id="p1" class="form-control" type="password" placeholder="Contrase&ntilde;a"required>
                </div>
                
                <div class="form-group">
                  <label>Repita Contrase&ntilde;a:</label>
                  <input  name="password2" id="p2" class="form-control" type="password" placeholder="Repita Contrase&ntilde;a" required>
                </div>                         
                <br><br>
                <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Registrar
                </button>
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
              <h4 class="modal-title">Cambiar Contrase&ntilde;a</h4>
            </div>
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                <br>
                  <label>Contrase&ntilde;a actual:</label>
                  <input  name="password0" id="p" class="form-control" type="password" placeholder="Contrase&ntilde;a actual"required>
                </div>
                <div class="form-group">
                  <label>Contrase&ntilde;a nueva:</label>
                  <input  name="password1" id="p3" class="form-control" type="password" placeholder="Contrase&ntilde;a nueva"required>
                </div>
                
                <div class="form-group">
                  <label>Repita contrase&ntilde;a:</label>
                  <input  name="password2" id="p4" class="form-control" type="password" placeholder="Contrase&ntilde;a nueva" required>
                </div> 
                <br>
                 <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cambiar
                </button> 
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
<!--//////////////////////////////////////////////////-->
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/mainpaciente.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	
        function ventananuevo(){
          $('#modal').modal('show');

        }
	function cambiar(){
          $('#modal2').modal('show');

        }
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>