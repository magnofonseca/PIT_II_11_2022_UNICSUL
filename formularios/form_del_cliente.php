<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">    
</head>
<body>
<h1>Exclusão de cliente</h1>
<div id="box" class="barra">
<form method="POST" action="../controle/excluir_cliente.php">
    <label>Selecione o cliente desejado:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM cliente';
  print "<select name='cod_cliente'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_cliente']."'>".$row['cliente']."</option>";
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