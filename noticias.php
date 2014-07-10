<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>
	<html class="no-js lt-ie9" lang="en">
	<![endif]-->
	<!--[if gt IE 8]>
		<!-->
		<html class="no-js" lang="en">
		<!--<![endif]-->

		<head>
			<meta charset="utf-8" />
			<!-- Set the viewport width to device width for mobile -->
			<title>ENVÉS: Diseño Sostenible</title>
			<!-- Included CSS Files (Uncompressed) -->
			<!-- <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
			<!-- Included CSS Files (Compressed) -->
			<link href="img/ico.png" rel="shortcut icon" type="image/x-icon">
			<link href="img/ico.png" rel="icon" type="image/x-icon">
			<link href="img/ico.gif" rel="icon" type="image/gif">
			<link rel="stylesheet" href="stylesheets/foundation.min.css">
			<link rel="stylesheet" href="stylesheets/app.css">
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<link href="stylesheets/jquery.bxslider.css" rel="stylesheet" />
			<script type='text/javascript'>
				//<![CDATA[
				$(window).load(function() {
					$('.scroll_item').on('click', function() {
						var elem = $('#' + $(this).data('page')),
							scroll = elem.offset().top;

						$('body, html').animate({
							scrollTop: scroll
						}, 500);

						$(this).addClass('scroll_item_active')
							.siblings('.scroll_item_active')
							.removeClass('scroll_item_active');
					});

					$(window).on('scroll', function(e) {
						var elems = $('#first, #second, #third, #fourth'),
							scrolled = $(this).scrollTop();

						var dataPage = elems.filter(function() {
							return $(this).offset().top + ($(this).height() / 2) >= scrolled;
						}).first();

						$('.scroll_item[data-page="' + dataPage.prop('id') + '"]').addClass('scroll_item_active')
							.siblings('.scroll_item_active')
							.removeClass('scroll_item_active');
					}).trigger('scroll');
				}); //]]>
			</script>
		</head>

		<body>
			<div id="scroll">
				<div data-page="first" class="scroll_item">&nbsp;</div>
				<div data-page="second" class="scroll_item">&nbsp;</div>
			</div>
			<div class="main_menu">
				<div id="content_menu">
				 <div id="menu_logo"><a href="index.php">enves</a></div>
				   <div id="gallery_six"><a href="index.php#anchor_portafolio_home2">enves</a></div>
						<div id="menu_items_container">
							<ul>
								<li><a href="nosotros.php"  >NOSOTROS</a></li>
								<li><a href="proyectos.php">PROYECTOS</a></li>
								<li><a href="productos.php">PRODUCTOS</a></li>
								<li><a href="eco.php">ECO-IMPRESIÓN</a></li>
								<li><a href="comunidades.php">COMUNIDADES</a></li>
								<li><a href="noticias.php" class="main_menu_active"> NOTICIAS</a></li>
								<li><a href="contacto.php">CONTACTO</a></li>
							</ul>
						</div>
					<div id="menu_right_items">
						<div id="b_menu"><a href="http://www.sistemab.org" target="_blank">b_menu</a></div>
						<div id="facebook_menu"><a href="https://www.facebook.com/EnvesColombia?fref=ts" target="_blank">facebook_menu</a></div>
					</div>
				</div>
			</div>
			<div class="light" id="first">
				<div class="row">
					<div class="title">
						<div class="twelve column main_title2">NOTICIAS</div>
					</div>
				</div>
				<div class="row">
					<div class="six column subtitle5">Ut non pulvinar ante,
						<strong>vitae</strong>convallis eros</div>
					<div class="six column" style="float:left;">
						<div id="social_networks">SÍGUENOS
							<div id="social_networks_icon">
								<a href="https://www.facebook.com/EnvesColombia?fref=ts" target="_blank">
									<img src="img/fb.jpg" alt="" />
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="six column">
						<div class="date_image">
							<div class="main_date">
								<div class="number_date">18</div>
								<div class="month_date">JUN</div>
							</div>
							<img src="img/noticias/noticia_04.jpg" alt="" />
						</div>
						<div class="date">Junio 18 de 2014 By Jorge Burgos</div>
						<span class="subtitle6">FIMA 2014</span>
						<br>
						<p class="secondary_p">Tuvimos una exitosa participación en FIMA, con un stand diseñado y producido por nosotros, en donde expusimos toda nuestra filosofía, empresa, productos y servicios; tuvimos miles de visitantes con los que hicimos muy importantes contactos, además en nuestro Stand tuvimos un invitado muy especial a Laura Velez directora ejecutiva del Sistema B en Colombia.</p>
					</div>
					<div class="six column">
						<div class="date_image">
							<div class="main_date">
								<div class="number_date">13</div>
								<div class="month_date">JUN</div>
							</div>
							<img src="img/noticias/noticia_03.jpg" alt="" />
						</div>
						<div class="date">JUNIO 13 de 2014 By Ximena Vélez</div>
						<span class="subtitle6">PRENSA</span>
						<br>
						<p class="secondary_p">

						<a href="http://ireport.cnn.com/docs/DOC-1127699">Artículo en CNN para web</a>,
						<a href="http://issuu.com/centrors/docs/rs41-caso-pyme-enves/2">Artículo en la Revista RS</a>,
						<a href="" http://www.cmi.com.co/?i="emisiones">Nota en el noticiero CM&</a>,
						<a href="http://www.sistemab.org/sistema-b-en-la-feria-internacional-del-medioambiente-fima-colombia">News letter Sistema B:</a></p>
					</div>
				</div>
			</div>
			<div class="light-1" id="second">
				<div class="row news_2">
					<div class="twelve columns small-news">
						<div class="row collapse">
							<div class="four columns">
								<div class="date_image2">
									<div class="main_date2">
										<div class="number_date2">04</div>
										<div class="month_date2">JUN</div>
									</div>
									<img src="img/noticias/noticia_01.jpg" alt="" />
								</div>
							</div>
							<div class="eight columns">
								<div class="news_small">
									<div class="date">JUNIO 4 de 2014 By Ximena Vélez</div>
									<span class="subtitle6">COLOMBIA RESPONSABLE 2013</span>
									<br>
									<p class="secondary_p">Diseñamos el Stand para el grupo de empresas B Colombianas de las cuales hacemos parte, en esta feria quisimos contarle al público que nuestra filosofía como diseñadores es el diseño al servicio de la sociedad y que las comunidades necesitan del apoyo de aquellas empresas que tienen el poder de jalonar la economía, ese fue nuestro mensaje.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="twelve columns small-news">
						<div class="row collapse">
							<div class="four columns">
								<div class="date_image2">
									<div class="main_date2">
										<div class="number_date2">25</div>
										<div class="month_date2">MAY</div>
									</div>
									<img src="img/noticias/noticia_02.jpg" alt="" />
								</div>
							</div>
							<div class="eight columns">
								<div class="news_small">
									<div class="date">MAYO 25 de 2014 By Ximena Vélez</div>
									<span class="subtitle6">NOS CERTIFICAMOS COMO EMPRESA B</span>
									<br>
									<p class="secondary_p">En Diciembre de 2012 nos certificamos como una de las empresas B del mundo, las empresas B somos líderes de nuevas fuerzas económicas y estamos en permanente evolución http://www.sistemab.org/espanol/la-empresa-b/porque-ser-una-empresa-b</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include_once 'includes/footer.php';?>
		</body>

		</html>