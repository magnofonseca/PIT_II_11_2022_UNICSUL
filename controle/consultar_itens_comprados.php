<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Loja .Cupcakes</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Cupcakes Comprados</h1>
<div class="flex-container">
<div id="box" class="barra">
	<table border="1"><tr><th width="51%">Cliente</th><th> item comprado</th>
	<th>R$</th></tr>
   
<?php
include ("../controle/conexao.php");
try{
    $cliente = $_POST['cliente'];
	$sql="SELECT l.cliente,m.cod_compra, o.cupcake_comprado,c.cupcake, k.valor FROM cliente l
	INNER JOIN compra m ON l.cod_cliente=m.cliente_compra
	INNER JOIN itens_compra o ON o.compra=m.cod_compra
	INNER JOIN cupcake c ON c.cod_cupcake=o.cupcake_comprado
	INNER JOIN categoria k ON k.cod_categoria=c.categoria_cupcake WHERE cliente LIKE '%$cliente%' ORDER BY m.cod_compra";
		
	
	  
    print "<table border='1'>";
    foreach($conn->query($sql) as $row){
        print "<tr><td>".$row['cliente']."</td>
                   <td>".$row['cupcake']."</td>
				   <td>".$row['valor']."</td>
				   </tr>";
    }
    print "</table>";
	echo "<body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
}
catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
	
}
?>