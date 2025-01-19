<?php 

  session_start(); 
  $_SESSION['tela'] = 'cadpontos';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Pontos - Interclasses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary text-center">
  <?php
      include_once "../componentes/topo.php";
    ?>
    <div class="container w-100 m-auto">  
        <div class="row align-items-center mt-5">
            <form class="col" action="../cadastro/bd.php" method="post">
            
                    <img class="mb-4" src="../../img/logo_senac.png" alt="" width="30%">
                    <h1 class="h3 mb-3 fw-normal">Cadastro de Pontos</h1>

                    <div class="border rounded-3 mb-3 mt-3 px-2 py-2 bg-white">
                        <p class="" for="id"> Utilize este espaço somente para cadastrar pontos das equipes campeãs e vice campeãs, participação, fairplay, torcida, etc.

                        </p>
                       
                        <select class="form-control mb-1" name="modalidade" required>
                            <option value="">Selecione a modalidade...</option>
                            <option value="Futsal">Futsal</option>
                            <option value="Basquete 3x3">Basquete 3x3</option>
                            <option value="Queimada mista">Queimada mista</option>
                            <option value="Vôlei misto">Vôlei misto</option>
                            <option value="Tênis de mesa">Tênis de mesa</option>
                            <option value="Xadrez">Xadrez</option>
                            <option value="Cabo de guerra misto">Cabo de guerra misto</option>
                            <option value="Jogo online">Jogo online</option>
                            <option value="Gincana de LGG">Gincana de LGG</option>
                            <option value="Desenho">Desenho</option>
                        </select>

                        <select class="form-control mb-1" name="equipe" required>
                            <option value="">Selecione a equipe...</option>
                            <option value="Pandora">Pandora</option>
                            <option value="Anacrônico">Anacrônico</option>
                            <option value="Corsário">Corsário</option>
                            <option value="Juízo Final">Juízo Final</option>
                            <option value="Atena">Atena</option>
                            <option value="Fênix">Fênix</option>
                        </select>

                        <input class="form-control mb-1" type="text" name="justificativa" id="pontos" placeholder="Digite a justificativa..." required>
                        
                        <select class="form-control mb-1" name="titulo" required>
                            <option value="">Selecione o título conquistado...</option>
                            <option value="Campeão">Campeão</option>
                            <option value="Vice Campeão">Vice Campeão</option>
                            <option value="Pontos de participação">Pontos de participação</option>
                            <option value="Fair Play">Fair play</option>
                            <option value="Torcida">Torcida</option>
                            
                        </select>

                        <select class="form-control mb-1" name="pontos" required>
                            <option value="">Selecione os pontos ganhos...</option>
                            <option value="500">500</option>
                            <option value="200">400</option>
                            <option value="200">300</option>
                            <option value="200">200</option>
                            <option value="150">150</option>
                            <option value="100">100</option>
                            <option value="50">50</option>
                        </select>

                        <input class="btn btn-primary w-100 mt-2 mb-3" type="submit" value="Adicionar os pontos">

                        <?php
                        
                            if (!empty($_SESSION['ok'])) {
                            echo $_SESSION['ok'];
                            unset($_SESSION['ok']);
                            }

                        ?>
                    </div>
                    
            </form>

            
        </div>
    </div>

    <?php                        
        
        include_once "../componentes/rodape.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
  </body>
</html>