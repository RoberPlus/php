<?php
// Definimos constantes que serviran mas adelante.
const DB = 'localhost_3306';
const DB_SERVER = 'localhost';
const DB_CHARSET = 'utf8';

//  Creamos una clase con todo lo relacionado a la DB.
abstract class DB
{
    // Variables para conexion.
    private static $db_user = 'root';
    private static $db_pass = '';
    private static $db_server = DB_SERVER;
    private static $db_name = 'localhost';
    private static $db_charset = DB_CHARSET;
    // Conectar a la DB
    private $conexion;

    // Conexion DB
    public function conectar()
    {
        try {
            // Datos de DB.
            $dsn = 'mysql:host=' . self::$db_server . ';dbname=' . self::$db_name;

            // Conexion con PDO, contraseña y usuario
            $pdo = new PDO($dsn, self::$db_user, self::$db_pass);

            // Definir caracteres utf-8.
            $pdo->exec('SET CHARACTER SET' . self::$db_charset);

            // Respuesta
            return $pdo;
        } catch (PDOException $err) {
            // Imprimir Error.
            exit('ERROR: ' . $err->getMessage());
        }
    }
    private function desconectar()
    {
        $this->conexion = null;
    }

    // CRUD
    abstract protected function create($registro);

    abstract protected function read();

    abstract protected function update($registro);

    abstract protected function delete($accion, $eliminar);
}
