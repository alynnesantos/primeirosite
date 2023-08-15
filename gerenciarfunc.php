<?php
    require_once 'verificalogin.php';
    require_once 'Pagina.php';
    require_once 'conexao.php';

    $page = new Pagina();
    $sql = new sql();

    $registros = $sql->select_funcionario2($conexao);

    $page->head('Gerenciar Funcionários');
    $page->Body('Gerenciar funcionários',$registros,true);
?>