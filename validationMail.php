<?php
include ("./php/connection.php");
$name     = $_POST['name'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$subject  = $_POST['subject'];
$dataTime = $_POST['datatime'];
$time     = $_POST['timeCont'];
$message  = $_POST['message'];

$querydata = "INSERT INTO system_contact(name,phone,email,subject,datatime,timeCont,message) VALUES('$name','$phone','$email','$subject','$dataTime','$time','$message')";
$result    = $connection->query($querydata) || die(
    '<!DOCTYPE html>
	<html>
	<head>
		<style type="text/css" media="screen">
			.box-msn{
    			width: 50%;
    			margin: 50px auto;
				border:2px solid #A93226   ;
				border-radius: 5px;
				text-aling:center;
				background-color:#A93226  ;
				color:#FFF;
				font-family: Arial;
				font-size: 1em;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="box-msn">
			<h2>Esto es vergonzoso, no se pudo enviar los datos.</h2>
			<h2>Por favor ponte en contacto con al teléfono (999)2.61.62.63.</h2>
		</div>
	</body>
	</html>
');
?>
<!DOCTYPE html>
	<html>
	<head>
		<style type="text/css" media="screen">
			.box-msn{
    			width: 50%;
    			margin: 50px auto;
				border:2px solid #27AE60 ;
				border-radius: 5px;
				text-aling:center;
				background-color:#27AE60;
				color:#FFF;
				font-family: Arial;
				font-size: 1em;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="box-msn">
			<h2>Felicidades, su cotización sera revisada</h2>
			<h2>En un momento seras redireccionado al inicio...</h2>
		</div>
	</body>
	</html>
<?php
if ($result) {
    echo '<META HTTP-EQUIV=Refresh CONTENT="2; URL=./index.php">';
}
?>
<?php

$nameMain    = $_POST['name'];
$phoneMain    = $_POST['phone'];
$emailMain    = $_POST['email'];
$subjectMain  = $_POST['subject'];
$dataTimeMain = $_POST['datatime'];
$timeMain     = $_POST['timeCont'];
$messageMain  = $_POST['message'];


$email_body = "Haz recibido un nuevo correo de: \n Nombre: $nameMain \n Telefono: $phoneMain
    \n Correo: $emailMain \n Asunto: $subjectMain \n Agendo para el día $dateTimeMain \n la hora que programo sera $timeMain \n escribio lo siguiente: \n $messageMain";

mail('ventas@bytesware.com.mx', 'Asunto', $email_body);
header("Location:index.php");
?>