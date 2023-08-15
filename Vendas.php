<?php
    require_once "conexao.php";
    require_once 'verificalogin.php';
    require_once 'Pagina.php';
    
    $page = new Pagina();

    $datalist_cliente = $page-> input_Datalist_cliente($conexao);
    $datalist_vendedor = $page-> input_Datalist_funcionario($conexao);
    $datalist_produto = $page-> input_Datalist_produto($conexao);
    $datalist_produto2 = $page-> input_Datalist_produto2($conexao);

    $inputs = array(
        //$page->input_Datalist('text','cliente','Cliente',$optionDatalist),
        $datalist_cliente,
        //$page->input_Form('text','vendedor','Vendedor',true),
        $datalist_vendedor,
        //$page->input_Form('text','produto','Produto',true),
        $datalist_produto,
        $datalist_produto2,
        $page->input_Form('number','qtd','Quantidade',true),
        //$page->input_Form('number','preco_und','Preço Unitário',true),
        //$page->input_Form('number','garantia','Garantia',true),
        //$page->input_Form('date','datadecompra','Data de Compra',true),
        $page->action_Form('submit','Cadastrar')
    );
    $form = $page->criar_Form('insertvendas.php','POST',$inputs);

    $page->head('Cadastro de Vendas');
    $page->Body('Cadastro de Vendas',$form,true);
?>


