<?php


class User {

    private $nomeUsuario;
    private $senha;
    private $nome;  /* nome real */

    public function get_nameUser() {
        return $this->nomeUsuario;
    }

    public function get_password() {
        return $this->senha;
    }

    public function get_name() {
        return $this->nome;
    }

    public function set_user_name($nomeUsuario) {

            $this->nomeUsuario = $nomeUsuario;
        
    }

    public function set_password($senha) {
            $this->senha = $senha;
         
    }

    public function set_name($nome) {


            $this->nome = $nome;
       
    }

    public function __construct() {
    $this->nome="";
    $this->nomeUsuario="";
    $this->senha="";
    }

    
    
}
