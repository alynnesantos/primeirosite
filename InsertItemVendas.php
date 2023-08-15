<?php
    include "conexao.php";
    $sql = new sql;
    
    $sql->inserir_tbitemvenda($conexao,$_POST['ID_venda'],
                                  $_POST['ID_produto'],
                                  $_POST['quantidade'],
                                  $_POST['subtotal']);                             
              
  header('Location: consultavendas.php');
?>