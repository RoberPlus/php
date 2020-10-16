<?php
require_once __DIR__ . '/db.php';

class estudiante_model extends DB
{

    private $db;
    public $nombre;
    public $apellido;
    public $edad;
    public $mail;
    private $tabla = 'estudiante';


    public function create($registro)
    {
        $conexion = parent::conectar();
        try {
            $query = 'INSERT INTO cursophp SET nombre=:nombre, apellido=:apellido, edad=:edad, email=:email';
            // prepare - preparacion para ejecutar
            // execute - ejecuta
            $create = $conexion->prepare($query)->execute($registro);
            // Validacion
            echo 'He insertado el registro';
            return true;
        } catch (Exception $err) {
            exit('ERROR: ' . $err->getMessage());
        }
    }


    public function read()
    {
        $conexion = parent::conectar();
        try {
        } catch (Exception $err) {
            exit('ERROR: ' . $err->getMessage());
        }
    }


    public function update($registro)
    {
        $conexion = parent::conectar();
        try {
        } catch (Exception $err) {
            //throw $th;
        }
    }


    public function delete($accion, $eliminar)
    {
        $conexion = parent::conectar();
        if ($accion === 'todos') {
            try {
            } catch (Exception $err) {
                exit('ERROR: ' . $err->getMessage());
            }
        } else {
            try {
            } catch (Exception $err) {
                exit('ERROR: ' . $err->getMessage());
            }
        }
    }
}
