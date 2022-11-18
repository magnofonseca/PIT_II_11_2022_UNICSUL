<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Loja .Cupcakes</title>
	<link rel='stylesheet' type='text/css' href='../estilos/estilo.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Escolha a opção desejada</h1>
<div class="flex-container">
<div id="box" class="barra">
<?php
include("conexao.php");
try{
    $cupcake=$_POST['cupcake'];
    $sql = "SELECT cod_compra FROM compra ORDER BY cod_compra DESC LIMIT 1";
    foreach($conn->query($sql) as $row){
        $codcompra = $row['cod_compra'];
    }
    $sql="INSERT INTO itens_compra(cupcake_comprado,compra) 
         VALUES ('$cupcake','$codcompra')";
    $conn->query($sql);
}catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}
?>
<h2><a href='con_compra.php'>Selecionar outro cupcake</a></h2><br><br>
<h2><a href='finalizar_compra.php'>Finalizar seleção</a></h2>
</div>
</div>
</body>
</html>