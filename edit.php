<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar</title>
	<link rel="icon" href="./img/icon.ico">
	<link rel="stylesheet" href="./css/style-edit.css">
	<link rel="stylesheet" href="./css/style-header.css">
	<link rel="stylesheet" href="./css/style-icon.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<script src="./js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8" ></script>
	<script src="./js/effect.js" type="text/javascript" charset="utf-8" ></script>
	<script src="./js/menuMobil.js" type="text/javascript" charset="utf-8" ></script>
	<script src="./js/jquery.flexslider-min.js" type="text/javascript" charset="utf-8" ></script>
	<script src="./js/efectos-form.js" type="text/javascript" charset="utf-8" ></script>
	<script src="./js/validationForm.js" type="text/javascript" charset="utf-8" ></script>
</head>
<body>
<div class="up">
    <span class="ir-arriba icon-circle-up">
    </span>
</div>
 <?php
include './header.php';
?>
<?php
include ("./php/connection.php");
if (isset($_GET['edit'])) {

    $id = $_GET["id"];
}

$id        = $_REQUEST['id'];
$sql       = "SELECT * FROM system_contact WHERE id = '$id'";
$dataSave  = $connection->query($sql);
$inputData = $dataSave->fetch_array(MYSQLI_BOTH);

?>
<section class="contSection containerForm flex">
	<div class="contentForm flex">
		<form id="form" class="form flex" action="./php/update.php?id=<?php echo $inputData['id']; ?>"
		 method="post" accept-charset="utf-8" onsubmit="return validationForm();" 
		 name="form">
				<div class="contInfo flex">
					<h2 class="titleForm">Datos de contacto</h2>
					<div class="contInput flex">
						<div class="icon flex">
							<span class="icon-user"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="name" type="text" name="name"  placeholder="Nombre" value="<?php echo $inputData['name']; ?>">
						</div>
					</div>
					<div class="contInput flex">
						<div class="icon flex">
							<span class="icon-envelop"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="email" type="email" name="email"  placeholder="Correo Electronico" value="<?php echo $inputData['email']; ?>">
						</div>
					</div>
					<div class="contInput flex">
						<div class="icon flex">
							<span class="icon-phone"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="phone" type="tel" name="phone"  placeholder="Teléfono" required="" value="<?php echo $inputData['phone']; ?>">
						</div>
					</div>
				</div>
				<div class="contInfo flex">
					<div class="contInput flex">
						<div class="icon flex">
							<span class="icon-quotes-left"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="subject" type="text" name="subject"  placeholder="Asunto" required="" value="<?php echo $inputData['subject']; ?>">
						</div>
					</div>
					<div class="contInput_2 flex">
						<div class="icon flex">
							<span class="icon-calendar"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="dateTime" type="date" name="datatime"  value="<?php echo $inputData['datatime']; ?>">
						</div>
					</div>
					<div class="contInput_2 flex">
						<div class="icon flex">
							<span class="icon-clock"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="time" type="time" name="timeCont"  value="<?php echo $inputData['timeCont']; ?>">
						</div>
					</div>
				</div>
				<div class="contInfo flex">
					<div class="contText flex">
						<div class="icon flex">
							<span class="icon-bubble"></span>
						</div>
						<div class="text flex">
							<textarea class="styleText" id="message" name="message" placeholder="En que podemos ayudarte"
							value="<?php echo $inputData['message']; ?>"></textarea>
						</div>
					</div>
				</div>
				<div class="contInfo contBtn flex">
					<input id="send" type="submit" name="send" value="Enviar">
				</div>
		</form>
	</div>
</section>
</body>
</html>