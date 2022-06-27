<?php


require_once('conexao.php');

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$objDb = new db();
$link = $objDb->conecta_mysql();

$email_existe = false;

//Verificar se o e-mail já existe
$sql = " SELECT * FROM usuarios WHERE email = '$email'";

//Executar consulta no banco de dados
if($resultado_id = mysqli_query($link, $sql)){

    $dados_usuario = mysqli_fetch_array($resultado_id);

    if(isset($dados_usuario['email'])){
        $email_existe = true;
    } 
}else {
    echo 'Erro ao tentar localizar registro de e-mail';
}

if($email_existe){

    $retorno_get = '';

    if($email_existe){
        $retorno_get.= "erro_email=1&";
    }

    header ('Location: cadastrese.php?'. $retorno_get);
    die();
}


$sql = "INSERT INTO usuarios(email, senha) VALUES ('$email', '$senha')";

//Executar a query
if(mysqli_query($link,$sql)){
    echo 'Usuário registrado com sucesso!';
    header ('Location: index.php');
} else {
    echo 'Erro ao registrar usuário';
}

?>