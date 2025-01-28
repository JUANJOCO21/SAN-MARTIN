<?php
class Usuario {
    private $ID;
    private $Nombre;
    private $Apellido;
    private $Email;
    private $Contrasena;

    // Constructor
    public function __construct($ID, $Nombre, $Apellido, $Email, $Contrasena) {
        $this->ID = $ID;
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->setEmail($Email); // Usar el setter para validar
        $this->setContrasena($Contrasena); // Usar el setter para encriptar
    }

    // Getters y Setters
    public function getID() {
        return $this->ID;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function getApellido() {
        return $this->Apellido;
    }

    public function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function setEmail($Email) {
        // Validar el formato del email
        if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $this->Email = $Email;
        } else {
            throw new InvalidArgumentException("El correo electrónico no es válido.");
        }
    }

    public function getContrasena() {
        return $this->Contrasena;
    }

    public function setContrasena($Contrasena) {
        // Encriptar la contraseña antes de almacenarla
        $this->Contrasena = password_hash($Contrasena, PASSWORD_DEFAULT);
    }

    // Método para mostrar información del usuario
    public function __toString() {
        return "ID: $this->ID, Nombre: $this->Nombre, Apellido: $this->Apellido, Email: $this->Email";
    }

    // Método para guardar el usuario en la base de datos (ejemplo)
    public function guardar($conexion) {
        $stmt = $conexion->prepare("INSERT INTO usuario (Nombre, Apellido, Email, Contrasena) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->Nombre, $this->Apellido, $this->Email, $this->Contrasena);
        return $stmt->execute();
    }
}
?>