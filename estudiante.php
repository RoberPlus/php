<?php
require_once __DIR__ . '/db.php';

class estudiante_model extends DB
{

    private $db;
    public $nombre;
    public $apellido;
    public $edad;
    public $mail;
    private $tabla = 'estudiantes';


    public function create($registro)
    {
        $conexion = parent::conectar();
        try { // Inserta datos correspondiente a su indice en el array.
            $query = 'INSERT INTO estudiantes (nombre, apellido, edad, email) VALUES (:nombre, :apellido, :edad, :email)';
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


    public function consultar()
    {
        $conexion = parent::conectar();
        try { // Seleccionara algo de estudiantes o todo.
            $query = 'SELECT * FROM estudiantes';
            //return $consulta = $conexion->query($query)->fetch(); Selecciona algo en especifico
            return $consulta = $conexion->query($query)->fetchAll(); // Selecciona todo.
        } catch (Exception $err) {
            exit('ERROR: ' . $err->getMessage());
        }
    }


    public function actualizar($registro)
    {
        $conexion = parent::conectar();
        try { // Actualizara los datos que le pasemos.
            $query = 'UPDATE estudiantes SET nombre=:nombre, apellido=:apellido, edad=:edad WHERE email=:email';
            $actualizar = $conexion->prepare($query)->execute($registro);
        } catch (Exception $err) {
            exit('ERROR: ' . $err->getMessage());
        }
    }


    public function eliminar($accion, $eliminar)
    {
        $conexion = parent::conectar();
        // Si a la variable accion le ponemos todos...
        if ($accion === 'todos') {
            try {
                $query = 'DELETE FROM estudiantes';
                $eliminar = $conexion->prepare($query)->execute();
            } catch (Exception $err) {
                exit('ERROR: ' . $err->getMessage());
            }
        } else { // De lo contrario ponemos un WHERE al email ya que es un dato unico y en eliminar el dato que querremos borrar
            try {
                $query = 'DELETE FROM estudiantes WHERE email=:email';
                $eliminar = $conexion->prepare($query)->execute($eliminar);
            } catch (Exception $err) {
                exit('ERROR: ' . $err->getMessage());
            }
        }
    }
}
