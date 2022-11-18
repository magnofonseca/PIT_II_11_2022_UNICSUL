<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
    <link rel="stylesheet" type="text/css" href="../estilos/estilo.css">     
</head>
<body>
<div id=cabecalho>
    <h1>Compra de Cupcakes</h1>
</div>
<h3 id="banner">
<div class="flex-container">
<div id="box" class="barra">  
<fieldset>
  <form method="POST" action="../controle/incluir_compra.php">
    <label>Cliente:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM cliente';
  print "<select name='cliente'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value=".$row['cod_cliente'].">".$row['cliente']." - ".$row['cpf']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?><br>
  <br><label>Data de compra: </label>
  <input type="date" name="data_compra">
	<br><input type="submit" value="Enviar">
</form>
</fieldset>
</div>
</div>
</body>
</html>