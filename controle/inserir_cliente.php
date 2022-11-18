<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Cadastro de cliente</h1>
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<h4>Cliente incluido com sucesso</h4><body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
try{
	$cliente = $_POST['cliente'];
	$bairro = $_POST['bairro']; 
	$cpf = $_POST['cpf'];
	$sql = "INSERT INTO cliente(cliente, bairro_cliente, cpf) VALUES ('$cliente', $bairro, '$cpf')";
	$conn->query($sql);
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
</div></body></html>