<?php
    include_once "../conn.php";
    /* Para logar como amin */
    //LoginAluno(sha1(12345), "adm@gmail.com");
    /* Para logar como professor */
    LoginAluno(sha1(1234), "professor@gmail.com");
    /* Para logar como aluno */
    //LoginAluno(sha1(123), "user@gmail.com");
?>