<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Cadastro de cobertura</h1>
<div id="box">
<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<h4>Cobertura incluida com sucesso</h4><body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
try{
	$cobertura = $_POST['cobertura'];
	$sql = "INSERT INTO cobertura(cobertura) VALUES ('$cobertura')";
	$conn->query($sql);
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</div></body></html>