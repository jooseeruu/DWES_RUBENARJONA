<?php
// models/Usuario.php
class Usuario
{
    private $conn;
    private $table = 'usuarios';

    public $id;
    public $nombre;
    public $email;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Crear un nuevo usuario
    public function crear()
    {
        $query = "INSERT INTO {$this->table} (nombre, email) VALUES (:nombre, :email)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':email', $this->email);
        return $stmt->execute();
    }

    // Leer todos los usuarios
    public function leer()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Actualizar un usuario
    public function actualizar()
    {
        $query = "UPDATE {$this->table} SET nombre = :nombre, email = :email WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }

    // Eliminar un usuario
    public function eliminar()
    {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
}
?>