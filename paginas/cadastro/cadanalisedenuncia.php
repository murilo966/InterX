<?php 

  session_start(); 
  $_SESSION['tela'] = 'cadanaliseresultados';

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
                        
                        <p> <?php echo "Turma Denunciante: ".$_GET['turmaagredida']."<br>Turma Denuciada: ". $_GET['turmadenunciada']; ?></p>
                        <p> <?php echo "Descrição da denúncia: ".$_GET['descricao']; ?></p>
                        <input class="form-control" type="text" name="analise" id="" placeholder="Digite o resultado da análise da denúnica..." required>
                        <select class="form-control" name="veredito" required>
                            <option value="">Selecione o veredito...</option>
                            <option value="Procedente">Procedente</option>
                            <option value="Improcedente">Improcedente</option>
                        </select>
                        <select class="form-control" name="gravidade" required>
                            <option value="">Selecione a gravidade...</option>
                            <option value="Gravíssima">Gravíssima</option>
                            <option value="Grave">Grave</option>
                            <option value="Média">Moderada</option>
                            <option value="Leve">Leve</option>
                            <option value="Não">Não se aplica</option>
                        </select>
                        <select class="form-control" name="pontosperdidos" required>
                            <option value="">Selecione pontuação perdida...</option>
                            <option value="500">500</option>
                            <option value="300">300</option>
                            <option value="150">150</option>
                            <option value="50">50</option>
                            <option value="0">0</option>
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