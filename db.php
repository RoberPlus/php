<?php
// Definimos constantes que serviran mas adelante.
const DB = 'mysql';
const DB_SERVER = 'localhost';
const DB_CHARSET = 'utf8';

//  Creamos una clase con todo lo relacionado a la DB.
abstract class DB
{
    // Variables para conexion.
    private static $db_user = 'root';
    private static $db_pass = '';
    private static $db_server = DB_SERVER;
    private static $db_name = 'pruebas';
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

            // Mostrar errores de PDO
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

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
    // Funcion insertar, dentro pasaremos los datos a ingresar.
    abstract protected function create($registro);
    // Funcion consultar, podremos llamar algun o varios datos.
    abstract protected function consultar();
    // Funcion para actualizar un dato por otro, pasaremos los datos a modificar
    abstract protected function actualizar($registro);
    // Funcion para eliminar, podremos eliminar todo o solo algo.
    abstract protected function eliminar($accion, $eliminar);
}
