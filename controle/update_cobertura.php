<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Atualização de cadastro de cobertura</h1>
<div class="flex-container">
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<h4>Sabor atualizado com sucesso</h4><body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
try{
	$cod_cobertura = $_POST['cod_cobertura'];	
	$up_cobertura = $_POST['up_cobertura'];
	$sql = "UPDATE cobertura set cobertura='$up_cobertura' WHERE cod_cobertura=$cod_cobertura";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></div></div></body></html>