<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=Projeto_cupcake","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names UTF8");
}catch(PDOException $ex){
    echo 'Problema detectado, sem acesso ao sistema:'. $ex->getMessage();
}
?>