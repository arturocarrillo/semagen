<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form</title>
	<link rel="stylesheet" href="./css/style-modalForm.css">
	<link rel="stylesheet" href="./css/style-icon.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
</head>
<body>
<div id="containerModal" class="flex">
	<div class="contModal flex">
		<div class="contForm flex">
			<form id="form" class="flex" action="" method="post" accept-charset="utf-8">
				<div class="contInfo flex">
					<h2 class="titleForm">Datos de contacto</h2>
					<div class="contInput flex">
						<div class="icon flex">
							<span class="icon-user"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="name" type="text" name="name" value="" placeholder="Nombre">
						</div>
					</div>
					<div class="contInput flex">
						<div class="icon flex">
							<span class="icon-envelop"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="email" type="email" name="email" value="" placeholder="Correo Electronico">
						</div>
					</div>
					<div class="contInput flex">
						<div class="icon flex">
							<span class="icon-phone"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="phone" type="tel" name="phone" value="" placeholder="Teléfono" required="">
						</div>
					</div>
				</div>
				<div class="contInfo flex">
					<div class="contInput flex">
						<div class="icon flex">
							<span class="icon-quotes-left"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="subject" type="text" name="subject" value="" placeholder="Asunto" required="">
						</div>
					</div>
					<div class="contInput_2 flex">
						<div class="icon flex">
							<span class="icon-calendar"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="dateTime" type="date" name="datetime" value="">
						</div>
					</div>
					<div class="contInput_2 flex">
						<div class="icon flex">
							<span class="icon-clock"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="time" type="time" name="time" value="">
						</div>
					</div>
				</div>
				<div class="contInfo flex">
					<div class="contText flex">
						<div class="icon flex">
							<span class="icon-bubble"></span>
						</div>
						<div class="text flex">
							<textarea class="styleText" id="message" name="message" placeholder="En que podemos ayudarte"></textarea>
						</div>
					</div>
				</div>
				<div class="contInfo contBtn flex">
					<input id="send" type="submit" name="send" value="Enviar">
				</div>
			</form>
		</div>
		<div class="btnModalClose flex">
			<a href="#" id="closeModal">
				<span class="icon-cross"></span>
			</a>
		</div>
	</div>
</div>
</body>
</html>
