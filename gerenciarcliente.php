<?php
    require_once 'verificalogin.php';
    require_once 'Pagina.php';
    require_once 'conexao.php';

    $page = new Pagina();  
    $sql = new sql();

    $registros = $sql->select_cliente2($conexao);
    
    $page->head('Gerenciar Clientes');
    $page->Body('Gerenciar clientes',$registros,true);

?>
