<?php

session_start();

unset($_SESSION['email']);

echo 'Obrigado por testar a minha sessão de autenticação!';

header('Location: index.php');

?>