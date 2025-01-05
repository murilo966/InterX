<?php
  include_once "../conn.php";

  /* VARIÁVEL PARA SOMAR O TOTAL DAS PONTUAÇÕES */
  $calc = 0;

  /* PONTOS GANHOS NA MODALIDADE */
  $pontosmodal = 0;

  /* PONTOS ZERADOS */
  $pontozero = 0;

  /* VARIÁVEL PARA VALIDAR AS MODALIDADES QUE TEM PONTOS */
  $valida = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PontuaçãoTurma</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <?php
            include '../componentes/topo.php';
        ?>
        <br><br>
        <div class="container  text-center mt-5">
            <h4 class="border border-2 border-warning rounded-2 text-uppercase text-white py-2 px-2 mb-3 bg-warning">Equipe - <?php echo $_SESSION['turma'] ?></h4>
            
            <div class="row container-xxl">
                <div class="col ms-4">
                    <div class="row border-bottom border-1 border-dark py-2 fw-bold">Modalidade</div>
                    <div class="row border-bottom border-1 py-2">Futsal</div>
                    <div class="row border-bottom border-1 py-2">Basquete 3x3</div>
                    <div class="row border-bottom border-1 py-2">Queimada mista</div>
                    <div class="row border-bottom border-1 py-2">Vôlei misto</div>
                    <div class="row border-bottom border-1 py-2">Tênis de mesa</div>
                    <div class="row border-bottom border-1 py-2">Xadrez</div>
                    <div class="row border-bottom border-1 py-2">Cabo de guerra misto</div>
                    <div class="row border-bottom border-1 py-2">Jogo online</div>
                    <div class="row border-bottom border-1 py-2">Gincana de LGG</div>
                    <div class="row border-bottom border-1 py-2">Desenho</div>
                    <div class="row border-top border-1 border-dark py-2 fw-bold">Total</div>
                </div>
                <div class="col ">
                    <div class="row border-bottom border-1 border-dark py-2 fw-bold">Pontuação</div>
                    <div class="row border-bottom border-1 py-2">

                        <?php
                           /*  echo "<pre>";
                            print_r($resultado);
                            echo "</pre>"; */
                            foreach ($resultado['dados'] as $key => $value) {
                               
                                if ($resultado['dados'][$key]['modalidade'] == 'Futsal' AND $resultado['dados'][$key]['pontos'] > 0) {
                                    
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            }
                            $pontosmodal = 0; 
                        ?>
                    </div>
                    <div class="row border-bottom border-1 py-2">
                        <?php
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['modalidade'] == 'Basquete 3x3' AND $resultado['dados'][$key]['pontos'] > 0) {
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            }
                            $pontosmodal = 0;                        
                        ?>
                    </div>
                    <div class="row border-bottom border-1 py-2">
                        <?php
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['modalidade'] == 'Queimada mista' AND $resultado['dados'][$key]['pontos'] > 0 ) {
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            } 
                            $pontosmodal = 0;                          
                        ?>
                    </div>
                    <div class="row border-bottom border-1 py-2">
                        <?php
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['modalidade'] == 'Vôlei misto' AND $resultado['dados'][$key]['pontos'] > 0) {
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            } 
                            $pontosmodal = 0;                       
                        ?>
                    </div>
                    <div class="row border-bottom border-1 py-2">
                        <?php
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['modalidade'] == 'Tênis de mesa' AND $resultado['dados'][$key]['pontos'] > 0) {
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            } 
                            $pontosmodal = 0;                     
                        ?>
                    </div>
                    <div class="row border-bottom border-1 py-2">
                        <?php
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['modalidade'] == 'Xadrez' AND $resultado['dados'][$key]['pontos'] > 0) {
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            }  
                            $pontosmodal = 0;                      
                        ?>
                    </div>
                    <div class="row border-bottom border-1 py-2">
                        <?php
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['modalidade'] == 'Cabo de guerra misto' AND $resultado['dados'][$key]['pontos'] > 0) {
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            } 
                            $pontosmodal = 0;                       
                        ?>
                    </div>
                    <div class="row border-bottom border-1 py-2">
                        <?php
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['modalidade'] == 'Jogo online' AND $resultado['dados'][$key]['pontos'] > 0) {
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            } 
                            $pontosmodal = 0;                    
                        ?>
                    </div>
                    <div class="row border-bottom border-1 py-2">
                        <?php
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['modalidade'] == 'Gincana de LGG' AND $resultado['dados'][$key]['pontos'] > 0) {
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            }
                            $pontosmodal = 0;                       
                        ?>
                    </div>
                    <div class="row border-bottom border-1 py-2">
                        <?php
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['modalidade'] == 'Desenho' AND $resultado['dados'][$key]['pontos'] > 0) {
                                    $pontosmodal +=  $resultado['dados'][$key]['pontos'];
                                    $valida = 1;
                                }
                            }
                            
                            if ($valida == 1) {
                                echo $pontosmodal;
                                $valida = 0;
                            } else {
                                echo $pontozero;
                            } 
                            $pontosmodal = 0;                  
                        ?>
                    </div>
                    <div class="row border-top border-1 border-dark py-2 fw-bold">
                        <?php 
                            $resultado = BuscaPontosGeral($_SESSION['turma']);
                            foreach ($resultado['dados'] as $key => $value) {
                                if ($resultado['dados'][$key]['SUM(pontos)'] > 0) {
                                    $calc += $resultado['dados'][$key]['SUM(pontos)'];
                                }
                            }

                            echo $calc;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    <?php
        include '../componentes/rodape.php';
    ?>
</html>


