<?php
  /* INICIAR UMA VARIÁVEL DE SESSÃO */
  session_start();

  /* SESSÃO PARA IDENTIFICAÇÃO DA TELA ATUAL - UTILIZADA PARA DIRECIONAR AS AÇÕES NO BD.PHP */
  $_SESSION['tela'] = 'cadaluno';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary text-center">
  <?php
      include_once "../componentes/topo.php";
    ?>

    <div class="container mt-5 w-100 m-auto">
        <form action="bd.php" method="post">
         
                <img class="mb-4" src="../../img/logo_senac.png" alt="" width="30%">
                <h1 class="h3 mb-3 fw-normal">Cadastro de usuários</h1>
            
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="Name" name="name" required>
                  <label for="floatingInput">Digite o nome do usuário.</label>
                </div>
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                  <label for="floatingInput">Digite o e-mail do usuário.</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                  <label for="floatingPassword">Digite a senha.</label>
                </div>

                <select class="form-select form-select-lg" aria-label="Default select example" name="team" required>
                  <option value="">Selecione o vínculo...</option>
                  <option value="Professor">Professor</option>
                  <option value="Pandora">Turma Pandora</option>
                  <option value="Anacrônico">Turma Anacrônico</option>
                  <option value="Corsário">Turma Corsário</option>
                  <option value="Fênix">Turma Fênix</option>
                  <option value="Atena">Turma Atena</option>
                  <option value="Juízo Final">Turma Juízo Final</option>  
                </select>
                <button class="btn btn-primary w-100 py-2 mt-3" name="cadaluno" type="submit">Cadastrar usuário</button> 

                <?php
                  if (!empty($_SESSION['ok'])) {
                            echo $_SESSION['ok'];
                            unset($_SESSION['ok']);
                  }
                ?>
          
        </form>

        <?php
          include_once "../componentes/rodape.php";
        ?>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>