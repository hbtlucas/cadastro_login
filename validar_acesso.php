<?php

    //fazendo inclusão das classes (POO)
    require_once('db.class.php');

    //instanciando objeto 
    $objDb = new db();
    //fazendo conexão com banco de dados
    $link = $objDb->conecta_mysql();

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //fazendo pesquisa no banco de dados com MYSQL
    $sql = "select * from usuarios where usuario = '$usuario' AND senha = '$senha'";

    //mysqli_query = função utilizada para fazer consultas no banco de dados e executar comandos
    //(utiliza a conexão e a string contendo o comendo)
    $usuarios = mysqli_query($link, $sql);

    //mysqli_fetch_assoc é uma função para retornar uma linha de resultados de uma consulta feita com mysqli
    //$row = mysqli_fetch_assoc($usuarios);

    if($usuarios) {
        $row = mysqli_fetch_assoc($usuarios);
        //isset = verifica se a variavel tem algum valor
        if (isset($row['usuario'])) {
            echo 'usuario existe';
        } else {
            header('location: index.php?erro=1');
        }
    } else {
        echo 'erro de consulta no banco de dados';
    }



  /*  if($row["usuario"]){
        $sql = "select senha from usuarios where senha = '$senha'";
        $senhas = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($senhas);

        if($senha == $row["senha"]){
            echo 'usuario logado';
        } else {
            echo 'senha incorreta';
        }
    }else{
        echo 'usuario nao encontrado';
    }
    */
    ?>
