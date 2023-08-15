<?php 

require_once 'Pagina.php';
require_once 'Pessoa.php';
    $page = new Pagina();

    $niveis = array('1','2');

    $inputs = array(
        $page->input_Form('text','nome','Nome',true),
        $page->input_Form('text','endereco','Endereço',true),
        $page->input_Form('text','telefone','Telefone',true),
        $page->input_Form('text','email','E-mail',true),
        $page->input_Form('text','cpf','CPF',true),
        $page->input_Form('password','senha','Senha',true),
        $page->escolha_Form('Nivel','radio',$niveis),
        $page->action_Form('submit','Cadastrar')
    );
    $form = $page->criar_Form('Insertfuncionario.php','POST',$inputs);

    $page->head('Cadastro de Funcionarios');
    $page->Body('Cadastro de Funcionarios',$form,true);

    class Funcionario extends Pessoa{
        protected $senha;
        protected $nivel;
        
        function __construct($nome,$telefone,$cpf,$email, $endereco, $senha, $nivel)
        {
            $this->Nome = $nome;
            $this ->Telefone = $telefone;
            $this ->CPF = $cpf;
            $this ->email = $email;
            $this ->Endereco = $endereco;
            $this ->senha = $senha;
            $this ->nivel = $nivel;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setNivel($nivel){
            $this->nivel = $nivel;
        }
        public function getNivel(){
            return $this->nivel;
        }

    }







?>