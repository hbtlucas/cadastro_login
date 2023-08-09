<?php

class db {

    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $database = 'twitter_clone';

    public function conecta_mysql(){

        // função para criar conexão com o banco de dados
        // 4 parâmetros: host, usuário de acesso, senha de acesso e banco de dados
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        // define a comunicação com o banco de dados (conjunto de caracteres)
        mysqli_set_charset($con, 'utf8');

        // verifica se houve erro de conexão
        if (mysqli_connect_errno()) {
            echo 'Erro ao tentar se conectar com o BD do mysql: ' . mysqli_connect_error();
        }

        return $con;
    }
}
?>
