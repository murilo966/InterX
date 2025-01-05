
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - Nós</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary text-center">
    <?php
        include_once "../componentes/topo.php";
    ?>

    <div class="container mt-5 w-80 m-auto text-center">
      <img class="mt-3 mb-4" src="../../img/logo_senac.png" alt="" width="30%">
      <br><br>
      <h4>Sobre o projeto:</h4>
      <p class="mb-3 fw-normal">
          Este projeto tem como objetivo integrar, todas as informações sobre os esportes, regulamentos,
          pontuações e penalidades do interclasses, que ocorrerá nos dias 16, 17 e 18 de outubro de 2024.
          Nossa missão é por meio da tecnologia criar uma solução inovadora para todo o processo, tornando-o
          o seu uso mais fácil e prático para todos os envolvidos.
      </p>
      <br><br>

      <div class="container w-75">
        <h4 class="mb-3">Responsáveis pelo projeto:</h4>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card">
              <img src="../../img/prof.jpg" class="card-img-top" >
              <div class="card-body text-center">
                <h6 class="card-title">Prof. Clerison Bueno</h6>
                <p class="card-text">Professor de formação técnica e profissional do EMED Informática</p>
                
                <a href="https://github.com/clerisonbueno" class="mx-2" target="_blank" style="text-decoration: none; border: none;">
                  <img src="../../img/GitHub-Logo.png" width="25px" height="25px" >
                </a>
                <a href="https://www.linkedin.com/in/clerisonbueno/" class="mx-2" target="_blank" style="text-decoration: none; border: none;">
                  <img src="../../img/linkedin-icon.webp" width="25px" height="25px">
                </a>
               
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="card">
              <img src="../../img/Aluno.jpg" class="card-img-top" width="202px">
              <div class="card-body text-center">
                <h6 class="card-title">Murilo de Sousa</h6>
                <p class="card-text">Aluno do 3° ano do EMED Informática</p>
                <a href="https://github.com/murilo966" class="mx-2" target="_blank" style="text-decoration: none; border: none;">
                  <img src="../../img/GitHub-Logo.png" width="25px" height="25px">
                </a>
                <a href="https://www.instagram.com/mur.ilosousa/" class="mx-2" target="_blank" >
                  <img src="../../img/Instagram_icon.webp" width="25px" height="25px">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <br><br><br>

      <?php
        include_once "../componentes/rodape.php";
      ?>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>