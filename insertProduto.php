<?php
    include "conexao.php";
    $sql = new sql;
    
    $precovenda = $_POST['precocompra']*1.2;
    $sql->inserir_produto($conexao,$_POST['precocompra'],
                          $_POST['descricao'],
                          $_POST['precovenda'],
                          $_POST['garantia'],
                          $_POST['marca']);

  header('Location: cadproduto.php');
    ?>