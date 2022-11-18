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
<h1>Atualização de cadastro de cupcake</h1>
<div class="flex-container">
<div id="box" class="barra">
<form method="POST" action="../controle/update_cupcake.php">
	<h3>Escolha o cupcake a ser modificado</h3>
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
	<br><h3>Digite um novo nome para o cupcake</h3><br>
	<input type="text" name="update_cupcake">
    <br><h3>Digite um novo sabor para o cupcake</h3><br>
	<input type="text" name="update_sabor">
    <br><h3>Selecione um novo recheio para o cupcake</h3><br>
	<input type="text" name="update_recheio">
	<br><h3>Selecione uma nova cobertura para o cupcake</h3><br>
	<input type="text" name="update_cobertura">

	<input type="submit" value="Atualizar">
</form>
</div>
</div>
</body>
</html>