<?php 

  session_start(); 
  $_SESSION['tela'] = 'caddenuncia';
  
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
                    <h1 class="h3 mb-3 fw-normal">Cadastro de Denúncias</h1>
                    <div class="form-floating">

                        <input class="form-control invisible" type="text" name="denunciante" id="" value="<?php echo $_SESSION['turma']; ?>">
                        <label for="floatingInput">Denunciante: equipe <?php echo $_SESSION['turma']; ?></label>
                    </div>
                    <div class="form-floating">
                        <select class="form-control" name="denunciado" required>
                            <option value="">...</option>
                            <option value="Pandora">Pandora</option>
                            <option value="Anacrônico">Anacrônico</option>
                            <option value="Corsário">Corsário</option>
                            <option value="Juízo Final">Juízo Final</option>
                            <option value="Atena">Atena</option>
                            <option value="Fênix">Fênix</option>
                        </select>
                        <label for="floatingInput">Denunciada (equipe agressora)...</label>
                    </div>
                    <div class="form-floating">
                   <!--  <input class="form-control" type="text" name="descricao" rows="6" id=""> -->
                        <textarea class="form-control" name="descricao" id="" rows="15" required></textarea>
                        <label for="floatingInput">Descreva aqui o aconteceu...</label>
                    </div>
                    
            
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Cadastrar Denúncia</button>
                   
                   <?php
                        if (!empty($_SESSION['ok'])) {
                            echo $_SESSION['ok'];
                            unset($_SESSION['ok']);
                        }
                    ?>
            </form>
            
        </div>
    </div>

    <?php                        
        
        include_once "../componentes/rodape.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>