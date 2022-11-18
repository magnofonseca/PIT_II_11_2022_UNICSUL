<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Exclusão de compra</h1>
<div id="box" class="barra">
<form method="POST" action="../controle/excluir_compra.php">
    <label>Selecione o número da compra desejada:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM compra';
  print "<select name='cod_compra'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_compra']."'>".$row['cod_compra']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>    
</br></br>
    <input type="submit" value="Excluir">
</form>
</div>
</body>
</html>