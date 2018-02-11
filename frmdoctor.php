<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Bienvenido doctor</title>
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
					
					echo $_SESSION['nombre'];
					?>!</a></li>
                         <li><a href="citasdoctor.php" class="">Citas</a></li>
                    
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
<br>
<br><br><br>
<div class="container">
<div class="row">
<div class="agile-title">
            <br>
				<h3> Bienvenido! <span></span></h3>
			</div>
            <div class="col-md-6 col-md-offset-3">
<img src="images/Logo Hospital.png" class="img-responsive"   >
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
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript">        
	function cambiar(){
          $('#modal2').modal('show');

        }
    </script>
</body>
</html>