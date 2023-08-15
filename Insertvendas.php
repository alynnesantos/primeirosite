<?php
    include "conexao.php";
    $sql = new sql;
    

    $sql->inserir_vendas2($conexao,$_POST['listacliente'],
                                  $_POST['cliente'],
                                  $_POST['listavendedor'],
                                  $_POST['vendedor'],
                                  $_POST['listaproduto'],
                                  $_POST['qtd'],
                                  $_POST['preco_und'],
                                  $_POST['total']);                           
              
  header('Location: consultavendas.php');
?>