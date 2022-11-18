<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Loja .Cupcakes</title>
    <link rel="stylesheet" type="text/css" href="../estilos/estilo.css">
</head>
<body>
<h1>Cadastro de cupcakes</h1>
<div class="flex-container">
<div id="box" class="barra">
<fieldset>
<form method="POST" action="../controle/inserir_cupcake.php">
  <label>Nome:</label>
  <input type="text" value="digite o nome do cupcake" name="cupcake" required="required"></br></br>
  <label>Sabor:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM sabor';
  print "<select name='sabor'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_sabor']."'>".$row['sabor']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
  <label>Cobertura:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM cobertura';
  print "<select name='cobertura'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_cobertura']."'>".$row['cobertura']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
  <br><br><label>Recheio:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM recheio';
  print "<select name='recheio'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_recheio']."'>".$row['recheio']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
  <br><br><label>Categoria:</label>
  <?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM categoria';
  print "<select name='categoria'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_categoria']."'>".$row['categoria']."</option>";
  }
  print "</select>";
  
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>

  <input type="submit" value="Enviar">
</fieldset>
</form>
</div>
</div>
</body>
</html>