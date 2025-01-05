<?php

    include_once "../conn.php";
    $resultado = BuscaJogosGeral();
    $jogos = BuscaJogosGeral();
    //print_r($jogos);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cronograma</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>



    <body>
        <?php
            include '../componentes/topo.php';
        ?>
        <br><br>
        <div class="container text-center mt-5">
            
            <h5 class="fw-bold">CALENDÁRIO DE JOGOS</h5>

             <!-- ADICIONA DINAMICAMENTO TODOS OS JOGOS CADASTRADOS -->
            <?php
                    /* foreach ($resultado as $key => $value) {
                      echo "<div class='border rounded-3 border-primary mb-3 mt-3 px-2 py-2 bg-white'>";
                      echo "<p>".$resultado[$key]['modalidade']." - Dia ". date('d/m/Y', strtotime($resultado[$key]['data'])) ." às ".$resultado[$key]['hora']."</p>";
                      echo "<p>Local: ".$resultado[$key]['local']."</p>";
                      echo "<p>".$resultado[$key]['time1']." X ".$resultado[$key]['time2']."</p>";
                      echo "</div>";
                    }  */ 

                    if($resultado){ 
                        foreach ($resultado as $key => $value) {
                            echo "<div class='border rounded-3 border-primary mb-3 mt-3 px-2 py-2 bg-white'>";
                                echo "<p>"." DIA : ". date('d/m/Y', strtotime($resultado[$key]['data'])) ." - LOCAL : ".$resultado[$key]['local']."</p>";
                                if ($jogos) {
                                        echo "<div class='card my-auto mt-3  border-0'>";
                                            echo "<img src='../../img/mistoContra.png' class='card-img' style='height: 80px; width: auto;'>";
                                            echo "<div class='card-img-overlay d-flex justify-content-center'>";
                                                echo "<div class='row'>";
                                                    
                                                    echo "<div class='col my-auto'>";
                                                        echo "<h5 class='fw-medium'>" . date('H:i', strtotime($jogos[$key]['hora'])) . "</h5>";
                                                    echo "</div>";

                                                    echo "<div class='col my-auto ms-3'>";

                                                            /* VERIFICA A EQUIPE 1 E ADICIONA O SÍMBOLO */   
                                                        if ($jogos[$key]['time1']  == 'Pandora') {
                                                                echo "<img src='../../img/Pandora.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time1']  == 'Anacrônico') {
                                                            echo "<img src='../../img/Anacronicos.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time1']  == 'Corsário') {
                                                            echo "<img src='../../img/Corsarios.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time1']  == 'Fênix') {
                                                            echo "<img src='../../img/Fenix.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time1']  == 'Atena') {
                                                            echo "<img class='border border-dark rounded-5' src='../../img/atena_.jpeg' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time1']  == 'Juízo Final') {
                                                            echo "<img class='border border-dark rounded-5' src='../../img/JuizoFinal.png' width='50px' height='50px'>";
                                                        }
                                                            
                                                    echo "</div>";
                
                                                    echo "<div class='col my-auto ms-3'>";
            
                                                        /* VERIFICA A EQUIPE 2 E ADICIONA O SÍMBOLO */   
                                                        if ($jogos[$key]['time2']  == 'Pandora') {
                                                            echo "<img src='../../img/Pandora.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time2']  == 'Anacrônico') {
                                                            echo "<img src='../../img/Anacronicos.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time2']  == 'Corsário') {
                                                            echo "<img src='../../img/Corsarios.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time2']  == 'Fênix') {
                                                            echo "<img src='../../img/Fenix.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time2']  == 'Atena') {
                                                            echo "<img class='border border-dark rounded-5' src='../../img/atena_.jpeg' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['time2']  == 'Juízo Final') {
                                                            echo "<img class='border border-dark rounded-5' src='../../img/JuizoFinal.png' width='50px' height='50px'>";
                                                        }
                                                        
                                                    echo "</div>";
                
                                                    echo "<div class='col my-auto ms-1'>";
                
                                                        /* VERIFICA A MODALIDADE A SER DISPUTADA E ADICIONA O SÍMBOLO */
                                                        if ($jogos[$key]['modalidade']  == 'Futsal') {
                                                            echo "<img src='../../img/EspFut.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['modalidade']  == 'Basquete 3x3') {
                                                            echo "<img src='../../img/EspBasq.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['modalidade']  == 'Queimada mista') {
                                                            echo "<img src='../../img/EspQueima.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['modalidade']  == 'Vôlei misto') {
                                                            echo "<img src='../../img/EspVolei.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['modalidade']  == 'Tênis de mesa') {
                                                            echo "<img src='../../img/EspPP.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['modalidade']  == 'Xadrez') {
                                                            echo "<img src='../../img/EspXadrez.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['modalidade']  == 'Cabo de guerra misto') {
                                                            echo "<img src='../../img/EspCG.png' width='50px' >";
                                                        } elseif ($jogos[$key]['modalidade']  == 'Jogo online') {
                                                            echo "<img src='../../img/EspJO.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['modalidade']  == 'Gincana de LGG') {
                                                            echo "<img src='../../img/EspGLgg.png' width='50px' height='50px'>";
                                                        } elseif ($jogos[$key]['modalidade']  == 'Desenho') {
                                                            echo "<img src='../../img/EspDesenho.png' width='55px' height='50px'>";
                                                        }
                
                
                                                    echo "</div>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                }
                            echo "</div>";
                        }
                    } else{
                        echo "<div class='alert alert-success mt-3' role='alert'>Nenhum jogo cadastrado para hoje.</div>";
                    }
                    

                    
            ?>
            
<!-- 
            <div class="row">
                <div class="col">
                    <div class="card mt-3 my-auto border-0">
                        <img src="../../img/FemContra.png" class="card-img" style="height: 80px;">
                        <div class="card-img-overlay d-flex justify-content-center" >
                            <div class="row">
                                <div class="col my-auto">
                                    8:00
                                </div>
                                <div class="col my-auto ms-3">
                                    <img src="../../img/Turmas.png" width="50px" height="50px">
                                </div>
                                <div class="col my-auto ms-3">
                                    <img src="../../img/Turmas.png" width="50px" height="50px">
                                </div>
                                <div class="col my-auto ms-1">
                                    <img src="../../img/EspVolei.png" width="50px" height="50px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-auto" style="width: 32px; margin-right:16px;">
                    <img src="../../img/complete.png" style="height: 30px; width: 32px;">
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="card mt-3 my-auto border-0">
                        <img src="../../img/MascContra.png" class="card-img" style="height: 80px;">
                        <div class="card-img-overlay d-flex justify-content-center" >
                            <div class="row">
                                <div class="col my-auto">
                                    9:00
                                </div>
                                <div class="col my-auto ms-3">
                                    <img src="../../img/Turmas.png" width="50px" height="50px">
                                </div>
                                <div class="col my-auto ms-3">
                                    <img src="../../img/Turmas.png" width="50px" height="50px">
                                </div>
                                <div class="col my-auto ms-1">
                                    <img src="../../img/EspVolei.png" width="50px" height="50px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-auto" style="width: 32px; margin-right:16px;">
                    <img src="../../img/pending.png" style="height: 30px; width: 32px;">
                </div>
            </div>
        
            
            <div class="row">
                <div class="col">
                    <div class="card mt-3 my-auto border-0">
                        <img src="../../img/NeutroContra.png" class="card-img" style="height: 80px;">
                        <div class="card-img-overlay d-flex justify-content-center" >
                            <div class="row">
                                <div class="col my-auto">
                                    10:00
                                </div>
                                <div class="col my-auto ms-3">
                                    <img src="../../img/Turmas.png" width="50px" height="50px">
                                </div>
                                <div class="col my-auto ms-3">
                                    <img src="../../img/Turmas.png" width="50px" height="50px">
                                </div>
                                <div class="col my-auto ms-1">
                                    <img src="../../img/EspVolei.png" width="50px" height="50px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-auto" style="width: 32px; margin-right:16px;">
                    <img src="../../img/pending.png" style="height: 30px; width: 32px;">
                </div>
            </div>
        </div> -->
        <br><br><br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    <?php
        include '../componentes/rodape.php';
    ?>
</html>


