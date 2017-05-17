<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout US Sports</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>

	<h1>Ótima escolha!</h1>
	<p>Obrigado por comprar na US Sports! Preencha seus dados para efetivar a compra.</p>

	<h2>Sua compra</h2>
	<dl>
		<dt>Cor</dt>
		<dd><?= $_POST["cor"] ?></dd>

		<dt>Tamanho</dt>
		<dd><?= $_POST["tamanho"] ?></dd>

		<dt>Produto</dt>
		<dd><?= $_POST["nome"] ?></dd>
	</dl>

</body>
</html>