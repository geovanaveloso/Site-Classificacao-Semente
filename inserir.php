<?php

include_once "exibir.php";
include_once "banco.php";

$conn = getConexao();

$class = $_GET["optradio"];
$mais_forte = $_GET["texto"];
$id = $_GET["id_semente"];
$number = $_GET["number"];

if (!isset($_GET["optradio"])) {
    $result = 3;
} else {
    
    var_dump($class);

    $sql = "UPDATE sementes SET classificacao='" . $class . "', mais_forte='" . $mais_forte . "' WHERE id='" . $id . "'";

    if ($conn->query($sql) === TRUE) {
        echo 'Classificacao cadatrada com sucesso';
        $result = 1;
    } else {
        echo 'Classificacao nao pode ser cadastrada';
        $result = 2;
    }
}

$s = getSementes();

if ($s->size() == 0) {
    $redirect = "acabou.php";
    header("location:$redirect");
}


if ($number > $s->size() - 1) {
    $number = $number - 1;
}
$conn->close();

$redirect = "index-semente.php?id=" . $s->getObjI($number)->getId() . "&number=" . ($number) . "&save=" . $result;

header("location:$redirect");



