<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout US Sports</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na US Sports! Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Sua compra</h2>
			</div>

			<div class="panel-body">
				<img src="img/produtos-original/miniatura<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.jpg" class="img-thumbnail img-responsive">
				<dl>
					<dt>Cor</dt>
					<dd><?= $_POST["cor"] ?></dd>

					<dt>Tamanho</dt>
					<dd><?= $_POST["tamanho"] ?></dd>

					<dt>Produto</dt>
					<dd><?= $_POST["nome"] ?></dd>
				</dl>
			</div>
		</div>

		<form>
			<fieldset>
				<legend>Dados pessoais</legend>
				
				<div class="form-group">
					<label for="nome">Nome completo</label>
					<input type="text" class="form-control" id="nome" name="nome" autofocus required>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
				</div>

				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox" value="sim" name="spam" checked>
						Quero receber spam da US Sports
					</label>
				</div>

			</fieldset>

			<fieldset>
				<legend>Cartão de crédito</legend>

				<div class="form-group">
					<label for="numero-cartao">Número - CVV</label>
					<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
				</div>

				<div class="form-group">
					<label for="bandeira-cartao">Bandeira</label>
					<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
						<option value="master">MasterCard</option>
						<option value="visa">Visa</option>
						<option value="amex">American Express</option>
					</select>
				</div>

				<div class="form-group">
					<label for="validade-cartao">Validade</label>
					<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
				</div>
			</fieldset>

			<button type="submit" class="btn btn-primary btn-lg pull-right">
				<span class="glyphicon glyphicon-thumbs-up"></span>
				Confirmar pedido
			</button>
		</form>
	</div>

</body>
</html>