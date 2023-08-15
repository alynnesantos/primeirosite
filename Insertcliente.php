<?php
    include "conexao.php";
    $sql = new sql;
    
  
    $sql->inserir_cliente($conexao,$_POST['email'],
                                   $_POST['Nome'],
                                   $_POST['Endereco'],
                                   $_POST['Telefone'],
                                   $_POST['CPF']);

    header('Location: cliente.php');
?>