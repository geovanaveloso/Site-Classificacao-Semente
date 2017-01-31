<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of base
 *
 * @author geovana
 */
class base {

    private $obj;

    public function base() {
        $obj = array();
    }

    public function add($novoObjetoContato) {
        $this->obj[] = $novoObjetoContato;
    }
    
    public function getObj() {
        return $this->obj;
    }
    
    public function getObjI($i) {
        return $this->obj[$i];
    }
    
    public function size(){
        return count($this->obj);
    }
    
}
