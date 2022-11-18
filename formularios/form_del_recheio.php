<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Exclusão de recheio</h1>
<div id="box" class="barra">
<form method="POST" action="../controle/excluir_recheio.php">
    <label>Selecione o recheio desejado:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM recheio';
  print "<select name='cod_recheio'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_recheio']."'>".$row['recheio']."</option>";
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