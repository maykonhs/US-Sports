<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>US Sports</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/mobile.css" media=" (max-width: 939px) ">
</head>
<body>
	
	<?php include("cabecalho.php"); ?>

	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>
			<form action="http://www.google.com.br/search" id="form-busca">
				<input type="search" name="q" id="q">
				<input type="image" src="img/busca.png">
			</form>
		</section>
		<section class="menu-departamentos">
			<h2>Departamentos</h2>
			<nav>
				<ul>
					<li>
						<a href="#">Blusas</a>
						<ul>
							<li><a href="#">Moleton</a></li>
							<li><a href="#">Tactel</a></li>
							<li><a href="#">Jeans</a></li>
						</ul>
					</li>
					<li><a href="#">Bonés</a></li>
					<li><a href="#">Bermudas</a></li>
					<li><a href="#">Camisas</a></li>
					<li><a href="#">Calçados</a></li>
					<li><a href="#">Mochilas</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section>
		<img src="img/destaque-home.jpg" alt="Promoção: Agasalho Chicago Bulls">
	</div>

	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<?php
					$conexao = mysqli_connect("127.0.0.1", "root", "abc123", "ussportsbd");
					$dados = mysqli_query($conexao, "select * from produtos LIMIT 3, 6");

					while ($produto = mysqli_fetch_array($dados)):
				?>

				<li>
					<a href="produto.php?id=<?= $produto["id"] ?>">
						<figure>
							<img src="img/produtos/miniatura<?= $produto["id"] ?>.jpg" alt="<?= $produto["nome"] ?>">
							<figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
						</figure>
					</a>
				</li>

			<?php endwhile; ?>
			</ol>
		</section>

		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura1.jpg">
							<figcaption>Cavs Lebron James - R$199,00</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura7.jpg">
							<figcaption>Patriots Tom Brady- R$299,00</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura2.jpg">
							<figcaption>Warriors Stephen Curry- R$199,00</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura8.jpg">
							<figcaption>Saints Drew Brees- R$279,00</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura5.jpg">
							<figcaption>Rockets James Harden - R$189,00</figcaption>
						</figure>
					</a>
				</li>

				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura9.jpg">
							<figcaption>Broncos Manning - R$289,00</figcaption>
						</figure>
					</a>
				</li>
			</ol>
		</section>
	</div>

	<?php include("rodape.php"); ?>

	<script src="js/home.js"></script>
</body>
</html>