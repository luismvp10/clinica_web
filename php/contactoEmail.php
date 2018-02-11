<?php
include "PHPMailer/class.phpmailer.php";
include "PHPMailer/class.smtp.php";
include "correoCuenta.php";

$correo = $_POST['correoContacto'];
$nombre = $_POST['nombreContacto'];
$mensaje = $_POST['mensajeContacto'];

$the_subject = "Contacto ";
$address_to = "$correo";
$from_name = "Hospital de La Luz";
$phpmailer = new PHPMailer();
// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $usr;
$phpmailer->Password = $pass;
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465 ;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;
$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($correo); // recipients email
$phpmailer->Subject = $the_subject;	
$phpmailer->Body .="<h1 style='color:#3498db;'>Hola Hemos Recibido tus comentarios!</h1>";
$phpmailer->Body .= "<p>Mensaje personalizado a $correo</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer->IsHTML(true);
$phpmailer->Send();
?>
<script>
alert("Se ha enviado tu comentario!");
location.href="../contacto.html";
</script>