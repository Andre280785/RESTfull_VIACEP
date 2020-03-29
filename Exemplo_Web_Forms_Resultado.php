<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>ENDERECO</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script type="text/javascript">
    	$.getJSON("http://viacep.com.br/ws/" + <?php  echo "'" . $_POST["cep"] . "'"; ?> + "/json/", function(data)
    	{
    		formteste.cep.value = data.cep;
    		formteste.logradouro.value = data.logradouro;
    		formteste.bairro.value = data.bairro;
    		formteste.cidade.value = data.localidade;
    		formteste.uf.value = data.uf;
    	});
    </script>
</head>

<body>

	<form id="formteste" name="formteste">
	<p class="nome">
		<input type="text" id="cep" name="cep" placeholder="Informe seu CEP" required="required" disabled>
	</p>
		<p class="nome">
		<input type="text" id="logradouro" name="logradouro" placeholder="Logradouro" required="required" disabled>
	</p>
		<p class="nome">
		<input type="text" id="bairro" name="bairro" placeholder="Bairro" required="required" disabled>
	</p>
		<p class="nome">
		<input type="text" id="cidade" name="cidade" placeholder="Cidade" required="required" disabled>
	</p>
		<p class="nome">
		<input type="text" id="uf" name="uf" placeholder="Estado" required="required" disabled>
	</p>
	</form>

</body>

</html>
