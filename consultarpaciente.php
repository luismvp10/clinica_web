<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Datos del paciente</title>
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
                        <li class="active"><a href="frmdoctor.php" class="">Bienvenido 
				<?php
					session_start();
					echo $_SESSION['nombre'];
					?>!</a></li>
                         <li><a href="citasdoctor.php" class="">Citas</a></li>
                    
                      
               
                        
      
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                       
                        <li class=""> <a href="php/cerrarsesion.php"><span class="glyphicon glyphicon-log-in"></span> &nbsp; Cerrar Sesi&oacute;n</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<br><br><br><br><br><br><br>
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">HORARIO</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Usuario</th>
                    <th>C&eacute;dula</th>
					<th>Paciente</th>
					<th>Apellido</th>	
					<th>Sangre</th>				
					<th>Direcci&oacute;n</th>
                    <th>Correo</th>	
                    <th>T&eacute;lefono</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sexo</th>
                    <th>Regimen Subsidiario</th>
                    			
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');				     
					 $user=$_SESSION['consultado'];
				     $result=mysqli_query($conexion,"SELECT * FROM datosusuario where idusuario='$user'");				    
				     while ($usuarios=mysqli_fetch_array($result)){					 
					 echo "<tr><td id='id:$user' class='cam_editable'>".$user."</td>";
					 echo "<td id='cedula:$user' class='cam_editable'>".$usuarios['cedula']."</td>";
				     echo "<td id='nombre:$user' class='cam_editable'>".$usuarios['nombre']."</td>";
					 echo "<td id='apellido:$user' class='cam_editable'>".$usuarios['apellido']."</td>";
					 //////////////////////////////////////
					 echo "<td id='sangre:$user' class='cam_editable'>".$usuarios['sangre']."</td>";
					 echo "<td id='direccion:$user' class='cam_editable'>".$usuarios['direccion']."</td>";
					 echo "<td id='correo:$user' class='cam_editable'>".$usuarios['correo']."</td>";
					 echo "<td id='telefono:$user' class='cam_editable'>".$usuarios['telefono']."</td>";
					 echo "<td id='fecha:$user' class='cam_editable'>".$usuarios['fecha']."</td>";
					 echo "<td id='sexo:$user' class='cam_editable'>".$usuarios['sexo']."</td>";
					 echo "<td id='regimen subsidiario:$user' class='cam_editable'>".$usuarios['regimensubsidiario']."</td>"; 
					 echo"</tr>";
					 }
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
<!--//////////////////////////////////////////////////-->





	<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/maindoctor.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>