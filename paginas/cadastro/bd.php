<?php
    include_once "../conn.php";

    if ($_SESSION['tela'] == 'cadaluno') {
        /* limpa a variável de tela */
        $_SESSION['tela'] = '';
        $_SESSION['usuario'] = "alguem";
        $permissao = 0;
        
        $erro = CadastrarAluno($_POST['name'], $_POST['email'], sha1($_POST['password']), $_POST['team'], $_SESSION['usuario'],$permissao, date("Y-m-d H:i:s"));
        
        if ($erro == 0) {
            echo "Entrou na gravação com sucesso";
            /* SE O RETORNO FOR 0 A GRAVAÇÃO FOI CONCLUÍDA COM SUCESSO */
            $_SESSION['ok'] = "<div class='alert alert-success mt-3' role='alert'>Usuário cadastrado com sucesso!</div>";
            echo "<meta http-equiv= 'refresh' content='0; URL=../cadastro/cadaluno.php'/>";

        } else {
            echo "Entrou ERRRROOOOOOO";
            /* SE O RETORNO FOR 1 OCORREU UM ERRO */
            $_SESSION['ok'] = "<div class='alert alert-danger mt-3' role='alert'>Usuário já cadastrado.</div>";
            echo "<meta http-equiv= 'refresh' content='0; URL=../cadastro/cadaluno.php'/>";
        }
        
       
    
    } elseif ($_SESSION['tela'] == 'login') {
        $_SESSION['tela'] = '';
        $ret = LoginAluno(sha1($_POST['password']), $_POST['email']);

    } elseif ($_SESSION['tela'] == 'cadjogos') {
        $_SESSION['tela'] = '';
        CadJogos($_POST['modalidade'], $_POST['time1'], $_POST['time2'], $_POST['local'], $_POST['data'], $_POST['hora']);

        $_SESSION['ok'] = "<div class='alert alert-success mt-2' role='alert'>Cadastro realizado com sucesso!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../cadastro/cadjogos.php'/>";

    } elseif ($_SESSION['tela'] == 'caddenuncia') {
        $_SESSION['tela'] = '';
        CadDenuncia($_POST['denunciante'], $_POST['denunciado'], $_POST['descricao'],);

        $_SESSION['ok'] = "<div class='alert alert-success mt-2' role='alert'>Cadastro realizado com sucesso!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../cadastro/visdenunciaturmas.php'/>";

    } elseif ($_SESSION['tela'] == 'cadresultados') {
        $_SESSION['tela'] = '';
        AdicionarResultados($_POST['resultado'], $_POST['vencedor'], $_POST['id']);

        $_SESSION['ok'] = "<div class='alert alert-success mt-2' role='alert'>Resultados lançados com sucesso!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../cadastro/visresultados.php'/>";
        
    } elseif ($_SESSION['tela'] == 'cadanaliseresultados') {
        $_SESSION['tela'] = '';
        AdicionarAnaliseDenuncias($_POST['analise'], $_POST['veredito'],$_POST['gravidade'], $_POST['pontosperdidos'], $_POST['id']);

        $_SESSION['ok'] = "<div class='alert alert-success mt-2' role='alert'>Denúncia analisada com sucesso!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../cadastro/visdenuncias.php'/>";
       
    } elseif ($_SESSION['tela'] == 'cadpontos') {
        $_SESSION['tela'] = '';
        AdicionarPontosExtras($_POST['modalidade'], $_POST['equipe'],$_POST['titulo'], $_POST['pontos'], $_POST['justificativa']);

        $_SESSION['ok'] = "<div class='alert alert-success mt-2' role='alert'>Pontos adicionados com sucesso!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../cadastro/cadpontos.php'/>";
    }
    
    

?>