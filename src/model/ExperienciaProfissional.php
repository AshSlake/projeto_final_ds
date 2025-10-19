<?php
class ExperienciaProfissional
{
    // Atributos
    private int $id;
    private int $userId;
    private DateTime $inicio;
    private DateTime $fim;
    private string $empresa;
    private string $descricao;

    // Construtor
    public function __construct(int $id, int $userId, DateTime $inicio, DateTime $fim, string $empresa, string $descricao)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->empresa = $empresa;
        $this->descricao = $descricao;
    }

    //Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getInicio(): DateTime
    {
        return $this->inicio;
    }

    public function getFim(): DateTime
    {
        return $this->fim;
    }

    public function getEmpresa(): string
    {
        return $this->empresa;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    //Setters
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function setInicio(DateTime $inicio): void
    {
        $this->inicio = $inicio;
    }

    public function setFim(DateTime $fim): void
    {
        $this->fim = $fim;
    }

    public function setEmpresa(string $empresa): void
    {
        $this->empresa = $empresa;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    //Métodos
    public function inserirDB()
    {
        require_once 'ConexaoDB.php';
        $conexao = new ConexaoDB();
        $conn = $conexao->conectar();

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "INSERT INTO experiencia_profissional (id_usuario, inicio, fim, empresa, descricao)
                VALUES ('" . $this->userId . "', '" . $this->inicio . "', '" . $this->fim . "', '" . $this->empresa . "', '" . $this->descricao . "',)";

        if ($conn->query($sql) === FALSE) {
            $conn->close();
            return FALSE;
        }

        $this->id = mysqli_insert_id($conn);
        $conn->close();
        return TRUE;
    }

    public function excluirDB(int $id)
    {
        require_once 'ConexaoDB.php';
        $conexao = new ConexaoDB;
        $conn = $conexao->conectar();

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "DELETE FROM experiencia_profissional WHERE id_experiencia_profissional = '" . $this->id . "';";

        if ($conn->query($sql) === FALSE) {
            $conn->close();
            return FALSE;
        }

        $conn->close();
        return TRUE;
    }

    public function listarExperiencias(int $userId)
    {
        require_once 'ConexaoDB.php';
        $conexao = new ConexaoDB;
        $conn = $conexao->conectar();

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM experiencia_profissional WHERE id_usuario = '" . $userId . "';";
        $result = $conn->query($sql);

        if ($result == null) {
            $conn->close();
            return FALSE;
        }

        $conn->close();
        return $result;
    }
}
