<?php

class Conexion {
    private $host = 'localhost:3307'; // Asegúrate de incluir el puerto si es necesario
    private $usuario = 'root';
    private $contrasena = '';
    private $base_de_datos = 'SubestacionSanmartin';
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->usuario, $this->contrasena, $this->base_de_datos);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            // Manejo de errores más controlado
            throw new Exception("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public function getConexion() {
        return $this->conn;
    }

    public function cerrarConexion() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

// Ejemplo de uso
try {
    $conexion = new Conexion();
    $db = $conexion->getConexion();
    // Aquí se realizar consultas a la base de datos
} catch (Exception $e) {
    echo $e->getMessage();
}

?>