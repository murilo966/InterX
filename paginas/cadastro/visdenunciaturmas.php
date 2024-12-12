<?php 
  include_once "../conn.php";
  //session_start(); 
  $_SESSION['tela'] = 'visdenuncias';

  if (!isset($_SESSION['usuario'])) {

    echo "<script>alert('Usuário não logado!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../login/login.php'/>";
  } else {

    $resultado = BuscaDenunciasTurmas();
    //print_r($resultado);

    $res = ContaDenuncias($_SESSION['turma']);
    //print_r($res);

    $resultado2 = BuscaDenunciasRealizada();
  }



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
                <h1 class="h3 mb-3 fw-normal">Denúncias</h1>

                <a class="btn btn-primary w-100" href="caddenuncia.php">Cadastrar nova denúncia</a>
                <p class="mt-4 border-bottom border-top border-2 border-primary fw-bold">Denúncias contra a sua equipe</p>

                <?php
                    if (!empty($_SESSION['ok'])) {
                        echo $_SESSION['ok'];
                        unset($_SESSION['ok']);
                    }


                   //ADICIONA DINAMICAMENTO TODOS AS DENÚNCIAS CADASTRADAS PARA A EQUIPE DO USUÁRIO LOGADO

                    if (!$resultado) {

                        echo "<div class='alert alert-success mt-2' role='alert'>Nenhuma denúncia contra a sua equipe.</div>";
                    } else {
                      
                        /* foreach ($resultado as $key => $value) {
                            echo "<div class='border rounded-3 mb-3 mt-3 px-2 py-2 bg-white'>";
                            echo "<p> Turma Denunciante: ".$resultado[$key]['turmaagredida']."<br>Turma Denuciada: ". $resultado[$key]['turmadenunciada'] ."</p>";
                           
                            echo "<p> Pontos perdidos: ".$resultado[$key]['pontosperdidos']."</p>";
                            echo "<p> Status da Denúncia: ".$resultado[$key]['status']."</p>";
                            echo "</div>";
                        } */
                      
                      echo "<p>Quantidade - " .$res[0]["COUNT(pontosperdidos)"]. "</p>";
                      echo "<p>Total de pontos perdidos - " . $res[0]['SUM(pontosperdidos)'] . "</p>";
                     
                    }
                ?>

              <p class="mt-5 border-bottom border-top border-2 border-primary fw-bold">Acompanhamento das denúncias realizadas</p>
              <?php
                  
                   //ADICIONA DINAMICAMENTO TODOS AS DENÚNCIAS CADASTRADAS PARA A EQUIPE DO USUÁRIO LOGADO

                    if (!$resultado2) {

                        echo "<div class='alert alert-success mt-2' role='alert'>Nenhuma denúncia cadastrado pela sua equipe.</div>";
                    } else {
                      
                        foreach ($resultado2 as $key => $value) {
                            echo "<div class='border rounded-3 mb-3 mt-3 px-2 py-2 bg-white'>";
                            echo "<p> Turma Denunciante: ".$resultado2[$key]['turmaagredida']."<br>Turma Denuciada: ". $resultado2[$key]['turmadenunciada'] ."</p>";
                            echo "<p> Descrição da denúncia: ".$resultado2[$key]['descricao']."</p>";
                            echo "<p> Pontos perdidos: ".$resultado2[$key]['pontosperdidos']."</p>";
                            echo "<p> Status da Denúncia: ".$resultado2[$key]['status']."</p>";
                            echo "</div>";
                        }
                     
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