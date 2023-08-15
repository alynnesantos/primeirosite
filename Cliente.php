<?php
    include_once 'Pessoa.php';
    require_once 'verificalogin.php';
    require_once 'Pagina.php';
    $page = new Pagina();

    $inputs = array(
        $page->input_Form('text','Nome','Nome',true),
        $page->input_Form('text','Endereco','Endereço',true),
        $page->input_Form('tel','Telefone','Telefone',true),
        $page->input_Form('email','email','E-mail',true),
        $page->input_Form('number','CPF','CPF',true),
        $page->action_Form('submit','Cadastrar')
    );
    $form = $page->criar_Form('Insertcliente.php','POST',$inputs);

    $page->head('Cadastro de Clientes');
    $page->Body('Cadastro de Clientes',$form,true);
?>
    