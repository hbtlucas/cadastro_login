<?php
require_once ('db.class.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$objDb = new db();
$link = $objDb->conecta_mysql();

//insere dados dentro da tabela 'usuarios'
$sql = "insert into usuarios(usuario, email, senha) values ('$usuario','$email','$senha')";

if (mysqli_query($link, $sql)){
    echo 'usuario registrado!';
} else echo 'erro ao registrar usuario';

?>