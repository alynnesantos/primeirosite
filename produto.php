<?php
   require_once 'verificalogin.php';
   require_once 'Pagina.php';
   $page = new Pagina();

   $inputs = array(
       $page->input_Form('number','precodecompra','Preço de Compra',true),
       $page->input_Form('text','descricao','Descrição',true),
       $page->input_Form('number','precodevenda','Preço de Venda',true),
       $page->input_Form('number','garantia','Garantia',true),
       $page->input_Form('text','marca','Marca',true),
       $page->action_Form('submit','Cadastrar')
   );
   $form = $page->criar_Form('insertProduto.php','POST',$inputs);

   $page->head('Cadastro de Produtos');
   $page->Body('Cadastro de Produtos',$form,true);

  abstract class produto{
        protected $descrição ;
        protected $marca ; 
        protected $precodecompra ;
        protected $precodevenda  ;
        protected $garantia ;

          function __construct($descrição, $marca, $precodecompra, $precodevenda, $garantia)
        {
            $this -> setDescrição($descrição);
            $this -> setMarca($marca);
            $this -> setprecodecompra($precodecompra);
            $this -> setprecodevenda($precodevenda); 
            $this -> setGarantia($garantia);
        }

       //GETTES & SETTERS
    public function setdescrição($descrição){
        $this->descrição = $descrição;
    }
    public function getdescrição(){
        return $this->descrição;
    }
    public function setmarca($marca){
        $this->marca = $marca;
    }
    public function getmarca(){
        return $this->marca;
    }
    public function setprecodecompra($precodecompra){
        $this->precodecompra = $precodecompra;
    }
    public function getprecodecompra(){
        return $this->precodecompra;
    }
    public function setprecodevenda($precodevenda){
       $this->precodevenda = $precodevenda;
    }
    public function getprecodevenda(){
        return $this->precodevenda; 
    } 
    public function setgarantia($garantia){
        $this->garantia = $garantia;
    }
     public function getgarantia(){
         return $this->garantia; 
    }  
  


    }
?>