<?php

/**
 * Description of Projeto
 *
 * @author sergio
 */
class Projeto {

    private $nome;
    private $data_inicio;
    private $data_fim;
    private $usuarios;

    function get_nome() {
        return $this->nome;
    }

    function get_data_inicio() {
        return $this->data_inicio;
    }

    function get_data_fim() {
        return $this->data_fim;
    }

    function get_usuarios() {
        return $this->usuarios;
    }

    function set_nome($nome) {
        $this->nome = $nome;
    }

    function set_data_inicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    function set_data_fim($data_fim) {
        $this->data_fim = $data_fim;
    }

    function set_usuarios($usuarios) {
        $this->usuarios = $usuarios;
    }

    function __construct($nome, $data_inicio, $data_fim) {
        $this->nome = $nome;
        $this->data_inicio = $data_inicio;
        $this->data_fim = $data_fim;
       
    }

}
