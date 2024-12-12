<?php 
  include_once "../conn.php";
  //session_start(); 
  $_SESSION['tela'] = 'visdenuncias';

  if (!isset($_SESSION['usuario']) OR ($_SESSION['usuario'] == 2)) {

    echo "<script>alert('Usuário não logado ou sem permissão de acesso!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../login/login.php'/>";
}

  $resultado = BuscaDenuncias();
  //print_r($resultado);

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Análise de Denúncias - Interclasses</title>
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
                    <h1 class="h3 mb-3 fw-normal">Análise de Denúncias</h1>

                    <?php
                if (!empty($_SESSION['ok'])) {
                    echo $_SESSION['ok'];
                    unset($_SESSION['ok']);
                }
            ?>

                    <!-- ADICIONA DINAMICAMENTO TODOS OS JOGOS CADASTRADOS -->
                    <?php
                      foreach ($resultado as $key => $value) {
                      echo "<div class='border rounded-3 mb-3 mt-3 px-2 py-2 bg-white'>";
                      echo "<p> Turma Denunciante: ".$resultado[$key]['turmaagredida']."<br>Turma Denuciada: ". $resultado[$key]['turmadenunciada'] ."</p>";
                      echo "<p> Descrição da denúncia: ".$resultado[$key]['descricao']."</p>";
                      echo "<a class='btn btn-primary w-100' href='cadanalisedenuncia.php?id=".$resultado[$key]['id']."&turmaagredida=".$resultado[$key]['turmaagredida']."&turmadenunciada=".$resultado[$key]['turmadenunciada']."&descricao=".$resultado[$key]['descricao']."' value='Adicionar Resultado'>Análisar Denúncia</a>";
                      echo "</div>";
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