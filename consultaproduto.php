<?php
require_once 'verificalogin.php';
require_once 'Pagina.php';
require_once 'conexao.php';

   $page = new Pagina();
   $sql = new sql();

   $registros = $sql->select_produto($conexao);

   $page->head('Consulta produtos');
   $page->Body('Lista de produtos',$registros,true);

?>