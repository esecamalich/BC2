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
		<section class="container bg-dark pad-bot-15 txt-white">
			<?php include('includes/main-nav.php'); ?>
		</section>
		<!-- /INTRO -->
		<!-- DESTACADAS -->
		<section class="container bg-white pad-20 col-3 publicaciones-destacadas ultimas-publicaciones">
			<div class="max-w">
				<hgroup class="txt-center txt-gray sec-title">
					<h2 class="txt-blue">Economía</h2>
				</hgroup>
				<ul class="list list-destacadas">
					<li class="list-item prev-noticia dest-left">
						<a href="detalle.php" class="pub-thumb">
							<img src="images/banderas.jpg" alt="Bandera" title="Bandera" />
						</a>
						<h1>
							<a href="detalle.php">
								Adquisición de bienes raíces por extranjeros en México.
							</a>
						</h1>
						<p>
							México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
						</p>
						<ul class="single-cat-list">
							<li class="list-item cat-link">
								<a href="categoria.php">Economía</a>
							</li>
						</ul>
						<span class="date txt-gray">9 de Noviembre, 2017</span>
					</li>
					<div class="dest-right">
						<li class="list-item prev-noticia">
							<a href="detalle.php" class="pub-thumb">
								<img src="images/catal.jpg" alt="Catal" title="Catal" />
							</a>
							<div class="info-prev">
								<h1>
									<a href="detalle.php">
										Cataluña proclama la victoria en referéndum.
									</a>
								</h1>
								<p>
									México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
								</p>
								<ul class="single-cat-list">
									<li class="list-item cat-link">
										<a href="categoria.php">Economía</a>
									</li>
								</ul>
								<span class="date txt-gray">9 de Noviembre, 2017</span>
							</div>
						</li>
						<li class="list-item prev-noticia">
							<a href="detalle.php" class="pub-thumb">
								<img src="images/banderas.jpg" alt="Bandera" title="Bandera" />
							</a>
							<div class="info-prev">
								<h1>
									<a href="detalle.php">
										Adquisición de bienes raíces por extranjeros en México.
									</a>
								</h1>
								<p>
									México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
								</p>
								<ul class="single-cat-list">
									<li class="list-item cat-link">
										<a href="categoria.php">Economía</a>
									</li>
								</ul>
								<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
						</li>
					</div>
				</ul>
			</div>
		</section>
		<!-- /DESTACADAS -->
		<!-- PUBLICACIONES RECIENTES -->
		<section class="container full-width bg-gray pad-20 publicaciones-recientes">
			<div class="max-w">
				<h5 class="txt-center txt-gray gray-title">Publicaciones recientes:</h5>
				<ul class="container-recientes">
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
					<li>
						<a href="single.php" class="left pub-thumb">
							<img src="images/square-banderas.jpg" alt="Banderas" title="Banderas" />
						</a>
						<div class="right">
							<h1>
								<a href="detalle.php">
									Adquisición de bienes raíces por extranjeros en México.
								</a>
							</h1>
							<p>
								México es un país con gran apertura a la inversión extranjera y cada vez implementa más medidas…
							</p>
							<ul class="single-cat-list">
								<li class="list-item cat-link">
									<a href="categoria.php">Economía</a>
								</li>
							</ul>
							<span class="date txt-gray">9 de Noviembre, 2017</span>
						</div>
					</li>
				</ul>
				<a href="#" class="underline txt-center txt-gray btn-mas">Ver Más</a>
			</div>
		</section>
		<!-- /PUBLICACIONES RECIENTES -->
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
