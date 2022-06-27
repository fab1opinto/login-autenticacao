<?php

    session_start();

    require_once('conexao.php');
    
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = " SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    mysqli_query($link, $sql);

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
       $dados_usuario = mysqli_fetch_array($resultado_id);

       if(isset($dados_usuario['email'])){

        $_SESSION['email'] = $dados_usuario['email'];

        header ('Location: home.php');
       } else {
        //Retornar a página inicial se o e-mail não estiver cadastrado no banco de dados
        header('Location: index.php?erro=1');
       }
    } else {
        echo 'Erro na execução da consulta';
    } 
    
?>