<?php 

  session_start(); 
  $_SESSION['tela'] = 'cadresultados';

  if (!isset($_SESSION['usuario']) OR ($_SESSION['usuario'] == 2)) {

    echo "<script>alert('Usuário não logado ou sem permissão de acesso!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../cadastro/cadaluno.php'/>";
}


?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Resultados - Interclasses</title>
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
                    <h1 class="h3 mb-3 fw-normal">Cadastro de Resultados</h1>

                    <div class="border rounded-3 mb-3 mt-3 px-2 py-2 bg-white">
                        <!-- <label class="" for="id">Identificação do jogo</label> -->
                        
                        <p><?php echo $_GET['modalidade']. " - Dia " . $_GET['data'] . " às " . $_GET['hora']?></p>
                        <p><?php echo $_GET['time1'] . " X " . $_GET['time2']?></p>
                        <input class="form-control" type="text" name="resultado" id="" placeholder="Digite o resultado. Ex: 05 x 02" required>
                        <select class="form-control" name="vencedor" required>
                            <option value="">Selecione a equipe vencedora...</option>
                            <option value="Pandora">Pandora</option>
                            <option value="Anacrônico">Anacrônico</option>
                            <option value="Corsário">Corsário</option>
                            <option value="Juízo Final">Juízo Final</option>
                            <option value="Atena">Atena</option>
                            <option value="Fênix">Fênix</option>
                        </select>
                        <input class="btn btn-primary w-100 mt-2" type="submit" value="Salvar Resultado">
                    </div>
                    <input class="form-control text-center mb-3 invisible" type="text" name="id" id="id" value="<?php echo $_GET['id'] ?>">
            </form>
        </div>
    </div>

    <?php                        
        
        include_once "../componentes/rodape.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>