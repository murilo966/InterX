<?php

/* $pontosatividades = 100; */


session_start();

function ConectaBD() {
    //$pdo = new PDO('mysql:host=localhost;dbname=ensin368_app', 'ensin368_app', 'Senac2024!!');
    $pdo = new PDO('mysql:host=localhost;dbname=cole6345_app', 'root', '');
    return $pdo;
}

function CadastrarAluno($nome, $email, $senha, $turma, $tipo, $responsavel, $data) {
    
    
    /* REALIZA A GRAVAÇÃO DOS DADOS DO ALUNO */
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT email FROM `usuarios` WHERE email=?");
    $sql->execute(array($email));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    if (empty($dados)) {
        /* SE NÃO ENCONTRAR USUÁRIO IGUAL GRAVA AS INFORMAÇÕES NO BANCO */
        $sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute(array($nome, $email, $senha, $turma, $tipo, $responsavel, $data));
        return 0;
    } else {
        /* SE ENCONTRAR USUÁRIO COM O MESMO E-MAIL RETORNAR 1 PARA MOSTRAR ERRO */
        return 1;
    }
    


}

function LoginAluno($senha, $email) {

    /* VALIDAÇÃO DO LOGIN DO USUÁRIO */
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");
    $sql->execute(array($email, $senha));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    //VERIFICA SE EXISTE UM USUÁRIO E SENHA VÁLIDO;
    if (empty($dados)) {

        /* SE NÃO TIVER DADOS VÁLIDOS GUARDA UM ALERT DE ERRO NA SESSÃO */
        $_SESSION['ok'] = "<div class='alert alert-danger mt-3' role='alert'>Usuário ou senha não encontrados!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../login/login.php'/>";
    } else {

        /* INICIA A SESSÃO USUÁRIO E GUARDA O USUÁRIO ATIVO */
        //session_start();

        $_SESSION['usuario'] = $dados[0]['email'];
        $_SESSION['acesso'] = $dados[0]['tipo'];
        $_SESSION['turma'] = $dados[0]['turma'];
      
        if ($_SESSION['acesso'] == 2) {
            echo "<meta http-equiv= 'refresh' content='0; URL=../home/homeadm.php'/>";
        } else {
            echo "<meta http-equiv= 'refresh' content='0; URL=../home/index.php'/>";
        }

    }

}

function CadJogos($modalidade, $time1, $time2, $local, $data, $hora) {

    /* REALIZA A GRAVAÇÃO DOS DADOS DOS JOGOS */
    $pdo = ConectaBD();
    $sql = $pdo->prepare("INSERT INTO `jogos` VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->execute(array($modalidade, '', $time1, $time2, $local,'','','', 1, $_SESSION['usuario'], $hora, $data));
    return $sql;
     
}

function CadDenuncia($denunciante, $denunciado, $descricao) {

        /* REALIZA A GRAVAÇÃO DOS DADOS DA DENÚNCIA */
        $pdo = ConectaBD();
        $sql = $pdo->prepare("INSERT INTO `denuncias` VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute(array($denunciante, $denunciado, $descricao, 'Em análise', '','','', '', 0, $_SESSION['usuario'], '', date("Y-m-d H:i:s")));
        return $sql;
    
}

function BuscaJogos() {

    /* REALIZA A  */
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `jogos` WHERE vencedor=? AND tipo=?");
    $sql->execute(array('',1));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $dados;
}

function BuscaDenuncias() {

    /* REALIZA A GRAVAÇÃO DOS DADOS DA DENÚNCIA */
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `denuncias` WHERE status=?");
    $sql->execute(array('Em análise'));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $dados;
}

function BuscaDenunciasTurmas() {

    /* REALIZA A GRAVAÇÃO DOS DADOS DA DENÚNCIA */
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `denuncias` WHERE turmadenunciada=?");
    $sql->execute(array($_SESSION['turma']));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $dados;
}

function BuscaDenunciasRealizada() {

    /* REALIZA A GRAVAÇÃO DOS DADOS DA DENÚNCIA */
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `denuncias` WHERE turmaagredida=?");
    $sql->execute(array($_SESSION['turma']));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $dados;
}



function AdicionarResultados($resultado, $vencedor, $id) {
    /* ALTERA OS JOGOS ADICIONANDO OS RESULTADOS */
    $pdo = ConectaBD();
    $sql = $pdo->prepare("UPDATE `jogos` SET resultado=?, vencedor=?, pontos=?, responsavel=? WHERE id=?");
    $sql->execute(array($resultado, $vencedor, 50, $_SESSION['usuario'], $id));
}

function AdicionarAnaliseDenuncias($analise, $veredito, $gravidade, $pontosperdidos, $id) {
    /* ALTERA AS DENÚNCIAS ADICIONANDO A ANÁLISE REALIZAD PELOS PROFESSORES */
    $pdo = ConectaBD();
    $sql = $pdo->prepare("UPDATE `denuncias` SET status=?, veredito=?, gravidade=?, pontosperdidos=?, respanalise=? WHERE id=?");
    $sql->execute(array('Finalizada', $veredito, $gravidade, $pontosperdidos, $_SESSION['usuario'], $id));

    
}

function BuscaPontos($turma) {

    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT modalidade, pontos FROM `jogos` WHERE vencedor=?");
    $sql->execute(array($turma));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    $pontosganhos['dados'] = $dados;
    $pontos = 0;

   /*  foreach ($dados as $key => $value) {
       $pontos+= $dados[$key]['SUM(pontos)']; 
    } */

    $pontosganhos['total'] = $pontos;

    return $pontosganhos;
    
}

function BuscaPontosGeral($turma) {

    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT SUM(pontos) FROM `jogos` WHERE vencedor=?");
    $sql->execute(array($turma));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    $pontosganhos['dados'] = $dados;
    $pontos = 0;

    foreach ($dados as $key => $value) {
       $pontos+= $dados[$key]['SUM(pontos)']; 
    }

    $pontosganhos['total'] = $pontos;

    return $pontosganhos;
    
}

function BuscaJogosGeral() {
    
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `jogos` WHERE tipo=? ORDER BY data");
    $sql->execute(array(1));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $dados;
}

function BuscaJogosDia() {

    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `jogos` WHERE data=? AND tipo=?");
    $sql->execute(array(date('Y-m-d'),1));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $dados;

}

function BuscaPontosPerdidos($turma) {

    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `denuncias` WHERE turmadenunciada=? AND status=?");
    $sql->execute(array($turma, 'Finalizada'));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $dados;
    
}

function BuscaPontosPerdidosGeral($turma) {

    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `denuncias` WHERE turmadenunciada=? AND status=?");
    $sql->execute(array($turma, 'Finalizada'));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
    $perdidos = 0;
    

    foreach ($dados as $key => $value) {
        $perdidos+= $dados[$key]['pontosperdidos']; 
    }
 
    //$perdidos
 
    return $perdidos;

   
    
}

function SomarPontosPerdidos($turma) {

    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT turmadenunciada, SUM(pontosperdidos) FROM `denuncias` WHERE turmadenunciada=? AND status=?");
    $sql->execute(array($turma, 'Finalizada'));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $dados;
}


function AdicionarPontosExtras($modalidade, $equipe, $titulo, $pontos, $justificativa ) {
    $data = date("Y-m-d H:i:s");

     /* REALIZA A GRAVAÇÃO DOS DADOS DOS JOGOS */
     $pdo = ConectaBD();
     $sql = $pdo->prepare("INSERT INTO `jogos` VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $sql->execute(array($modalidade, '', $equipe, '','',$titulo, $equipe, $pontos, 2, $_SESSION['usuario'], '', $data));
     return $sql;
    
}

function ContaDenuncias($turma) {

    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT turmadenunciada, SUM(pontosperdidos), COUNT(pontosperdidos) FROM `denuncias` WHERE turmadenunciada=?");
    $sql->execute(array($turma));
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $dados;
}

?>