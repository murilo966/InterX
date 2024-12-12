<?php 

  session_start(); 
  $_SESSION['tela'] = 'cadjogos';

  if (!isset($_SESSION['usuario']) OR ($_SESSION['usuario'] == 2)) {

    echo "<script>alert('Usuário não logado ou sem permissão de acesso!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../login/login.php'/>";
}


?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Jogos - Interclasses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary text-center">
  <?php
      include_once "../componentes/topo.php";
    ?>
    <div class="container w-100 m-auto">  
        <div class="row align-items-center  mt-5">
            <form class="col" action="../cadastro/bd.php" method="post">
            
                    <img class="mb-4" src="../../img/logo_senac.png" alt="" width="30%">
                    <h1 class="h3 mb-3 fw-normal">Cadastro de jogos</h1>
                    <div class="form-floating">
                        <select class="form-control" name="modalidade" required>
                            <option value="">...</option>
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
                        <label for="floatingInput">Selecione a modalidade...</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-control" name="time1" required>
                            <option value="">...</option>
                            <option value="Pandora">Pandora</option>
                            <option value="Anacrônico">Anacrônico</option>
                            <option value="Corsário">Corsário</option>
                            <option value="Juízo Final">Juízo Final</option>
                            <option value="Atena">Atena</option>
                            <option value="Fênix">Fênix</option>
                        </select>
                        <label for="floatingInput">Selecione o 1° time...</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-control" name="time2" required>
                            <option value="">...</option>
                            <option value="Pandora">Pandora</option>
                            <option value="Anacrônico">Anacrônico</option>
                            <option value="Corsário">Corsário</option>
                            <option value="Juízo Final">Juízo Final</option>
                            <option value="Atena">Atena</option>
                            <option value="Fênix">Fênix</option>
                        </select>
                        <label for="floatingInput">Selecione o 2° time...</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-control" name="local" required>
                            <option value="">...</option>
                            <option value="Ginásio interno">Ginásio interno</option>
                            <option value="Área externa">Área externa</option>
                        </select>
                        <label for="floatingInput">Selecione o local...</label>
                    </div>
                    <div class="form-floating">
                      <input type="date" class="form-control" name="data" id="floatingInput" placeholder="Data do jogo..." required>
                      <label for="floatingInput">Data do jogo...</label>
                    </div>
                    <div class="form-floating">
                      <input type="time" class="form-control" name="hora" id="floatingPassword" placeholder="Hora do jogo..." required>
                      <label for="floatingPassword">Hora do jogo...</label>
                    </div>
            
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Cadastrar</button>

            </form>
            <?php
                        
                        if (!empty($_SESSION['ok'])) {
                          echo $_SESSION['ok'];
                          unset($_SESSION['ok']);
                        }

                    ?>
        </div>
    </div>

    <?php
        include_once "../componentes/rodape.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>