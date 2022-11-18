<?php
include ("conexao.php");
try{
    $sql="SELECT l.cliente, m.cod_compra, i.cupcake_comprado, c.cupcake, s.sabor, b.bairro FROM cliente l 
          INNER JOIN compra m ON l.cod_cliente = m.cliente_compra 
          INNER JOIN itens_compra i ON m.cod_compra=i.compra 
          INNER JOIN cupcake c ON i.cupcake_comprado=c.cod_cupcake
          INNER JOIN bairro b ON b.cod_bairro=l.bairro_cliente
          INNER JOIN sabor s ON s.cod_sabor=c.sabor_cupcake ORDER BY m.cod_compra";
    print "<table border='1'>";
    foreach($conn->query($sql) as $row){
        print "<tr><td>".$row['cliente']."</td>l
                   <td>".$row['cod_compra']."</td>
                   <td>".$row['cupcake_comprado']."</td>
                   <td>".$row['bairro']."</td>
                   <td>".$row['sabor']."</td>                   
                   <td>".$row['cupcake']."</td></tr>";
    }
    print "</table>";
}
catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}
?>