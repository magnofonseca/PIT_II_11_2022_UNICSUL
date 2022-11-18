<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Loja .Cupcakes</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Recibo da Compra</h1>
<div class="flex-container">
<div id="box" class="barra">
<table><tr><th>Produto</th><th>Valor R$</th></tr>	
<?php
include ("conexao.php");
try{
	$compra=$_POST['compra'];
	$total=0.0;
	$sql = "SELECT l.cliente, m.cod_compra, i.cupcake_comprado, c.cupcake, k.valor FROM cliente l 
	INNER JOIN compra m ON l.cod_cliente=m.cliente_compra 
	INNER JOIN itens_compra i ON m.cod_compra=i.compra 
	INNER JOIN cupcake c ON i.cupcake_comprado=c.cod_cupcake
    INNER JOIN categoria k ON k.cod_categoria =c.categoria_cupcake 
	WHERE compra LIKE '$compra'";
	foreach ($conn->query($sql) as $row) {
	   print "<tr><td>".$row['cupcake']."</td><td>".$row['valor']."</td></tr>";
		$total += $row['valor'];
	}
	print "<h3>Recibo número :<u>".$row['cod_compra']."</h3></u> Cliente: <u>".$row['cliente'].
			"</u> Total R$: <u><b>".$total."</b></u><h3>Títulos selecionados:</h3></table><br>
			<a href='http://localhost/projeto_cupcake-store'>Voltar</a>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</div>
</div>
</body>
</html>
