<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Cadastro de recheio</h1>
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<h4>Recheio incluido com sucesso</h4>
	  <h3><a href='/Magno/Projeto_cupcake-store'>Voltar</a></h3>";
try{	  
	$recheio = $_POST['recheio'];
	$sql = "INSERT INTO recheio(recheio) VALUES ('$recheio')";
	$conn->query($sql);
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}	
?>
</div></body></html>