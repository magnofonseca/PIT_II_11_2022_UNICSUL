<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Loja .Cupcakes</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Lista de Coberturas cadastradas</h1>
<div class="flex-container">
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
try{
	$cobertura = $_POST['cobertura'];
	$sql = "SELECT cod_cobertura, cobertura FROM cobertura WHERE cobertura LIKE '%$cobertura%'";
	foreach ($conn->query($sql) as $row) {
	        print $row['cobertura']."<br/>";
	}
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
<div>
</div>
</body>
</html>