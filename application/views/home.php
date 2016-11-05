<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site do artista visual Susano Correia.">
	<meta name="author" content="Susano Correia">
	<meta name="google-site-verification" content="susano-correia" />

	<link href="<?php echo base_url('assets/img/ico.png'); ?>" rel="shortcut icon">

	<title>Susano Correia</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/css/agency.css'); ?>" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Fjalla+One|Sancreek|Snowburst+One|Metal+Mania' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top" id="label-susano-correia">
				Susano Correia
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right" style="margin-top: 4px;">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>

				<li>
					<a class="page-scroll" href="#sobreoartista"><?php echo $t['menu-sobre-o-artista']; ?></a>
				</li>

				<li>
					<a class="page-scroll" href="#galeria"><?php echo $t['menu-galeria']; ?></a>
				</li>
				<li>
					<a class="page-scroll" href="#exposicoes"><?php echo $t['menu-exposicoes']; ?></a>
				</li>
				<li>
					<a href="http://notasvisuais.com" target="_blank"><?php echo $t['menu-blog']; ?></a>
				</li>
				<li>
					<a href="http://galeriasusanocorreia.com.br" target="_blank"><?php echo $t['menu-loja']; ?></a>
				</li>
				<li>
					<a class="page-scroll" href="#contact"><?php echo $t['menu-contato']; ?></a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<div style="width:100%; height: 100%; background-color:green; position: absolute; top:0px; background: black;">

</div>

<div style="width:100%; height: 100%; background-image: url(assets/img/header/0.jpg); background-position: center center;
	background-size: auto auto; position: absolute; top:0px;" id="h0">

</div>
<div style="width:100%; height: 100%; background-image: url(assets/img/header/1.jpg); background-position: center center;
	background-size: auto auto; position: absolute; top:0px; display:none;" id="h1">

</div>
<div style="width:100%; height: 100%; background-image: url(assets/img/header/2.jpg); background-position: center center;
	background-size: auto auto; position: absolute; top:0px; display:none;" id="h2">

</div>

<div style="width:100%; height: 100%; background-image: url(assets/img/header/3.jpg); background-position: center center;
	background-size: auto auto; position: absolute; top:0px; display:none;" id="h3">

</div>

<div style="width:100%; height: 100%; background-image: url(assets/img/header/4.jpg); background-position: center center;
	background-size: auto auto; position: absolute; top:0px; display:none;" id="h4">

</div>

<!-- Header -->
<header>
	<div class="intro-text">
		<div style="font-size:22px;"><?php echo $t['header-ola']; ?></div>
		<div style="font-size:42px;"><?php echo $t['header-bem-vindo']; ?></div>
		<div>
		<br>
		<ul class="list-inline social-buttons">
			<li>
				<a href="https://www.instagram.com/notasvisuais/" target="_blank"><i class="fa fa-instagram"></i></a>
			</li>
			<li><a href="https://www.facebook.com/susanocorreia" target="_blank"><i class="fa fa-facebook"></i></a>
			<li><a href="https://www.youtube.com/user/scsuca" target="_blank"><i class="fa fa-youtube"></i></a>
			<li><a href="https://twitter.com/susanocorreia" target="_blank"><i class="fa fa-twitter"></i></a>
			</li>
		</ul>
	</div>
</header>


<!-- Sobre o Artista Section -->
<section id="sobreoartista">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading"><?php echo $t['menu-sobre-o-artista']; ?></h2>
			</div>
		</div>
		<div class="row" style="text-align: center; margin:15px 0px 25px 0px">
			<img src="<?php echo base_url('assets/img/foto-autor.jpg'); ?>" width="200px" align="center" alt="">
		</div>
		<div class="row text-center">
			<div class="col-lg-12" style="text-align: justify">
				<p class="text-muted"><?php echo $t['descricao-susano']; ?></p>
			</div>
		</div>
		<div class="row" style="text-align: center; margin:15px 0px 25px 0px">
			<img src="<?php echo base_url('assets/img/mosaico.jpg'); ?>" style="max-width: 100%" align="center" alt="">
		</div>

	</div>
</section>

<!-- Galeria Grid Section -->
<section id="galeria" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading"><?php echo $t['menu-galeria']; ?></h2>
				<h3 class="section-subheading text-muted"><?php echo $t['galeria-bottom']; ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-cante-para-mim.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Cante Para Mim</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-morte-embruxada.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Morte Embruxada</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-eu-transbordo-eu.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Eu Transbordo Eu</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-rosa-embruxada.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Rosa Embruxada</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-fome-embruxada.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Fome Embruxada</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-embruxamento-de-coracao.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Embruxamento de Coração</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-ignorante-proativo.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Ignorante Proativo</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-menino-com-catavento.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Menino com Cata-vento</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-cante-para-mim-estudo.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Cante Para Mim (estudo)</h4>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-homem-chorando-homens-que-nao-choram.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Homem Chorando Homens que Não Choram</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal11" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-o-pensador-meio-burro.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>O Pensador Meio Burro</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal15" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-homem-feliz-para-sempre-embruxado.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Homem Feliz Para Sempre Embruxado</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal13" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-eu-transbordo-eu-estudo.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Eu Transbordo Eu (estudo)</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal14" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-ignorante-proativo-estudo.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Ignorante Proativo (estudo)</h4>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal16" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-homem-crussificado-em-si-com-osso-entalado.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Homem Crucificado Em Si com Osso Entalado</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal17" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo base_url('assets/img/galeria/ico-o-escroto-triste.jpg'); ?>" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>O Escroto Triste</h4>
				</div>
			</div>

		</div>

	</div>
</section>

<!-- About Section -->
<section id="exposicoes">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading"><?php echo $t['menu-exposicoes']; ?></h2>
			</div>
		</div>
		<div class="row">
			<br><br><br>
			<div class="col-lg-12">

				<ul>

					<li>2015- 22ª Feira de Arte de Florianópolis.</li>

					<li>2015- MOSQ. Passeio Pedra Branca. Organização Fundação Hassis. Santa Catarina.</li>

					<li>2015- Armazém, 6ª edição. Exposição coletiva. Museu Victor Meirelles. Santa Catarina.</li>

					<li>2015- 15ª Feira de Arte de Florianópolis.</li>

					<li>2015- 10ª Feira de Arte de Florianópolis.</li>

					<li>2015- 6ª Entremostras. Fundação Badesc. Florianópolis.</li>

					<li>2015- 5ª Feira de Arte de Florianópolis.</li>

					<li>2015- 4ª Feira de Arte de Florianópolis.</li>

					<li>2015- 5ª Entremostras. Fundação Badesc, Florianópolis.</li>

					<li>2014- Lote 7, 3ª edição. Exposição coletiva. Museu Hassis.</li>

					<li>2014- Armazém, 5ª edição. Exposição coletiva. Fundação Hassis.</li>

					<li>2014- Maratona Cultural, Exposição coletiva. Museu da Escola Catarinense (MESC).</li>

					<li>2013- Armazém, 4ª edição. Exposição coletiva. Olho Mágico.</li>

					<li>2013- Armazém, 3ª edição. Exposição coletiva. Centro de Artes - UDESC.</li>

					<li>2013- Poéticas do Desenho. Exposição coletiva. Fundação Badesc.</li>

					<li>2012- Corredores. Exposição coletiva. Universidade do Estado de Santa Catarina (UDESC).</li>

					<li>2012- HQCOM  Expoarte. Exposição coletiva. Colégio Catarinese.</li>

					<li>2012- Lote 7, 1ª edição. Exposição coletiva. Museu Hassis.</li>

					<li>2012- Ciranda. Exposição individual. Shopping Iguatemi.</li>

					<li>2012- Mostra Casa Nova. Quadro no Salão da Música Erudita Bachianas - Ambiente de Evandro Gaspar, Florianópolis.</li>

					<li>2012- XIX Salão Nacional de Humor de Ribeirão Preto. MARP - Museu de Arte de Ribeirão Preto, São Paulo.</li>

					<li>2012- Armazém 2ª edição. Exposição coletiva. Museu de Arte de Blumenau. Santa Catarina.</li>

					<li>2011- Armazém. Exposição coletiva. Museu Victor Meirelles.</li>

					<li>2011- HQCOM  Expoarte. Exposição coletiva. Floripa Shopping.</li>

					<li>2011- HQCOM. Exposição coletiva. Floripa Shopping.</li>

				</ul>

			</div>
		</div>
	</div>
</section>

<!-- Contato Section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center" style="margin-bottom:50px;">
				<h2 class="section-heading"><?php echo $t['menu-contato']; ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form action="<?php echo base_url('submit'); ?>" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="nome" type="text" class="form-control" placeholder="<?php echo $t['contato-nome']; ?>" id="name" required data-validation-required-message="<?php echo $t['contato-insira-nome']; ?>">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input name="email" type="email" class="form-control" placeholder="<?php echo $t['contato-email']; ?>" id="email" required data-validation-required-message="<?php echo $t['contato-insira-email']; ?>">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input name="telefone" type="tel" class="form-control" placeholder="<?php echo $t['contato-telefone']; ?>" id="phone" required data-validation-required-message="<?php echo $t['contato-insira-telefone']; ?>">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea name="msg" class="form-control" placeholder="<?php echo $t['contato-mensagem']; ?>" id="message" required data-validation-required-message="<?php echo $t['contato-insira-mensagem']; ?>"></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn btn-xl"><?php echo $t['contato-enviar']; ?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<span class="copyright">Copyright &copy; SUSANO CORREIA 2016</span>
			</div>
			<div class="col-md-4">
				<ul class="list-inline social-buttons">
					<li>
				<a href="https://www.instagram.com/notasvisuais/" target="_blank"><i class="fa fa-instagram"></i></a>
			</li>
			<li><a href="https://www.facebook.com/susanocorreia" target="_blank"><i class="fa fa-facebook"></i></a>
			<li><a href="https://www.youtube.com/user/scsuca" target="_blank"><i class="fa fa-youtube"></i></a>
			<li><a href="https://twitter.com/susanocorreia" target="_blank"><i class="fa fa-twitter"></i></a>
			</li>

				</ul>
			</div>

		</div>
	</div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Cante Para Mim</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-oleo-sobre-tela']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/cante-para-mim.jpg'); ?>" alt="">

						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?> </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Morte Embruxada</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-aquarela-e-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/morte-embruxada.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Eu Transbordo Eu</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-oleo-sobre-tela']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/eu-transbordo-eu.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Rosa Embruxada</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/rosa-embruxada.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Fome Embruxada</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-aquarela-e-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/fome-embruxada.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Embruxamento de Coração</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-oleo-sobre-tela']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/embruxamento-de-coracao.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Ignorante Proativo</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-oleo-sobre-tela']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/ignorante-proativo.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Menino com Cata-vento</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-oleo-sobre-tela']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/menino-com-catavento.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Cante Para Mim (estudo)</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/cante-para-mim-estudo.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Homem Chorando Homens que Não Choram</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/homem-chorando-homens-que-nao-choram.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>O Pensador Meio Burro</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/o-pensador-meio-burro.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Eu Transbordo Eu (estudo)</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/eu-transbordo-eu-estudo.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Ignorante Proativo (estudo)</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/ignorante-proativo-estudo.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Homem Feliz Para Sempre Embruxado</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/homem-feliz-para-sempre-embruxado.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Homem Crucificado Em Si com Osso Entalado</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/homem-crussificado-em-si-com-osso-entalado.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>O Escroto Triste</h2>
						<p class="item-intro text-muted"><?php echo $t['obra-msg-grafite-sobre-papel']; ?></p>
						<img class="img-responsive img-centered" src="<?php echo base_url('assets/img/galeria/o-escroto-triste.jpg'); ?>" alt="">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $t['fechar']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo base_url('assets/js/classie.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/cbpAnimatedHeader.js'); ?>"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo base_url('assets/js/jqBootstrapValidation.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/contact_me.js'); ?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('assets/js/agency.js'); ?>"></script>

<script>
	var loop = 0;
	var speed = 4000;

	setInterval(function() {

		switch(loop) {
			case 0:
				$('#h4').fadeOut(speed);
				$('#h0').fadeIn(speed);
				break;
			case 1:
				$('#h0').fadeOut(speed);
				$('#h1').fadeIn(speed);
				break;
			case 2:
				$('#h1').fadeOut(speed);
				$('#h2').fadeIn(speed);
				break;
			case 3:
				$('#h2').fadeOut(speed);
				$('#h3').fadeIn(speed);
				break;
			case 4:
				$('#h3').fadeOut(speed);
				$('#h4').fadeIn(speed);
				break;
		}

		loop++;
		if (loop == 5) {
			loop = 0;
		}
	}, speed);


</script>

</body>

</html>