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
<h1>Clientes</h1>    
<div class="flex-container">
<div id="box">
    <form method='POST' action='/projeto_cupcake-store/controle/con_cliente.php'>
        <label>Digite o cliente desejado:</label>
        <input type='text' name='cliente'>
        <input type='submit' name='Consultar'>
    </form>
</div>
</div>   
</body>
</html>