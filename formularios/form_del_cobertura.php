<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Exclusão de cobertura</h1>
<div id="box" class="barra">
<form method="POST" action="../controle/excluir_cobertura.php">
    <label>Selecione a cobertura desejada:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM cobertura';
  print "<select name='cod_cobertura'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_cobertura']."'>".$row['cobertura']."</option>";
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