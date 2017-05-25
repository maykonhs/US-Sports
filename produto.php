<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>US Sports</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/mobile.css" media=" (max-width: 939px) ">
	<link rel="stylesheet" href="css/produto.css">
</head>

<body>

	<?php
		$conexao = mysqli_connect("127.0.0.1", "root", "abc123", "ussportsbd");
		$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
		$produto = mysqli_fetch_array($dados);
	?>
	
	<?php include("cabecalho.php"); ?>

	<div class="container">

		<div class="produto">
			<h1><?= $produto["nome"] ?></h1>
			<p>por apenas R$<?= $produto["preco"] ?></p>

			<form action="checkout.php" method="POST">
				<fieldset class="cores">
					<legend>Escolha a cor</legend>

					<input type="radio" name="cor" value="azul" id="azul" checked>
					<label for="azul">
						<img src="img\produtos-original\miniatura7.jpg" alt="azul">
					</label>

					<input type="radio" name="cor" value="branca" id="branca" checked>
					<label for="branca">
						<img src="img\produtos-original\miniatura7-branca.jpg" alt="branca">
					</label>
				</fieldset>

				<fieldset class="tamanhos">
					<legend>Escolha o Tamanho</legend>

					<input type="range" min="36" max="46" value="42" name="tamanho" id="tamanho">
				</fieldset>

				<input type="submit" class="comprar" value="Comprar">
				<input type="hidden" name="nome" value="Patriots">
			</form>
		</div>

		<div class="detalhes">
			<h2>Detalhes do produto</h2>
			<p><?= $produto["descricao"] ?></p>

			<table>
				<thead>
					<tr>
						<th>Característica</th>
						<th>Detalhe</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Modelo</td>
						<td>Uniforme no.1</td>
					</tr>
					<tr>
						<td>Material</td>
						<td>Poliester</td>
					</tr>
					<tr>
						<td>Cores</td>
						<td>Branco e Azul</td>
					</tr>
					<tr>
						<td>Lavagem</td>
						<td>Lavar a mão</td>
					</tr>
				</tbody>
			</table>

		</div>

	</div>

	<?php include("rodape.php"); ?>
</body>

</html>