<?php
//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');

//Recibir todos los parámetros del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// $archivo = $_FILES['carnet'];
// $archivo2 = $_FILES['ensayo'];

//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;

//Nuestra cuenta
$mail->Username ='cdm.inscripciones@gmail.com';
$mail->Password = "koritos2018";

//Agregar destinatario
$mail->AddAddress("informes@cdmperu.org");
$mail->Subject = "informes";
$mail->Body = "Nombre: $name \n".
    "Email: $email \n".
    "Telefono: $phone \n".
    "Mensaje: $message \n";
//Para adjuntar archivo
// $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
// $mail->AddAttachment($archivo2['tmp_name'], $archivo2['name']);



//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
	echo'<script type="text/javascript">
			alert("Enviado Correctamente");
			window.location="http://www.cdmperu.org"
		 </script>';
}
else{
	echo'<script type="text/javascript">
			alert("NO ENVIADO, intentar de nuevo");
			window.location="http://www.cdmperu.org"
		 </script>';
}
?>

