<?php
include "semente.php"; 
include "base.php"; 
include "banco.php";

function getSementes() {
    $db = getConexao();
    $result = $db->query("SELECT * FROM sementes WHERE classificacao=' '") or die("Impossível executar a query");
    $obj = new base();  
    
    while($row = $result->fetch_object("Semente")) {
        $obj->add($row);
    }
    return $obj;
}

function todos_registros(){    
    $db = getConexao();
    $result = $db->query("SELECT * FROM sementes") or die("Impossível executar a query 1");
    return mysql_num_rows($result);
}

function getSemente($id) {
    $db = getConexao();
    $result =  $db->query("SELECT * FROM sementes WHERE id='$id'") or die("Impossível executar a query 1");
    
     while($row = $result->fetch_object("Semente")) {
        return $row;
    }
}