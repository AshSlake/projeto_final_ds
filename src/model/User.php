<?php

class User
{
    // Atributos
    private int $userId;
    private string $nome;
    private string $cpf;  // Futuramente implementar classe CPF para gerenciamento e normalização do cpf para evitar uso de tipos primitivos.
    private DateTime $dataNascimento;
    private string $email;  // Do mesmo jeito que o cpf o EMAIL deve ser um Objeto por ser uma dado complexo e assim evitar uso de tipo primitivo.
    private string $senha;

    // Construtor
    public function __construct(int $userId, string $nome, string $cpf, DateTime $dataNascimento, string $email, string $senha)
    {
        $this->userId = $userId;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
        $this->senha = $senha;
    }
    // Getters
    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getDataNascimento(): DateTime
    {
        return $this->dataNascimento;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    // Setters
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setDataNascimento(DateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    // Métodos
    public function inserirBD()
    {
        require_once 'ConexaoDB.php';
        $conexao = new ConexaoDB();
        $conn = $conexao->conectar();

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        };

        $sql = "INSERT INTO usuario (nome, cpf, email, senha) VALUES ('" . $this->nome . "', '" . $this->cpf . "', '" . $this->email . "', '" . $this->senha . "')";

        if ($conn->query($sql) === FALSE) {
            $conn->close();
            return FALSE;
        }

        $this->userId = mysqli_insert_id($conn);
        $conn->close();
        return TRUE;
    }

    public function carregarUsuario(string $cpf)
    {
        require_once 'ConexaoDB.php';
        $conexao = new ConexaoDB();
        $conn = $conexao->conectar();

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        };

        $sql = "SELECT * FROM usuario WHERE cpf = " . $cpf;
        $result = $conn->query($sql);
        $r = $result->fetch_object();

        if ($r == null) {
            $conn->close();
            return FALSE;
        }

        $this->userId = $r->id_usuario;
        $this->nome = $r->nome;
        $this->cpf = $r->cpf;
        $this->dataNascimento = $r->dataNascimento;
        $this->email = $r->email;
        $this->senha = $r->senha;
        $conn->close();
        return TRUE;
    }

    public function atualizarBD()
    {
        require_once 'ConexaoDB.php';
        $conexao = new ConexaoDB();
        $conn = $conexao->conectar();

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "UPDATE usuario SET nome = '" . $this->nome . "', cpf = '" . $this->cpf . "', dataNascimento = '" . $this->dataNascimento . "', email = '" . $this->email . "' WHERE id_usuario = '" . $this->userId . "'";

        if ($conn->query($sql) === FALSE) {
            $conn->close();
            return FALSE;
        }

        $conn->close();
        return TRUE;
    }
}
