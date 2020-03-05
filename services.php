<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Services</title>
	<link rel="icon" href="./img/icon.ico">
	<link rel="stylesheet" href="./css/style-services.css">
	<link rel="stylesheet" href="./css/style-header.css">
	<link rel="stylesheet" href="./css/style-footer.css">
	<link rel="stylesheet" href="./css/style-icon.css">
	<link rel="stylesheet" href="./css/style-slider.css">
	<link rel="stylesheet" href="./css/style-modalForm.css">
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
<section id="containerSlider" class="flex">
 		<div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="./img/slider1.jpg"/>
                </li>
                <li>
                    <img src="./img/slider2.jpg"/>
                </li>
                <li>
                    <img src="./img/slider3.jpg"/>
                </li>
            </ul>
		</div>
		<div class="contInfoSlider flex">
			<div class="contInfo flex">
				<p>Existimos para brindar a la industria las mejores soluciones.</p>
			</div>
		</div>
		<div class="btnPageNew flex">
			<a href="#" id="btnPageNew">
				VIEW RECENT WORK
			</a>
		</div>
		<div class="btnModal flex">
			<a id="openModal" href="#" title="">
				CONTACT
			</a>
		</div>
		<div id="containerModal" class="flex">
			<div class="contModal flex">
				<div class="contForm flex">
			<form id="form" class="flex" action="./validationMail.php" method="post" accept-charset="utf-8">
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
</section>
<section class="contSection containerServices flex">
	<div class="contentTitle flex">
		<h2 class="title">
			SERVICES
		</h2>
		<hr>
		<p class="paragraph">
			Diseñamos, construimos y desarrollamos <br>
			Nuestro principal argumento de venta es la combinación de nuestro servicio técnico cualificado
		</p>
	</div>
	<div class="contentServices flex" >
		<div class="contServices flex">
			<div class="services flex">
				<div class="contIcon flex">
					<div class="icon flex">
						<span class="icon-cog flex"></span>
					</div>
					<div class="contTitle flex">
						<h2 class="title flex">
							Maintenance of the Industri
						</h2>
					</div>
				</div>
				<div class="contInfo flex">
					<div class="contParagarph flex">
						<p class="paragraph flex">
							Ofrecemos soluciones efectivas e ideales para la industria, así como sistemas de alto rendimiento que protegen las naves industriales, evitando daños y retrasos en la producción causados por filtraciones de agua, humedad, viento o polvo.
						</p>
					</div>
					<div id="contMore" class="contDropMore flex">
						<p class="paragraph flex">
							Ofrecemos soluciones efectivas e ideales para la industria, así como sistemas de alto rendimiento que protegen las naves industriales, evitando daños y retrasos en la producción causados por filtraciones de agua, humedad, viento o polvo.
						</p>
					</div>
					<div class="contBtn flex">
						<a id="btnMoreService" class="btnMoreService" title="view more">
							View More
						</a>
					</div>
				</div>
			</div>
			<div class="services flex">
				<div class="contIcon flex">
					<div class="icon flex">
						<span class="icon-office flex"></span>
					</div>
					<div class="contTitle flex">
						<h2 class="title flex">
							Maintenance of the Hotels
						</h2>
					</div>
				</div>
				<div class="contInfo flex">
					<div class="contParagarph flex">
						<p class="paragraph flex">
							Ofrecemos soluciones efectivas e ideales para la industria, así como sistemas de alto rendimiento que protegen las naves industriales, evitando daños y retrasos en la producción causados por filtraciones de agua, humedad, viento o polvo.
						</p>
					</div>
					<div id="contMore2" class="contDropMore flex">
						<p class="paragraph flex">
							Ofrecemos soluciones efectivas e ideales para la industria, así como sistemas de alto rendimiento que protegen las naves industriales, evitando daños y retrasos en la producción causados por filtraciones de agua, humedad, viento o polvo.
						</p>
					</div>
					<div class="contBtn flex">
						<a id="btnMoreService2" class="btnMoreService"  title="view more">
							View More
						</a>
					</div>
				</div>
			</div>
			<div class="services flex">
				<div class="contIcon flex">
					<div class="icon flex">
						<span class="icon-droplet flex"></span>
					</div>
					<div class="contTitle flex">
						<h2 class="title flex">
							Maintenance Of  Water Plants
						</h2>
					</div>
				</div>
				<div class="contInfo flex">
					<div class="contParagarph flex">
						<p class="paragraph flex">
							Ofrecemos soluciones efectivas e ideales para la industria, así como sistemas de alto rendimiento que protegen las naves industriales, evitando daños y retrasos en la producción causados por filtraciones de agua, humedad, viento o polvo.
						</p>
					</div>
					<div id="contMore3" class="contDropMore flex">
						<p class="paragraph flex">
							Ofrecemos soluciones efectivas e ideales para la industria, así como sistemas de alto rendimiento que protegen las naves industriales, evitando daños y retrasos en la producción causados por filtraciones de agua, humedad, viento o polvo.
						</p>
					</div>
					<div class="contBtn flex">
						<a id="btnMoreService3" class="btnMoreService" title="view more">
							View More
						</a>
					</div>
				</div>
			</div>
		</div>
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
	<div class="contentBrands flex">
		<div class="contBrands flex">
			<img class="flex" src="./img/brands.png" alt="our brands">
		</div>
	</div>
</section>
 <?php
include './footer.php';
?>
</body>
</html>