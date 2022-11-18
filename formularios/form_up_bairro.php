<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loja .Cupcakes</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
</head>
<body>
<h1>Atualização de cadastro de bairro</h1>
<div class="flex-container">
<div id="box" class="barra">
<form method="POST" action="../controle/update_bairro.php">
	<h3>Escolha o bairro a ser modificado</h3>
	<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM bairro';
  print "<select name='cod_bairro'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_bairro']."'>".$row['bairro']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
	<br><h3>Digite um novo nome para o bairro</h3><br>
	<input type="text" name="up_bairro">
	<input type="submit" value="Atualizar">
</form>
</div>
</div>
</body>
</html>