<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio</title>
	<link rel="icon" href="./img/icon.ico">
	<link rel="stylesheet" href="./css/style-index.css">
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
				<p>	Existimos para brindar a la industria las mejores soluciones.</p>
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
					<form id="form" class="form flex" action="./validationMail.php" method="post" accept-charset="utf-8"
					 onsubmit="return validationForm();" name="form">
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
								<input class="styleInput_1" id="phone" type="tel" name="phone" value="" placeholder="Teléfono" >
							</div>
						</div>
						</div>
						<div class="contInfo flex">
							<div class="contInput flex">
								<div class="icon flex">
									<span class="icon-quotes-left"></span>
								</div>
							<div class="input flex">
								<input class="styleInput_1" id="subject" type="text" name="subject" value="" placeholder="Asunto" >
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
				<div class="btnModalClose flex">
					<a href="#" id="closeModal">
						<span class="icon-cross"></span>
					</a>
				</div>
			</div>
		</div>
</section>
<section class="contSection containerAbout flex">
	<div class="contentAbout flex">
		<div class="contTitle flex">
			<h2 class="title">
				ABOUT
			</h2>
			<hr>
		</div>
		<div class="contentParagraph flex">
			<p class="paragraph">
				Somos una empresa 100% mexicana bajo los más altos estándares y certificaciones internacionales con un total respeto al medio ambiente y las comunidades
			</p>
		</div>
	</div>
</section>
<section class="contSection containerMaintenance flex">
	<div class="contentTitle flex">
		<h2 class="title">
			SPECIALIST  IN INDUSTRIAL MAINTENANCE
		</h2>
		<hr>
		<p class="paragraph">
			Nuestro servicio de mantenimiento integral MCI ha supuesto una revolución en el mantenimiento preventivo de equipos industriales.
		</p>

	</div>
	<div class="contentBox flex">
		<div class="maintenance flex">
			<div class="contMain flex">
				<div class="icon flex">
					<span class="icon-power flex"></span>
				</div>
			</div>
			<div class="contMain flex">
				<h2 class="mainTitle flex">
					Maintenance Electrical Industrial
				</h2>
				<hr>
			</div>
			<div class="contMain flex">
				<p class="mainParagraph">
					Desarrollado y aplicado por Cervisimag, ha demostrado su eficacia en la reducción de costes y en el aumento de la disponibilidad de la maquinaria.
				</p>
			</div>
			<div class="contentAfter flex">
				<div class="contInfo flex">
					<h2 class="titleInfo flex">
						Quality Of Service
					</h2>
					<h3 class="list ">
						- Controlar el estado de las máquinas industriales
					</h3>
					<h3 class="list ">
						- Detectar anomalías en los equipos
					</h3>
					<h3 class="list ">
						- Adelantarse a las averías de la maquinaria
					</h3>
					<h3 class="list ">
						- Planificar la reparación de forma preventiva
					</h3>
					<h3 class="list ">
						- Realizar la reparación con menos tiempo y menor coste
					</h3>
					<a id="openConact_1" class="btnMore " href="#" title="">CONTACT</a>
				</div>
			</div>
		</div>
		<div class="maintenance flex">
			<div class="contMain flex">
				<div class="icon flex">
					<span class="icon-droplet flex"></span>
				</div>
			</div>
			<div class="contMain flex">
				<h2 class="mainTitle flex">
					Maintenance For Water Plants
				</h2>
				<hr>
			</div>
			<div class="contMain flex">
				<p class="mainParagraph">
					Desarrollado y aplicado por Cervisimag, ha demostrado su eficacia en la reducción de costes y en el aumento de la disponibilidad de la maquinaria.
				</p>
			</div>
			<div class="contentAfter flex">
				<div class="contInfo flex">
					<h2 class="titleInfo flex">
						Quality Of Service
					</h2>
					<h3 class="list ">
						- Controlar el estado de las máquinas industriales
					</h3>
					<h3 class="list ">
						- Detectar anomalías en los equipos
					</h3>
					<h3 class="list ">
						- Adelantarse a las averías de la maquinaria
					</h3>
					<h3 class="list ">
						- Planificar la reparación de forma preventiva
					</h3>
					<h3 class="list ">
						- Realizar la reparación con menos tiempo y menor coste
					</h3>
					<a id="openConact_2" class="btnMore " href="#" title="">CONTACT</a>
				</div>
			</div>
		</div>
		<div class="maintenance flex">
			<div class="contMain flex">
				<div class="icon flex">
					<span class="icon-office flex"></span>
				</div>
			</div>
			<div class="contMain flex">
				<h2 class="mainTitle flex">
					Maintenance For Hotels
				</h2>
				<hr>
			</div>
			<div class="contMain flex">
				<p class="mainParagraph">
					Desarrollado y aplicado por Cervisimag, ha demostrado su eficacia en la reducción de costes y en el aumento de la disponibilidad de la maquinaria.
				</p>
			</div>
			<div class="contentAfter flex">
				<div class="contInfo flex">
					<h2 class="titleInfo flex">
						Quality Of Service
					</h2>
					<h3 class="list ">
						- Controlar el estado de las máquinas industriales
					</h3>
					<h3 class="list ">
						- Detectar anomalías en los equipos
					</h3>
					<h3 class="list ">
						- Adelantarse a las averías de la maquinaria
					</h3>
					<h3 class="list ">
						- Planificar la reparación de forma preventiva
					</h3>
					<h3 class="list ">
						- Realizar la reparación con menos tiempo y menor coste
					</h3>
					<a id="openConact_3" class="btnMore " href="#" title="">CONTACT</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contSection containerWork flex">
	<div class="contentTitle flex">
		<h2 class="title">
			Explore Recent Work
		</h2>
		<hr>
		<p class="paragraph">
			Nuestro principal argumento de venta es la combinación de nuestro servicio técnico cualificado y la calidad de las marcas que distribuimos: trabajamos con los mejores para dar a nuestros clientes la mejor respuesta.
		</p>
	</div>
	<div class="contentGalery flex">
		<div class="contThumb flex">
			<div class="thumb flex">
				<img src="./img/thumb1.jpg" alt="">
			</div>
			<div class="contInfo flex">
				<div class="icon flex">
					<a class="flex" href="./galery.php" title="more">
						<span class="icon-search"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="contThumb flex">
			<div class="thumb flex">
				<img src="./img/thumb2.jpg" alt="">
			</div>
			<div class="contInfo flex">
				<div class="icon flex">
					<a class="flex" href="./galery.php" title="more">
						<span class="icon-search"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="contThumb flex">
			<div class="thumb flex">
				<img src="./img/thumb3.jpg" alt="">
			</div>
			<div class="contInfo flex">
				<div class="icon flex">
					<a class="flex" href="./galery.php" title="more">
						<span class="icon-search"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contSection containerValues">
	<div class="contentTitle flex">
		<h2 class="title">
			OUR CORE VALUES
		</h2>
		<hr>
		<p class="paragraph">
			Responsabilidad / Trabajo en equipo / Innovación / Equidad y Honestidad.
		</p>

	</div>
	<div class="contentValues flex" >
		<div class="values flex">
			<div class="contValues flex">
				<div class="icon flex">
					<span class="icon-user-tie"></span>
				</div>
			</div>
			<div class="contValues flex">
				<h2 class="valuesTitle">
					Professional Team
				</h2>
			</div>
			<div class="contValues flex">
				<p class="valuesParagraph">
					Nos implicamos en los proyectos de nuestros clientes para garantizarles que se llevan la máquina que realmente necesitan para su negocio. En estos años, hemos conseguido su confianza gracias a nuestros puntos fuertes.
				</p>
			</div>
		</div>
		<div class="values flex">
			<div class="contValues flex">
				<div class="icon flex">
					<span class="icon-cog"></span>
				</div>
			</div>
			<div class="contValues flex">
				<h2 class="valuesTitle">
					Great Solutions
				</h2>
			</div>
			<div class="contValues flex">
				<p class="valuesParagraph">
					Los fundadores de Cervisimag acumulan una experiencia de más de 40 años basada en conocer las necesidades de nuestros clientes y en proporcionarles el mejor servicio preventa y postventa
				</p>
			</div>
		</div>
		<div class="values flex">
			<div class="contValues flex">
				<div class="icon flex">
					<span class="icon-stats-dots"></span>
				</div>
			</div>
			<div class="contValues flex">
				<h2 class="valuesTitle">
					Highest Solutions
				</h2>
			</div>
			<div class="contValues flex">
				<p class="valuesParagraph">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
	</div>
</section>
<section class="contSection containerMap flex">
	<div class="contentTitle flex">
		<h2 class="title">
			LOCATION
		</h2>
		<hr>
		<p class="paragraph">
			SEMAGEN es la mejor opción para desarrollar y concretar exitosamente tus proyectos.
		</p>

	</div>
	<div class="contentMap flex">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7449.9998924110905!2d-89.7034886943355!3d20.99263927414901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567355b0283aa3%3A0x4ef03995295ab26c!2sPlaza+Bella+Los+Almendros!5e0!3m2!1ses-419!2smx!4v1527219397989" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>
<?php
include './footer.php';
?>
</body>
</html>
