<?php
session_start();

$_SESSION['usuario'] = '';

session_destroy();

echo "<meta http-equiv= 'refresh' content='0; URL=../login/login.php'/>";

?>