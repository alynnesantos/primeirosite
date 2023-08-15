<?php
require_once 'verificalogin.php';
require_once 'Pagina.php';
require_once 'conexao.php';

   $page = new Pagina();
   $sql = new sql();

   $registros = $sql->select_vendas($conexao);

   $page->head('Consulta Vendas');
   $page->Body('Tabela- ItemVenda',$registros,true);
?>