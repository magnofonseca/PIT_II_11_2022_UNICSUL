<?php
include ("conexao.php");
try{
	$sql = 'SELECT cupcake_comprado, compra, valor FROM itens_compra';
	foreach ($conn->query($sql) as $row) {
	    print $row['cupcake_comprado']." ";
		print $row['compra']." ";
	    print $row['valor']."<br/>";
	}
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>