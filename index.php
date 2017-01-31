<!DOCTYPE html>

<?php
include_once "exibir.php";
include_once "semente.php";
include_once "base.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Site para classificaçao de imagens</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/portfolio-item.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="sec-title text-center">
                <h1> Sementes para classificação </h1>
            </div>

            <div class="sec-sub-title">
                <h3> Ao realizar a análise, classificar a porção da semente quanto aos danos somente dessa porção. </h3>
            </div>

            <form action="index-semente.php" method="get">
                <?php
                $s = getSementes();

                if ($s->size() == 0) {
                    $redirect = "acabou.php";
                    header("location:$redirect");
                }


                $i = 0;
                for ($i = 0; $i < count($s->getObj()); $i++) {
                    $x = $s->getObjI($i);
                    echo "  <div class='col-md-1'>
                <label id=la> " . $x->getId() . " </label>
                <a href='index-semente.php?id=" . $x->getId() . "&number=" . $i . "' class='thumbnail'>
                    <img src=\"./img/" . $x->getNome() . "\" width='150' height='150' >  
                </a>
            </div>";
                }
                ?>

            </form>
        </div>
    </body>
</html>
