<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Exclusão de cadastro de sabor</h1>
<div class="flex-container">
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<h4>Sabor excluído com sucesso</h4><body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
try{	
	$cod_sabor = $_POST['cod_sabor'];
	$sql = "DELETE FROM sabor WHERE cod_sabor=$cod_sabor";
	$conn->query($sql);

}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></div></div></body></html>

