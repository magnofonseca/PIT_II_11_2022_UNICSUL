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
	<table border="1"><tr><th width="50%">Cupcake</th></tr>
<?php
include ("conexao.php");
try{
    $cupcake = $_POST['cupcake'];
    $sql="SELECT * FROM cupcake WHERE cupcake LIKE '%$cupcake%' ORDER BY cupcake";
    print "<form method='post' action='incluir_itens.php'>";
    foreach($conn->query($sql) as $row){
        print "<tr><td><input name='cupcake' type='radio' value='".$row['cod_cupcake']."'>".$row['cupcake']."</td></tr>";
    }
    echo "<input type='submit' value='Incluir compra'></form></table>";
	echo "<body><h1><a href='/projeto_cupcake-store'>Voltar</a></h1></body></html>";
}
catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}
?>
</div>
</div>
</body>
</html>