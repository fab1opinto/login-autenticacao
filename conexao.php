<?php

//$servername = "localhost"; //padrão - server local
//$database = ""; //alterar conforme o nome do banco de dados
//$username = "root"; //padrão: root
//$password = ""; //senha de conexão de banco de dados

//Criar conexão
//$conexao = mysqli_connect($servername, $username, $password, $database);

class db {
    //host
    private $host = 'localhost';

    //usuario
    private $usuario = 'root';

    //senha
    private $senha = '';

    //banco de dados
    private $database = 'login';

    public function conecta_mysql(){
        //Criar a conexão
        $conex = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
        
        //Ajustar o charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($conex, 'utf8');

        //Verificar se houve erro de conexão 
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o banco de dados MySQL:'.mysqli_connect_error();
        }

        return $conex;
    }
}

?>