<?php
require_once 'verificalogin.php';
require_once 'Pagina.php';
require_once 'conexao.php';

   $page = new Pagina();
   $sql = new sql();

   $registros = $sql->select_cliente($conexao);

   $page->head('Consulta clientes');
   $page->Body('Lista de Clientes',$registros,true);

?>