<?php

/**
 * Description of Requisito
 *
 * @author sergi
 */
class Requisito {

    private $categoria;
    private $numero;
    private $nome;
    private $versao;
    private $status;
    private $prioridade;
    private $complexidade;
    private $solicitante;
    private $responsavel;
    private $autor;
    private $data_da_criacao;
    private $data_da_modificacao;
    private $descricao;
    private $observacoes;
    private $dependencias;
   ///TODO  ANEXOS
    
    
    
    
function get_categoria() {
return $this->categoria;
}

 function get_numero() {
return $this->numero;
}

 function get_nome() {
return $this->nome;
}

 function get_versao() {
return $this->versao;
}

 function get_status() {
return $this->status;
}

 function get_prioridade() {
return $this->prioridade;
}

 function get_complexidade() {
return $this->complexidade;
}

 function get_solicitante() {
return $this->solicitante;
}

 function get_responsavel() {
return $this->responsavel;
}

 function get_autor() {
return $this->autor;
}

 function get_data_da_criacao() {
return $this->data_da_criacao;
}

 function get_data_da_modificacao() {
return $this->data_da_modificacao;
}

 function get_descricao() {
return $this->descricao;
}

 function get_observacoes() {
return $this->observacoes;
}

 function get_dependencias() {
return $this->dependencias;
}

    function set_categoria($categoria) {
$this->categoria = $categoria;
}

 function set_numero($numero) {
$this->numero = $numero;
}

 function set_nome($nome) {
$this->nome = $nome;
}

 function set_versao($versao) {
$this->versao = $versao;
}

 function set_status($status) {
$this->status = $status;
}

 function set_prioridade($prioridade) {
$this->prioridade = $prioridade;
}

 function set_complexidade($complexidade) {
$this->complexidade = $complexidade;
}

 function set_solicitante($solicitante) {
$this->solicitante = $solicitante;
}

 function set_responsavel($responsavel) {
$this->responsavel = $responsavel;
}

 function set_autor($autor) {
$this->autor = $autor;
}

 function set_data_da_criacao($data_da_criacao) {
$this->data_da_criacao = $data_da_criacao;
}

 function set_data_da_modificacao($data_da_modificacao) {
$this->data_da_modificacao = $data_da_modificacao;
}

 function set_descricao($descricao) {
$this->descricao = $descricao;
}

 function set_observacoes($observacoes) {
$this->observacoes = $observacoes;
}

 function set_dependencias($dependencias) {
$this->dependencias = $dependencias;
}


    

}
