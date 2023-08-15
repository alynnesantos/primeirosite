<?php
require_once 'verificalogin.php';
require_once 'Pagina.php';
require_once 'conexao.php';
   
   $page = new Pagina();
   $sql = new sql();

   $registros = $sql->select_funcionario($conexao);

   $page->head('Consulta funcionários');
   $page->Body('Lista de funcionários',$registros,true);

?>