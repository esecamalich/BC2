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
		<!-- INTRO -->
		<section class="block container bg-dark txt-white intro">
			<?php include('includes/main-nav.php'); ?>
		</section>
		<!-- /INTRO -->
		<!-- ACERCA -->
		<section class="clear pad-20 container acerca">
			<div class="block-ctr acerca txt-white txt-center">
				<h1>Acerca de Nosotros</h1>
				<p class="bg-white pad-20 acerca-txt">
					BC2 es un espacio para compartir información relevante sobre el mundo de los negocios; principalmente en materia corporativa, tributaria, legal y financiera.
				</p>
			</div>
		</section>
		<div class="bg-gray full-w pad-40 acerca-callto">
			<a href="nosotros.php" class="center btn btn-outline btn-blue btn-acerca">
				Más sobre nosotros
			</a>
		</div>
		<!-- /ACERCA -->
		<!-- DESTACADAS -->
		<section class="container bg-white pad-20 col-3 publicaciones-destacadas">
			<div class="max-w">
				<h2>Publicaciones Destacadas</h2>
				<ul class="col-3-list list list-destacadas">
					<li class="list-item prev-noticia">
						<a href="detalle.php">
							<img src="images/banderas.jpg" alt="Bandera" title="Bandera" />
						</a>
						<h1>
							<a href="detalle.php">
								Adquisición de bienes raíces por extranjeros en México.
							</a>
						</h1>
						<ul class="single-cat-list">
							<li class="list-item cat-link">
								<a href="categoria.php">Economía</a>
							</li>
						</ul>
						<span class="date txt-gray">9 de Noviembre, 2017</span>
					</li>
					<li class="list-item prev-noticia">
						<a href="detalle.php">
							<img src="images/catal.jpg" alt="Catal" title="Catal" />
						</a>
						<h1>
							<a href="detalle.php">
								Cataluña proclama la victoria en referéndum.
							</a>
						</h1>
						<ul class="single-cat-list">
							<li class="list-item cat-link">
								<a href="categoria.php">Economía</a>
							</li>
						</ul>
						<span class="date txt-gray">9 de Noviembre, 2017</span>
					</li>
					<li class="list-item prev-noticia">
						<a href="detalle.php">
							<img src="images/banderas.jpg" alt="Bandera" title="Bandera" />
						</a>
						<h1>
							<a href="detalle.php">
								Adquisición de bienes raíces por extranjeros en México.
							</a>
						</h1>
						<ul class="single-cat-list">
							<li class="list-item cat-link">
								<a href="categoria.php">Economía</a>
							</li>
						</ul>
						<span class="date txt-gray">9 de Noviembre, 2017</span>
					</li>
				</ul>
			</div>
		</section>
		<!-- /DESTACADAS -->
		<?php if ( $detect->isMobile() && $detect->isTablet() ) : ?>
		<!-- CATEGORÍAS -->
		<section class="container full-width bg-white categorias">
			<div class="pad-20 max-w">
				<h2>Categorías</h2>
			</div>
			<ul class="list cat-list">
				<li class="list-item cat-list-block cat-legal">
					<a href="categoria.php">
						<div class="cat-title">
							<h1 class="left">Legal</h1>
							<span class="right">+</span>
						</div>
					</a>
				</li>
				<li class="list-item cat-list-block cat-financiera">
					<a href="categoria.php">
						<div class="cat-title">
							<h1 class="left">Financiera</h1>
							<span class="right">+</span>
						</div>
					</a>
				</li>
				<li class="list-item cat-list-block cat-corporativa">
					<a href="categoria.php">
						<div class="cat-title">
							<h1 class="left">Corporativa</h1>
							<span class="right">+</span>
						</div>
					</a>
				</li>
				<li class="list-item cat-list-block cat-economia">
					<a href="categoria.php">
						<div class="cat-title">
							<h1 class="left">Economía</h1>
							<span class="right">+</span>
						</div>
					</a>
				</li>
				<li class="list-item cat-list-block cat-fiscal">
					<a href="categoria.php">
						<div class="cat-title">
							<h1 class="left">Fiscal</h1>
							<span class="right">+</span>
						</div>
					</a>
				</li>
			</ul>
		</section>
		<!-- /CATEGORÍAS -->
		<?php endif; ?>
		<!-- EQUIPO -->
		<section class="container bg-white pad-20 col-4 equipo">
			<div class="max-w">
				<h2>¿Quiénes Somos?</h2>
				<ul class="list col-4-list list-equipo">
					<li class="list-item equipo-member">
						<img src="images/equipo.jpg" alt="Carlos Sánchez" title="Carlos Sánchez" />
						<hgroup class="equipo-nombre">
							<h3>Carlos Sánchez</h3>
							<h5>Avanta</h5>
							<h4>Editor</h4>
						</hgroup>
					</li>
					<li class="list-item equipo-member">
						<img src="images/equipo.jpg" alt="Carlos Sánchez" title="Carlos Sánchez" />
						<hgroup class="equipo-nombre">
							<h3>Carlos Sánchez</h3>
							<h5>Avanta</h5>
							<h4>Editor</h4>
						</hgroup>
					</li>
					<li class="list-item equipo-member">
						<img src="images/equipo.jpg" alt="Carlos Sánchez" title="Carlos Sánchez" />
						<hgroup class="equipo-nombre">
							<h3>Carlos Sánchez</h3>
							<h5>Avanta</h5>
							<h4>Editor</h4>
						</hgroup>
					</li>
					<li class="list-item equipo-member">
						<img src="images/equipo.jpg" alt="Carlos Sánchez" title="Carlos Sánchez" />
						<hgroup class="equipo-nombre">
							<h3>Carlos Sánchez</h3>
							<h5>Avanta</h5>
							<h4>Editor</h4>
						</hgroup>
					</li>
				</ul>
			</div>
		</section>
		<!-- /EQUIPO -->
		<!-- RELACIONADOS -->
		<section class="container full-width bg-gray pad-20 proyectos-relacionados">
			<div class="max-w">
				<h2>Proyectos Relacionados</h2>
				<ul class="list list-proyectos">
					<li class="list-item proyecto-single">
						<a href="#">
							<img src="images/logo-bcc.png" alt="BCC" title="BCC" />
						</a>
					</li>
					<li class="list-item proyecto-single">
						<a href="#">
							<img src="images/logo-avanta.png" alt="Avanta" title="Avanta" />
						</a>
					</li>
					<li class="list-item proyecto-single">
						<a href="#">
							<img src="images/logo-dreamx.png" alt="DreaMX" title="DreaMX" />
						</a>
					</li>
					<li class="list-item proyecto-single">
						<a href="#">
							<img src="images/logo-idea.png" alt="Idea" title="Idea" />
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- /RELACIONADOS -->
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
