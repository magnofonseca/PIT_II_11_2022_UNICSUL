<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Exclusão de cupcake</h1>
<div id="box" class="barra">
<form method="POST" action="../controle/excluir_cupcake.php">
    <label>Selecione o cupcake desejado:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM cupcake';
  print "<select name='cod_cupcake'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_cupcake']."'>".$row['cupcake']."</option>";
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