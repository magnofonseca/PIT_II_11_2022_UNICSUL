<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Cadastro de categoria</h1>
<div id="box">
<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<h4>Categoria incluida com sucesso</h4><body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
try{
	$categoria = $_POST['categoria'];
	$valor = $_POST['valor'];
	$sql = "INSERT INTO categoria(categoria, valor) VALUES ('$categoria', $valor)";
	$conn->query($sql);
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</div></body></html>