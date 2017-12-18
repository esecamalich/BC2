<?php
/**
 * MIT License
 * ===========
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * -----------------------------------------------------------------------
 * The demo is running all the Mobile_Detect's internal methods.
 * Here you can spot detections errors instantly.
 * -----------------------------------------------------------------------
 *
 * @author      Serban Ghita <serbanghita@gmail.com>
 * @license     MIT License https://github.com/serbanghita/Mobile-Detect/blob/master/LICENSE.txt
 *
 */

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();

?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,700" rel="stylesheet">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>CB2</title>
		<link rel="apple-touch-icon" href="images/apple-touch-icon-precomposed.png"/>
		<link rel="apple-touch-startup-image" href="images/a-300.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="#008178" />
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="css/main.css" />
		<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie.css" />
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- CONTACT FORM -->
		<section class="block container bg-dark txt-white intro contacto">
			<?php include('includes/main-nav.php'); ?>
			<div class="txt-center container-contact">
				<h1>Escríbenos</h1>
				<form class="form contact-form">
					<input type="text" placeholder="Nombre" />
					<input type="email" placeholder="Email" />
					<input type="text" placeholder="Título" />
					<textarea name="Mensaje" placeholder="Mensaje"></textarea>
					<input type="submit" value="Enviar" />
				</form>
			</div>
		</section>
		<!-- /CONTACT FORM -->
		<!-- CONTACT BOTTOM -->
		<section class="container bg-white pad-20 txt-gray txt-center contact-btm">
			<div class="max-w">
				<p class="mas-info">
					Para más información, póngase en contacto con nosotros, será un placer atenderle.
				</p>
				<ul class="list list-contact">
					<li>
						<img src="images/icon-tel.png" alt="Teléfono" title="Teléfono" />
						<p>
							+52 (662) 301-31-45<br />
							Lunes a viernes (9am - 5pm)
						</p>
					</li>
					<li>
						<img src="images/icon-email.png" alt="Email" title="Email" />
						<p>
							Correo : <a href="mailto:info@bc2.mx">info@bc2.mx</a><br />
							Web: <a href="http://www.bc2.mx">www.bc2.mx</a>
						</p>
					</li>
					<li>
						<img src="images/icon-ubicacion.png" alt="Ubicación" title="Ubicación" />
						<p>
							Hermosillo, Sonora, México<br />
							Blvd Kino 415, Col. Contry club
						</p>
					</li>
				</ul>
			</div>
		</section>
		<!-- /CONTACT BOTTOM -->
		<?php include('includes/footer.php'); ?>
		<!-- SCRIPTS -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>
		if (!window.jQuery) {
		    document.write('<script src="js/jquery.js"><\/script>');
		}
		</script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/jquery.sticky.js"></script>
		<!-- /SCRIPTS -->
	</body>
</html>
