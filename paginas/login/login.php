<?php 

  session_start(); 

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Interclasses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary text-center">
    <div class="container w-100 m-auto">  
        <div class="row align-items-center  mt-5">
            <form class="col" action="../cadastro/bd.php" method="post">
            
                    <img class="mb-4" src="../../img/logo_senac.png" alt="" width="30%">
                    <h1 class="h3 mb-3 fw-normal">Interclasses</h1>
                    <div class="form-floating">
                      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" autocomplete="on" required>
                      <label for="floatingInput">Digite seu e-mail...</label>
                    </div>
                    <div class="form-floating">
                      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" autocomplete="on" required>
                      <label for="floatingPassword">Digite sua senha...</label>
                    </div>
            
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Entrar</button>

                   

                    <?php
                        
                        if (!empty($_SESSION['ok'])) {
                          echo $_SESSION['ok'];
                          unset($_SESSION['ok']);
                        }

                        $_SESSION['tela'] = 'login';

                        include_once "../componentes/rodape.php";
                    ?>
                    <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2024</p> -->
            </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>