<?php include_once "flash.php"; ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="UTF-8">
		<title>Fernando Oliveira - Fotógrafo Profissional</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Portifólio online para divulgar meu trabalho como fotógrafo">
		<meta name="author" content="Fernando Oliveira">
		<meta name="robots" content="index, follow">
		<meta name="keywords" content="Fotografia, Paisagem, Eventos, Fotografo">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/msg.css">
		<!--Icone-->
		<link rel="icon" type="image/x-icon" href="_img/favicon.ico">
		<!--Font Awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<!--Fontes-->
		<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,700" rel="stylesheet">
	</head>
	<body>
		<!-- CABEÇALHO -->
		<header class="cabecalho" id="header">
			<div class="menu">
				<div class="menu-logo">
					<a href=""><img src="img/logo.png" alt="Fernando Oliveira - Fotógrafo Profissional" title="Fernando Oliveira - Fotógrafo Profissional" class="logo"/> </a><!--font-size 0 e background a imagem da logo-->
				</div>
				<nav class="menu-nav">
					<label for="icon-menu"><img src="img/icon-menu40.png" alt="menu" /></label>
					<input type="checkbox" id="icon-menu" checked />
					<ul class="barra">
						<a href="index.php"><li>HOME</li></a>
						<a href="#sobre" onclick="chamado()"><li>SOBRE</li></a>
						<a href="#galeria"onclick="chamado()"><li>PORTIFÓLIO</li></a>
						<a href="#contato"onclick="chamado()"><li>CONTATO</li></a>
					</ul>
				</nav>
			</div>
		</header>
		<!-- /CABEÇALHO -->

		<!-- PARALLAX DO TOPO -->
		<section class="parallax-1">
			<article class="parallax-1-2">
				<h1>Fernando Oliveira</h1>
				<h2>Fotógrafo Profissional</h2>
			</article>
		</section>
		<!-- /PARALLAX DO TOPO -->

		<!-- SOBRE -->
		<section class="sobre" id="sobre">
			<article class="sobre-container">
				<div class="sobre-img">
					<img src="img/sobre-lg.jpg" alt="Foto Pessoal do Fernando Oliveira">
				</div>
				<div class="sobre-caption">
					<h2>Sobre mim</h2>
					<p>Paulista, 29 anos e apaixonado por fotografia desde os 11 anos. Comecei a estudar fotografia quando tinha 16 anos e minha carreira como fotografo começou aos 20. Aqui você vai poder acompanhar um pouco do meu trabalho.</p>
				</div>
			</article>
		</section>
		<!-- /SOBRE -->

		<!-- GALERIA -->
		<section class="galeria" id="galeria">
			<article class="galeria-row">
				<div class="galeria-foto"><img src="img/galeria-1.jpg" alt="Foto da Galeria"></div>
				<div class="galeria-foto"><img src="img/galeria-2.jpg" alt="Foto da Galeria"></div>
				<div class="galeria-foto"><img src="img/galeria-3.jpg" alt="Foto da Galeria"></div>
			</article>
			<article class="galeria-row">
				<div class="galeria-foto"><img src="img/galeria-4.jpg" alt="Foto da Galeria"></div>
				<div class="galeria-foto"><img src="img/galeria-5.jpg" alt="Foto da Galeria"></div>
				<div class="galeria-foto"><img src="img/galeria-6.jpg" alt="Foto da Galeria"></div>
			</article>
		</section>
		<!-- /GALERIA -->

		<!-- CONTATO -->
		<section class="contato" id="contato">
			<h2 style="text-align: center; font-family: 'Montserrat', sans-serif; font-size: 30px; padding: 60px 0;">Entre em Contato</h2>
			<article class="contato-container">

				<div class="contato contato-form">
					<?= getFlash('mensagem') ?>
					<form action="contato.php" method="POST">
						<input type="text" name="nome" placeholder="*Nome: " class="input"/>
						<input type="email" name="email" placeholder="*Email: " class="input"/>
						<textarea name="mensagem" cols="59" rows="10" placeholder="*Menssagem*" class="input"></textarea>
						<button type="submit" class="button" name="enviar"> Enviar </button>
					</form>
				</div>
				<div class="contato contato-endereco">
					<!--Inframe-->
					<div class="iframe">
						 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1841.1556009960843!2d-43.28275969203628!3d-22.642182846286754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997322b2c17921%3A0x26be07d040b849c9!2sEscola+Municipal+Rotary!5e0!3m2!1spt-BR!2sbr!4v1547680940253" frameborder="0"
						    style="border:0; height: 300px;" allowfullscreen class="col-12"></iframe>
					</div>
					<!--caption-->

					<div class="iframe-caption">
						<p>Escola Municipal Rotary | Rua Alagoas, Nº 12 - Santa Cruz da Serra | Duque de Caxias - RJ</p>
					</div>
				</div>
			</article>
		</section>
		<!-- /CONTATO -->

		<!-- RODAPÉ -->
		<footer class="rodape">
			<div class="rodape-container">
				<a href="#header">Voltar ao topo    <i class="fas fa-angle-up"></i></a>
				<h3> Todos os direitos reservados. </h3>
			</div>
		</footer>
		<!-- /RODAPÉ -->


		<!-- JQUERY -->
			<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
			<!--Iniciando meu script-->
			<script>
				function chamado() {
					$("#icon-menu").prop('checked', true);
				}	
			</script>
		<!-- /JQUERY -->
	</body>
</html>