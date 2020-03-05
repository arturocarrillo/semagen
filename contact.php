<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contacto</title>
	<link rel="icon" href="./img/icon.ico">
	<link rel="stylesheet" href="./css/style-contact.css">
	<link rel="stylesheet" href="./css/style-header.css">
	<link rel="stylesheet" href="./css/style-footer.css">
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
<section class="contSection containerMap flex">
	<div class="contentTitle flex">
		<h2 class="title">
			LOCATION
		</h2>
		<hr>
	</div>
	<div class="contentMap flex">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7449.9998924110905!2d-89.7034886943355!3d20.99263927414901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567355b0283aa3%3A0x4ef03995295ab26c!2sPlaza+Bella+Los+Almendros!5e0!3m2!1ses-419!2smx!4v1527219397989" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="contentDataTime flex">
		<div class="contLocation flex">
			<div class="contIcon flex">
				<span class="icon-home flex"></span>
			</div>
			<div class="contInfo flex">
				<p class="paragraph ">
					Residentian Location
					<br>
					9288 Broadberry Avenue
					<br>
					Melbourne RC07D
				</p>
			</div>
		</div>
		<div class="contLocation flex">
			<div class="contIcon flex">
				<span class="icon-clock2 flex"></span>
			</div>
			<div class="contInfo flex">
				<p class="paragraph ">
					Monday - Friday:<span>9:00 AM - 19:00 PM</span>
				</p>
				<p class="paragraph ">
					Saturday:<span>9:00 AM - 14:00 PM</span>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="contSection containerForm flex">
	<div class="contentLogo flex">
		<div class="contLogo flex">
			<img class="flex" src="./img/miniLogo.png" alt="Semagen">
		</div>
	</div>
	<div class="anyQuestion flex">
		<div class="contInfo flex">
			<div class="contTitle flex">
				<h2 class="question flex">
					ANY QUESTIONS?
				</h2>
			</div>
			<div class="info flex">
				<p class="paragraph ">
					+(52)9999.99.99.99
					<br>
					suport@semagen.com
					<br>
					Residentian Location
					<br>
					9288 Broadberry Avenue
					<br>
					Melbourne RC07D
				</p>
			</div>
		</div>
	</div>
	<div class="contentForm flex">
		<form id="form" class="form flex" action="./validationMail.php" method="post" accept-charset="utf-8" onsubmit="return validationForm();" name="form">
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
							<input class="styleInput_1" id="dateTime" type="date" name="datatime" value="">
						</div>
					</div>
					<div class="contInput_2 flex">
						<div class="icon flex">
							<span class="icon-clock"></span>
						</div>
						<div class="input flex">
							<input class="styleInput_1" id="time" type="time" name="timeCont" value="">
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

</section>
<section class="contSection containerBrands flex">
	<div class="contentTitle flex">
		<h2 class="title">
			QUALITY OF SERVICE
		</h2>
		<hr>
		<p class="paragraph">
			Existimos para brindar a la industria seis servicios que son indispensables para mantener las instalaciones en perfectas condiciones
		</p>
	</div>
	<div class="contentBrands">
		<div class="contBrands">
			<img src="./img/brands.png" alt="our brands">
		</div>
	</div>
</section>
 <?php
include './footer.php';
?>
</body>
</html>