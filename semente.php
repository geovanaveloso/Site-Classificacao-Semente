<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of semente
 *
 * @author geovana
 */
class semente {
    private $id; 
    private $nome;
    private $classificacao;
    private $mais_forte;
    
//    public function semente($id, $nome, $classificacao, $mais_forte) {
//        $this->id = $id;
//        $this->nome = $nome;
//        $this->classificacao = $classificacao;
//        $this->mais_forte = $mais_forte;
//    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getClassificacao() {
        return $this->classificacao;
    }

    function getMais_forte() {
        return $this->mais_forte;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setClassificacao($classificacao) {
        $this->classificacao = $classificacao;
    }

    function setMais_forte($mais_forte) {
        $this->mais_forte = $mais_forte;
    }    
}
