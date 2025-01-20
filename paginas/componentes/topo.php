<nav class="navbar navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="
      <?php 
          echo "../home/homeadm.php";
      ?>   
    ">
      <img src="../../img/logo_senac.png" alt="Bootstrap" width="50" >
    </a>
    <div class="navbar-brand">Interclasses 2024</div>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opções:</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body">
        <ul class="navbar-nav justify-center flex-grow-1 pe-3">
        
          
          
            if ($_SESSION['acesso']) { 
              echo "<li class='nav-item align-self-center'>";
                echo "<a class='nav-link active' aria-current='page' href='../home/homeadm.php'>Home</a>";
              echo "</li>";
              echo "<li class='nav-item align-self-center'>";
                echo "<a class='nav-link active' aria-current='page' href='../cadastro/cadaluno.php'>Cadastro de usuários</a>";
              echo "</li>";

              echo "<li class='nav-item align-self-center'>";
                echo "<a class='nav-link active' aria-current='page' href='../cadastro/cadjogos.php'>Cadastro de jogos</a>";
              echo "</li>";

              echo "<li class='nav-item align-self-center'>";
                echo "<a class='nav-link active' aria-current='page' href='../cadastro/cadpontos.php'>Lançamento dos pontos extras</a>";
              echo "</li>";

              echo "<li class='nav-item align-self-center'>";
                echo "<a class='nav-link active' aria-current='page' href='../cadastro/visresultados.php'>Lançamento de resultados</a>";
              echo "</li>";

              echo "<li class='nav-item align-self-center'>";
                echo "<a class='nav-link active' aria-current='page' href='../cadastro/visdenuncias.php'>Análise de denúncias</a>";
              echo "</li>";

            }

            if ($_SESSION['acesso'] == 1) {
              
              echo "<li class='nav-item align-self-center'>";
                echo "<a class='nav-link active' aria-current='page' href='../home/'>Home</a>";
              echo "</li>";
              echo "<li class='nav-item align-self-center'>";
                echo "<a class='nav-link active' aria-current='page' href='../cadastro/visdenunciaturmas.php'>Denúncias</a>";
              echo "</li>";
            }
          

          
          <li class="nav-item align-self-center">
            <a class="nav-link active" aria-current="page" href="../sobre/">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li> 
          <li class="nav-item align-self-center">
            <a class="nav-link active" aria-current="page" href="../componentes/logout.php">Sair</a>
          </li>
          
        </ul>
      </div>
    </div> -->
  </div>
</nav>