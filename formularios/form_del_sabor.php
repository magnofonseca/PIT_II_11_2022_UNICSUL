<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Exclusão de sabor</h1>
<div id="box" class="barra">
<form method="POST" action="../controle/excluir_sabor.php">
    <label>Selecione o sabor desejado:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM sabor';
  print "<select name='cod_sabor'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_sabor']."'>".$row['sabor']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>    
</br></br>
    <input type="submit" value="Excluir">
</form>
</div>
</body>
</html>