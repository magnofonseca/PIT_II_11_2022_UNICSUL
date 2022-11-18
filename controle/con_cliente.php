<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Loja .Cupcakes</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Lista de Clientes cadastrados (cod, nome e CPF)</h1>
<div class="flex-container">
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
try{
	$cliente = $_POST['cliente'];
	$sql = "SELECT cod_cliente, cliente, cpf, bairro_cliente FROM cliente WHERE cliente LIKE '%$cliente%'";
	foreach ($conn->query($sql) as $row) {
	    print $row['cod_cliente']." ";
	    print $row['cliente']." ";
		print $row['cpf']." ";			
	    print $row['bairro_cliente']."<br/>";
	}
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
<div>
</div>
</body>
</html>