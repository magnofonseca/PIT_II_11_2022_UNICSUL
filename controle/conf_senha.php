<?php
include ("conexao.php");
echo "<head><link rel='stylesheet' type='text/css' href='../estilos/estilo.css'></head>";
try{	
	$senha = $_POST['senha'];
    $nova_senha = $_POST['nova_senha'];
	if $senha<>$nova_senha{
       echo "Senhas não conferem, favor redigitar as senhas";
    }

}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
echo "<body><h1><a href='/Magno/Projeto_cupcake-store'>Voltar</a></h1></body>";
?>