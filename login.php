<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portal Semagen</title>
	<link rel="icon" href="./img/icon.ico">
	<link rel="stylesheet" href="./css/style-login.css">
	<link rel="stylesheet" href="./css/style-header.css">
	<link rel="stylesheet" href="./css/style-footer.css">
	<link rel="stylesheet" href="./css/style-icon.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<script src="./js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8" ></script>
</head>
<body>
<section class="containerLogin flex">
	<div class="contentLogo flex">
		<div class="contLogo flex">
			<img class="flex" src="./img/miniLogo.png" alt="semagen">
		</div>
	</div>
	<div class="contentLogin flex">
<?php
$erroruser = isset($_GET["erroruser"]);
if ($erroruser == "yes") {
    echo '<font color="red"><b>Datos incorrectos</b></font><br></br>';
}
?>
		<form action="./php/security-login.php" method="post" id="formLogin" class="formLogin flex">
			<div class="contInput flex">
				<div class="Icon flex">
					<span class="icon-user-plus"></span>
				</div>
				<div class="inputForm  flex">
					<input id="user" class=" user flex" type="text" name="user" value="" placeholder="Usuario">
				</div>
			</div>
			<div class="contInput flex">
				<div class="Icon flex">
					<span class="icon-user-plus"></span>
				</div>
				<div class="inputForm flex">
					<input id="password" class="
					password flex" type="password" name="password" value="" placeholder="Password">
				</div>
			</div>
			<div class="contBtn flex">
				<input class="flex" type="submit" name="Login" value="Login">
			</div>
		</form>
	</div>
</section>
</body>
</html>
