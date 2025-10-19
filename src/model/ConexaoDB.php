<?php
class ConexaoDB
{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "34251141";
    private $dbName = "projeto_final";

    public function conectar()
    {
        $conexao = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
        return $conexao;
    }
}
