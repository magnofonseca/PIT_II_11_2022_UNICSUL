<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Cadastro de cupcake</h1>
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<h4>Cupcake incluido com sucesso</h4><body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
try{
	$cupcake = $_POST['cupcake'];
	$sabor = $_POST['sabor']; 
	$recheio = $_POST['recheio'];
	$cobertura = $_POST['cobertura'];
	$sql = "INSERT INTO cupcake(cupcake, sabor_cupcake, recheio_cupcake, cobertura_cupcake) 
			VALUES ('$cupcake', $sabor, $recheio, $cobertura)";
	$conn->query($sql);
}


catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</div></body></html>