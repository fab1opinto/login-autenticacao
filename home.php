<?php

    session_start();

    if(!isset($_SESSION['email'])){
        header('Location: index.php?erro=1');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Autenticação</title>
    <!--CSS-->
    <link rel="stylesheet" href="/css/estilo.css">
    <!--Jquery-->
    <script src="/jquery/jquery-3.6.0.js"></script>
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/8e60cd9016.js" crossorigin="anonymous"></script>
    <!--FontAwesome - CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/71c6f26d48.js" crossorigin="anonymous"></script>
    
</head>
<body>

 <h1>Seja bem vindo!</h1>
 <br />
 <?= $_SESSION['email'];?>
 <br />
 <br />
<button type="button"><a href="sair.php">Logout</a></button>

<script src="/javascript/app.js"></script>
<script src="/jquery/funcoes.js"></script>
</body>
</html>