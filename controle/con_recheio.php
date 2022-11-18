<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Loja .Cupcakes</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Lista de Recheios cadastrados</h1>
<div class="flex-container">
<div id="box" class="barra">
<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
echo "<body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
try{
	$recheio = $_POST['recheio'];
	$sql = "SELECT cod_recheio, recheio FROM recheio WHERE recheio LIKE '%$recheio%'";
	foreach ($conn->query($sql) as $row) {
	        print $row['recheio']."<br/>";
	}
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
<div>
</div>
</body>
</html>