<!DOCTYPE html>
<?php
include_once "exibir.php";
include_once "semente.php";
include_once "base.php";
$save = 0;
$id = $_GET["id"];
$number = $_GET["number"];
$s = getSementes();
$sem = $s->getObjI($number);
if (isset($_GET["save"])) {
    $save = $_GET["save"];
}
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Site para classificação de imagens</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/portfolio-item.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">


    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="index.php">Classificação de Sementes</a>
                </div>
            </div>
        </nav>

        <div class="container" id="container">

            <!-- Portfolio Item Heading -->
            <div class="row">
                <div class="col-md-6">
                    <h2 >Semente <?php $id ?></h2>
                    <div class="btn-group pull-right">
                        <?php
                        if ($number == 0) {
                            echo "<a href='#' class='btn btn-danger' role='button' disabled>Anterior</a>";
                        } else {
                            echo "<a href='index-semente.php?id=" . $s->getObjI($number - 1)->getId() . "&number=" . ($number - 1) . "' class='btn btn-success' role='button'>Anterior</a>";
                        }
                        if ($number == $s->size() - 1) {
                            echo "<a href='#' class='btn btn-danger' role='button' disabled>Próxima</a>";
                        } else {
                            echo "<a href='index-semente.php?id=" . $s->getObjI($number + 1)->getId() . "&number=" . ($number + 1) . "' class='btn btn-success' role='button'>Próxima</a>";
                        }
                        ?>
                    </div>
                </div>


                <div class="col-md-6">
                    <h2>Classificação </h2>

                </div>
            </div>

            <!-- /.row -->

            <!-- Portfolio Item Row -->
            <div class="row">
                <div class="col-md-6">
                    <br/>
                    <span class='zoom' id='ex1'>
                        <img id='zoom_01' src="<?php echo "./img/" . $sem->getNome(); ?> " height="500px" class='center-block'> 
                    </span>
                </div>    

                <div class="col-md-6">
                    <form action="inserir.php" method="get">
                        <input type='hidden' name='id_semente' value="<?php echo $id; ?>">
                        <input type='hidden' name='number' value="<?php echo $number; ?>">
                        * Se a semente apresentar mais de um dano, selecione o dano mais presente e/ou mais forte
                        e escreva os outros danos na area de texto.
                        <h4>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Perfeita">Perfeita</label>
                                </div>
                                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Umidade-2" >Umidade - 2</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Umidade-3">Umidade - 3</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Umidade-4">Umidade - 4</label>
                                </div>
                                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Mecanico-2">Mecânico - 2</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Mecanico-3">Mecânico - 3</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Mecanico-4">Mecanico - 4</label>
                                </div>
                                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Percevejo-2">Percevejo - 2</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Percevejo-3">Percevejo - 3</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Percevejo-4">Percevejo - 4</label>
                                </div>

                                <div class="devider"></div>
                                <br/>
                                Outros danos:
                                <textarea rows="4" cols="20" name='texto'></textarea>                                
                            </div>

                            <div class="col-md-6">
                                <br/><br/>
                                <div class="devider devider2"></div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Umidade-5">Umidade - 5</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Umidade-6" >Umidade - 6</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Umidade-7" >Umidade - 7</label>
                                </div>
                                <div class="devider"></div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Mecanico-5">Mecânico - 5</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Mecanico-6">Mecânico - 6</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Mecanico-7">Mecânico - 7</label>
                                </div>
                                <div class="devider"></div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Percevejo-5">Percevejo - 5</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Percevejo-6">Percevejo - 6</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="Percevejo-7">Percevejo - 7</label>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </div>
                        </h4>
                    </form>
                </div>  
            </div> 
        </div>
        <div class='error' style='display:none'>Event Created</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#ex1').zoom({magnify: 2});

                var save = <?php echo $save; ?>;
                if (save === 1) {
                    $('.error').addClass("alert-success");
                    $('.error').text("Semente salva com sucesso!").fadeIn(400).delay(1500).fadeOut(400);
                    
                } else if (save === 2){
                    $('.error').addClass("alert-danger");
                    $('.error').text("Algum erro aconteceu!").fadeIn(400).delay(1500).fadeOut(400);
                    
                } else if (save === 3) {
                    $('.error').addClass("alert-warning");
                    $('.error').text("Selecione a classe!").fadeIn(400).delay(1500).fadeOut(400);
                    
                }
            });
        </script>
        <style>
            /* these styles are for the demo, but are not required for the plugin */
            .zoom {
                display:block;
            }

            .zoom img::selection { background-color: transparent; }
        </style>
        <script src='js/jquery.zoom.js'></script>        
    </body>
</html>

