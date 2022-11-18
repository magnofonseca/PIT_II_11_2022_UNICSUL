<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Loja .Cupcakes</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Cupcakes</h1>
<div class="flex-container">
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<a href='con_compra.php'>Selecione os Cupcakes</a></h1>";
try{
	$cliente = $_POST['cliente'];
	$data_compra = $_POST['data_compra']; 
	$sql = "INSERT INTO compra(cliente_compra,data_compra, data_entrega)
			VALUES ($cliente, curdate(), curdate()+1)";
	$conn->query($sql);
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</div>
</div>
</body>
</html>