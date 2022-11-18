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
<h1>Recibo</h1>    
<div class="flex-container">
<div id="box">
<form method='POST' action='/projeto_cupcake-store/controle/consultar_itens.php'>
    <label>Selecione a compra desejada:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT cod_compra FROM compra ORDER BY cod_compra DESC';
  print "<select name='compra'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_compra']."'>".$row['cod_compra']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
    <input type='submit' name='Recibo'>
</form></div></div></body></html>