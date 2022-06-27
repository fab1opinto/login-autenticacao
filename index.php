<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;


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

    <div class="bg-img">
        <div class="content">
            <header>Login</header>
            <form action="validar_acesso.php" method="POST" id="formLogin">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" id="campo_email" placeholder="Digite seu email">
                </div>

                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="senha" id="password" placeholder="Digite sua senha">
                    <span class="fa-solid fa-eye" id="mostrarSenha" onclick="togglePassword()"></span>
                </div>

                <!--<div class="pass">
                    <a href="#">Esqueceu a senha?</a>
                </div>-->

                <div class="field-cadastrar">
                    <input type="submit" id="btn_login" value="ENTRAR">
                </div>
                <br />
                <?php
                if($erro == 1){
                    echo '<font color="#FF0000">e-mail ou senha inválidos</font>';
                }
                ?>

            </form>


            <div class="cadastrese">
                <a href="cadastrese.php">Cadastre-se</a>
            </div>
        </div>
    </div>

<script src="/javascript/app.js"></script>
<script src="/jquery/funcoes.js"></script>
</body>
</html>