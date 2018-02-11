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
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Convergence" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=ABeeZee:400,400i" rel="stylesheet">
<!-- //online-fonts -->
    <!-- Icon for web browser's Flange-->
<link rel="shortcut icon" href="images/favicon.png">
<!--//Icon for web browser's Flange-->
</head>
<body>
<div class="Main-agile">
<!-- banner -->
	<div class="banner-2">
		<div class="container">
			<div class="col-md-4 agile1">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="stroke">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html">Inicio</a></li>
								<li><a href="index.html">Nosotros</a></li>
                                   <li><a href="index.html">Directorio M&eacute;dico</a></li>
								<li class="dropdown menu__item menu__item--current">
									<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">&Uacute;nete<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="login.php">Registro</a></li>
									</ul>
								</li>
								<li><a href="gallery.html">Galer&iacute;a</a></li>
								<li><a href="contacto.html">Contacto</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collsapse -->
				</nav>
			</div>
			<div class="col-md-4 logo">
				<div class="logo-w3l">
				<!--	<i class="fa fa-stethoscope" aria-hidden="true"></i>-->
                <img src="images/logo-h.png" class="img-responsive"  id="logo-h"/>
				</div>
				<h1><a href="index.html">Hospital de la Luz<span>Comprometidos con tu bienestar</span></a></h1>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //banner -->
<br><br><br><br>
<div class="agile-title">
            <br>
				<h3>Directorio M&eacute;dico<span></span></h3>
			</div>
<br>


<div class="container">
<div class="col-md-10 col-md-offset-1">

<table class="table table-hover">
<thead> 
<tr>  
<th>Nombre</th>  
<th>Apellido Paterno</th> 
<th>Apellido Materno</th>  
<th>Tel&eacute;fono</th>
<th>Email</th>
<th>Especialidad</th>
</tr> 
</thead>

</div>
<tbody>

<!---Generamos el listado vaciendo las variables de consulta----->


<?php
    

include("php/conexion.php");
$conexion=Conectarse();
$result = mysqli_query($conexion,"SELECT d.*, e.nombre as espe FROM doctor d, especialidad e where e.idespecialidad=d.especialidad_idespecialidad");
   while($doctor = mysqli_fetch_assoc($result)){
?> 
    <tr class="text-center">
	<td><?php echo $doctor ['nombre'];?></td>
    	<td><?php echo $doctor ['apPaterno'];?></td>
    	<td><?php echo $doctor ['apMaterno'];?></td>
        <td><?php echo $doctor ['tel'];?></td>
        	<td><?php echo $doctor ['email'];?></td>            
            <td><?php echo $doctor['espe'];?></td>        
      </tr>
            <?php
}
mysqli_close($conexion);
?>
    </tbody>
    
	</table>
 </div>

  </div>
  
    
    <br><br><br><br>
    <br><br>
    
    <!-- Footer -->
<div class="footer w3ls">
	<div class="container">
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 services-grids">
					<h3>Con&oacute;cenos</h3>
					<ul>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Inicio</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="registrarUsuario.php">Reg&iacute;strate</a></li>
					</ul>
				</div>
				<div class="col-md-4 ftr-grid">
					<div class="logo-fo">
						<div class="logo-w3l">
                        <img src="images/Logo Hospital ESP.png" class="img-responsive"  id="logo-h"/>

						</div>
						<h2><a href="index.html">Hospital de la Luz<span>Comprometidos con tu salud</span></a></h2>
					</div>
				</div>
				<div class="col-md-4 ftr-grid fg2">
					<h3>Direcci&oacute;n</h3>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>Calle Ezequiel Montes #135, Cuauht&eacute;moc, Tabacalera, 06030 Ciudad de M&eacute;xico, CDMX</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>01-55-5128-1140 Ext. 150 y sin costo al 01-800-161-420</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p><a href="mailto:info@example.com">info@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="right-w3l">
					<ul class="top-links">
					<!--	<li class="get-w3"><a href="mail.html"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Get In Touch</a></li>-->
						<li><a href="https://www.facebook.com/HdLaLuzESCOM/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/HdLuzESCOM"><i class="fa fa-twitter" id="logo-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-whatsapp" ></i></a></li>
					</ul>
				</div>
			<div class="copyrights">
				<p>&copy;2017 Hospital de la Luz. Todos los derechos reservados | Dise&ntilde;ado por: Equipo de Desarrollo Web de ESCOM</a> </p>
			</div>
		</div>
	</div>
</div>
<!-- //Footer -->








<!-- js-scripts -->

		<!-- js -->
        <script type="text/javascript" src="js/main.js"></script>
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
		<!-- //js -->

		<!-- for-Gallery -->
				 <!-- js -->
				<script src="js/jquery.tools.min.js"></script>
				<script src="js/jquery.mobile.custom.min.js"></script>
				<script src="js/jquery.cm-overlay.js"></script>
				<script src="js/main.js"></script>
				<script>
					$(document).ready(function(){
						$('.cm-overlay').cmOverlay();
					});
				</script>
		<!-- //for-Gallery -->

<!-- //js-scripts -->
</body>
</html>