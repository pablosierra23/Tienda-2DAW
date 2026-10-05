<?php

    require_once __DIR__ . '/../bd.php';

    class Usuario {
        private $id;
        private $nombre;
        private $email;
        private $password;

        public function __construct($id, $nombre, $email, $password) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->email = $email;
            $this->password = $password;
        }

        public function getId() {
            return $this->id;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassword() {
            return $this->password;
        }

        


        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function save() {
            $conn = bd::connect();

            if ($conn->connect_errno) {
                throw new RuntimeException('No se pudo conectar con la base de datos: ' . $conn->connect_error);
            }

            $stmt = $conn->prepare('INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)');

            if ($stmt === false) {
                $conn->close();
                throw new RuntimeException('No se pudo preparar el registro: ' . $conn->error);
            }

            $stmt->bind_param('sss', $this->nombre, $this->email, $this->password);
            $result = $stmt->execute();

            if ($result) {
                $this->id = $stmt->insert_id;
            }

            $error = $stmt->error;
            $stmt->close();
            $conn->close();

            if (!$result) {
                throw new RuntimeException('No se pudo guardar el usuario: ' . $error);
            }
        }

        public static function findByEmail($email) {
            $conn = bd::connect();

            if ($conn->connect_errno) {
                throw new RuntimeException('No se pudo conectar con la base de datos: ' . $conn->connect_error);
            }

            $stmt = $conn->prepare('SELECT id, nombre, email, password FROM usuarios WHERE email = ? LIMIT 1');

            if ($stmt === false) {
                $conn->close();
                throw new RuntimeException('No se pudo preparar la consulta: ' . $conn->error);
            }

            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows === 0) {
                $stmt->close();
                $conn->close();
                return null;
            }

            $stmt->bind_result($id, $nombre, $emailEncontrado, $password);
            $stmt->fetch();
            $stmt->close();
            $conn->close();

            return new Usuario($id, $nombre, $emailEncontrado, $password);
        }

    }

?>