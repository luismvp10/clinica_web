<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital de la Luz : Cl&iacute;nica de Especialidades</title>

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
<script type="text/jscript" src="../js/doctor.js"></script>

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




<!-- // Modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar Doctor</h4>
            </div>
            <div class="modal-body">
                <!--CURP-->
                 <div class="form-group">
                        <label for="inputText">CURP:</label>
                        
                            <input type="text" class="form-control " id="curp" name="curp" placeholder="CURP"  required>
                    
                    </div>
                    <!--CURP-->

                       <!--Cedula-->
                    <div class="form-group">
                        <label for="inputText">C&eacute;dula:</label>
                    
                            <input type="text" class="form-control " id="cedula" name="cedula" placeholder="C&eacute;dula"  required>  
                    </div>
                    <!--Cedula-->

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

                    <!--Apellido Materno-->
                    <div class="form-group">
                        <label for="inputText">Apellido Materno:</label>
                        
                            <input type="text" class="form-control " id="apMaterno" name="apMaterno" placeholder="Apellido Materno"  required>
                        
                    </div>
                    <!--Apellido Materno-->

                    <!--Telefono-->
                    <div class="form-group">
                        <label for="inputText">Tel&eacute;fono:</label>
                        
                            <input type="text" class="form-control " id="tel" name="tel" placeholder="Tel&eacute;fono"  required>
                        
                    </div>
                    <!--Telefono-->

                    <!--Email-->
                    <div class="form-group">
                        <label for="inputText">Email:</label>
                        
                            <input type="inputText" class="form-control " id="email" name="email" placeholder="Contrase&ntilde;a"  required>
                    </div>
                    <!--Email-->
                    <!--Password-->
                    <div class="form-group">
                        <label for="inputText">Password:</label>
                        
                            <input type="password" class="form-control " id="password" name="password" placeholder="Password"  required>
                    </div>
                    <!--Password-->
                    
                    <!--Especialidad-->
                    <div class="form-group">
                        <label for="inputText">Especialidad:</label>
                    
                             <select class="form-control" id="especialidad_idespecialidad" name="especialidad_idespecialidad">
                                <option selected disabled>Selecciona la Especialidad</option>
                                <option value="1">Cardiolog&iacute;a</option>
                                <option value="2">Psiquiatr&iacute;a</option>
                                <option value="3">Pediatr&iacute;a</option>
                                <option value="4">Oftamolog&iacute;a</option>
                                <option value="5">Nutriolog&iacute;a</option>
                                <option value="6">Neurolog&iacute;a</option>
                                <option value="7">Gastroenterolog&iacute;a</option>
                                <option value="8">Endocrinolog&iacute;a</option>
                                <option value="9">Otorrinolaringolog&iacute;a</option>
                                <option value="10">Dermatolog&iacute;a</option>
                                <option value="11">Ginecolog&iacute;a</option>
                              </select>

                    </div>
                    <!--Especialidad-->
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="agregarDoc()">Agregar</button>
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
            <h3>Doctores <span></span></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#add_new_record_modal">Agregar Doctor</button>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- /Content Section -->


<!-- Content Section -->
<?php
    
        include("../ajax/mostrarDoc.php");

?>
<section id="administradores">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th class="text-center">CURP</th>
                        <th class="text-center">C&eacute;dula</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido Paterno</th>
                        <th class="text-center">Apellido Materno</th>
                        <th class="text-center">Tel&eacute;fono</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Especialidad</th>
                        
                        <th colspan="2" class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $filasDoc; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- /Content Section -->




<!--Modal UPDATE-->
<div class="modal" id="updDoc_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

                       <!--Cedula-->
                    <div class="form-group">
                        <label for="inputText">C&eacute;dula:</label>
                    
                            <input type="text" class="form-control " id="cedulaUpd" name="cedulaUpd" placeholder="C&eacute;dula"  required>  
                    </div>
                    <!--Cedula-->

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

                    <!--Apellido Materno-->
                    <div class="form-group">
                        <label for="inputText">Apellido Materno:</label>
                        
                            <input type="text" class="form-control " id="apMaternoUpd" name="apMaternoUpd" placeholder="Apellido Materno"  required>
                        
                    </div>
                    <!--Apellido Materno-->

                    <!--Telefono-->
                    <div class="form-group">
                        <label for="inputText">Tel&eacute;fono:</label>
                        
                            <input type="text" class="form-control " id="telUpd" name="telUpd" placeholder="Tel&eacute;fono"  required>
                        
                    </div>
                    <!--Telefono-->

                    <!--Email-->
                    <div class="form-group">
                        <label for="inputText">Email:</label>
                        
                            <input type="inputText" class="form-control " id="emailUpd" name="emailUpd" placeholder="Contrase&ntilde;a"  required>
                    </div>
                    <!--Email-->
                    <!--Password-->
                    <div class="form-group">
                        <label for="inputText">Password:</label>
                        
                            <input type="password" class="form-control " id="passwordUpd" name="passwordUpd" placeholder="Password"  required>
                    </div>
                    <!--Password-->
                    
                    <!--Especialidad-->
                    <div class="form-group">
                        <label for="inputText">Especialidad:</label>
                    
                             <select class="form-control" id="especialidad_idespecialidadUpd" name="especialidad_idespecialidadUpd">
                                <option selected disabled>Selecciona la Especialidad</option>
                                <option value="1">Cardiolog&iacute;a</option>
                                <option value="2">Psiquiatr&iacute;a</option>
                                <option value="3">Pediatr&iacute;a</option>
                                <option value="4">Oftamolog&iacute;a</option>
                                <option value="5">Nutriolog&iacute;a</option>
                                <option value="6">Neurolog&iacute;a</option>
                                <option value="7">Gastroenterolog&iacute;a</option>
                                <option value="8">Endocrinolog&iacute;a</option>
                                <option value="9">Otorrinolaringolog&iacute;a</option>
                                <option value="10">Dermatolog&iacute;a</option>
                                <option value="11">Ginecolog&iacute;a</option>
                              </select>

                    </div>
         
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
            
       
        <!-- //js -->

        
<!-- //js-scripts -->
</body>
</html>


