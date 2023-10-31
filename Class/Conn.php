<?php

class Connection{
    private $host;
    private $user;
    private $password;
    private $database;

    public function conexao_padrao($database){
        $conexao = mysqli_connect('localhost','root','',$database);
        return $conexao;
    }
}

?>