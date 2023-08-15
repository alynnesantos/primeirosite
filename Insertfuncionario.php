<?php
    include "conexao.php";
    $sql = new sql;
    
  
    $sql->inserir_funcionario($conexao,$_POST['nome'],$_POST['telefone'],$_POST['cpf'],$_POST['email'],$_POST['endereco'],$_POST['senha'],$_POST['nivel']);
    ?>