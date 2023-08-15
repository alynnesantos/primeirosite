<?php
    abstract class Pessoa{
        protected $Nome ;
        protected $Endereco ;
        protected $CPF ; 
        protected $Telefone ;
        protected $email ;


         function __construct($nome, $email, $Endereco, $CPF, $Telefone)
        {
            $this ->setNome($nome);
            $this ->setEndereço($Endereco);
            $this ->setCPF($CPF);
            $this ->setTelefone($Telefone);
            $this ->setemail($email); 
        }
         //GETTES & SETTERS
         public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setEndereço($Endereco){
            $this->Endereco = $Endereco;
        }
        public function getEndereço(){
            return $this->Endereco;
        }
        public function setCPF($CPF){
            $this->CPF = $CPF;
        }
        public function getCPF(){
            return $this->CPF;
        }
        public function setTelefone($Telefone){
            $this->Telefone = $Telefone;
        }
        public function getTelefone(){
            return $this->Telefone;
        }
        public function setemail($email){
           $this->email = $email;
        }
        public function getemail(){
            return $this->email; 
        }  
    }   
?>
