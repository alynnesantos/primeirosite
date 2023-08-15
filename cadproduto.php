           <?php
    require_once 'Pagina.php';
    $page = new Pagina();

    $inputs = array(
        $page->input_Form('text','descricao','Descrição',true),
        $page->input_Form('text','marca','Marca',true),
        $page->input_Form('number','precovenda','Preço de Venda',true),
        $page->input_Form('number','precocompra','Preço de Compra',true),
        $page->input_Form('number','garantia','Garantia(em dias)',true),
        $page->action_Form('submit','Cadastrar Produto')
    );
    $form = $page->criar_Form('insertproduto.php','POST',$inputs);

    $page->head('Cadastro de Produtos');
    $page->Body('Cadastro de Produtos',$form,true);
?>