<?php

    include_once "../conn.php";
        /* BUSCA NO BANCO DE DADOS OS PONTOS DA EQUIPE DO USUÁRIO, BUSCANDO PELOS JOGOS QUE VENCERAM */
        $pontuacao = BuscaPontosGeral($_SESSION['turma']);
        //$contPontuacao = count($pontuacao);
        //$pontuacao = 100;
       // print_r(count($pontuacao));
        $jogos = BuscaJogosDia();
        $pontoperdidos = BuscaPontosPerdidos($_SESSION['turma']);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <?php
            include '../componentes/topo.php';
            
        ?>
        <br>
        <div class="container text-center mt-5">
            <h4 class="border border-2 border-warning rounded-2 text-uppercase text-white py-2 px-2 mb-2 bg-warning">Equipe - <?php echo $_SESSION['turma'] ?></h4>
            <a class="btn btn-danger mb-4 w-100" href="../../assets/arq/RegulamentoInterclasses2024.pdf" download="RegulamentoInterclasses2024.pdf">Acessar o regulamento do Interclasses - 2024</a>
            <div class="row mx-1">
                <div class="col-md-12 border border-2 rounded-2 border-primary">
                       <h4 class="text-primary">JOGOS DO DIA</h4> 
                </div>
            </div>
                
          <a href="http://"></a>  
          <div class="row mt-2">    
                <div class="col">
                    Próximos Jogos
                </div>
                <div class="col">
                    <a href="../cronograma/">Veja Mais</a>
                </div>
            </div>

            <?php //print_r($jogos);

                if ($jogos) {
                    foreach ($jogos as $key => $value) {

                
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
                                        echo "<img src='../../img/EspBasq.png' width='50px' height='50px'>";
                                    }
    
    
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
    
                        echo "</div>";
                    }
                } else {
                    
                    echo "<div class='alert alert-success mt-3' role='alert'>Nenhum jogo cadastrado para hoje.</div>";

                }
                
            ?>

            <div class="row mt-4 mx-1">
                <div class="col-md-12 border border-2 rounded-2 border-primary">
                       <h4 class="text-primary">PONTOS GANHOS</h4> 
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    Detalhes da pontuação:
                </div>
                <div class="col">
                    <a href="../pontuacaoGeral/">Veja Mais</a>
                </div>
            </div>

            <div class="card my-auto mt-3 border-0">
                <img src="../../img/geralPont.png" class="card-img"> 
                <div class="card-img-overlay d-flex justify-content-center">
                    <div class="row">
                        <div class="col my-auto">
                            <h4 class="text-white fw-bold"><?php echo $pontuacao['total'] . " PONTOS";?></h4>
                        </div>
                    </div>
                </div>
            </div>
            
           

            <div class="row mt-4 mx-1">
                <div class="col-md-12 border border-2 rounded-2 border-warning">
                       <h4 class="text-warning">PONTOS PERDIDOS</h4> 
                </div>
            </div>
            <div class="card my-auto mt-3 border-0">
                <img src="../../img/percaPont.png" class="card-img"> 
                <div class="card-img-overlay d-flex justify-content-center">
                    <div class="row">
                        <div class="col my-auto">
                            <h4 class="text-white fw-bold">
                                <?php 
                                    $soma = 0;
                                   
                                    foreach ($pontoperdidos as $key => $value) {
                                        
                                       $soma += $pontoperdidos[$key]['pontosperdidos'];
                                    }
                                    echo $soma . " PONTOS";
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </div>

        <br><br><br>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    <?php
        include '../componentes/rodape.php';
    ?>
</html>


