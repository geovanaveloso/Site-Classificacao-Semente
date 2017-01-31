<?php

mysqli;

function getConexao() {
    $servidor = 'localhost';
    $dbname = 'u802794204_class';
    $usuario = 'u802794204_root';
   // $dbname = 'classificacao';
  //$usuario = 'root';
    $senha = 'asd852';
    //  $link = mysql_connect($servidor, $usuario, $senha) or die("Impossível conectar ao banco.");
    //  $db = mysql_select_db($banco, $link) or die("Impossível conectar ao banco.");
    //  return $db;

   $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    //$conn = new mysqli($servidor, $usuario, $senha, $dbname);

    if ($conn->connect_error) {
        die("Connection falhou: " . $conn->connect_error);
    }
    return $conn;
}
		