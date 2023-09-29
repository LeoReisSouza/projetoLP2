<?php
class AnimalRepositorio
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function cadastrar(Animal $animal)
    {
        $sql = "INSERT INTO animal (tipo, 
        nome, descricao, imagem, idade) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssssd",
            $animal->getTipo(),
            $animal->getNome(),
            $animal->getDescricao(),
            $animal->getImagem(),
            $animal->getIdade()
        );
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    public function buscarTodos()
    {
        $sql = "SELECT * FROM animal ORDER BY tipo, idade asc";
        $result = $this->conn->query($sql);
        $animais = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animal = new Animal(
                    $row['id'],
                    $row['tipo'],
                    $row['nome'],
                    $row['descricao'],
                    $row['imagem'],
                    $row['idade']
                );
                $animais[] = $animal;
            }
        }
        return $animais;
    }
    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM animal WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id); // "i" indica que $id é um inteiro
        $stmt->execute();
        $result = $stmt->get_result();
        $animais = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animal = new Animal(
                    $row['id'],
                    $row['tipo'],
                    $row['nome'],
                    $row['descricao'],
                    $row['imagem'],
                    $row['idade']
                );
                $animais[] = $animal;
            }
        }

        return $animais;
    }




    public function listarCachorros()
    {
        $sql = "SELECT * FROM animal where tipo = 'Cachorro' ORDER BY idade";
        $result = $this->conn->query($sql);
        $animais = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animal = new Animal(
                    $row['id'],
                    $row['tipo'],
                    $row['nome'],
                    $row['descricao'],
                    $row['imagem'],
                    $row['idade']
                );
                $animais[] = $animal;
            }
        }
        return $animais;
    }
    public function listarGatos()
    {
        $sql = "SELECT * FROM animal where tipo = 'Gato' ORDER BY idade";
        $result = $this->conn->query($sql);
        $animais = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animal = new Animal(
                    $row['id'],
                    $row['tipo'],
                    $row['nome'],
                    $row['descricao'],
                    $row['imagem'],
                    $row['idade']
                );
                $animais[] = $animal;
            }
        }
        return $animais;
    }
    public function deletar(int $id)
    {
        $sql = "DELETE FROM animal WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $id);
        $statement->execute();
    }
}
