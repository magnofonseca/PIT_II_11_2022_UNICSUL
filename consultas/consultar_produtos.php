<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Loja .Cupcakes</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Cupcakes</h1>
<div class="flex-container">
<div id="box" class="barra">
	<table border="1"><tr><th width="50%">Cupcake</th><th>Sabor</th><th>Recheio</th>
	<th>Cobertura</th><th>Categoria</th></tr>
<?php
include ("../controle/conexao.php");
try{
    $cupcake = $_POST['cupcake'];
	$sql = "SELECT c.cupcake, s.sabor, r.recheio, e.cobertura, k.categoria FROM cupcake c 
	INNER JOIN sabor s ON s.cod_sabor=c.sabor_cupcake 
	INNER JOIN recheio r ON r.cod_recheio=c.recheio_cupcake 
	INNER JOIN categoria k ON k.cod_categoria=c.categoria_cupcake 
	INNER JOIN cobertura e ON e.cod_cobertura=c.cobertura_cupcake
    WHERE cupcake LIKE '%$cupcake%' ORDER BY c.cupcake";
	foreach ($conn->query($sql) as $row) {
	   print "<tr><td width='50%'>".$row['cupcake']."</td>
	   		  <td width='25%'>".$row['sabor']."</td>
              <td width='25%'>".$row['recheio']."</td>
			  <td width='25%'>".$row['cobertura']."</td>
              <td width='25%'>".$row['categoria']."</td></tr>";
	}
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</table><a href='http://localhost/projeto_cupcake-store'>Voltar</a>
</div>
</div>
</body>
</html>
