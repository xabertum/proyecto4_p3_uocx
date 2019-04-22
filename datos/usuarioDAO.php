<?php
include 'conexion.php';
include '../entidades/Usuario.php';

class UsuarioDAO extends Conexion
{

    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    /**
     *
     * Metodo que sirve para validar el login
     *
     * @param object $usuario
     * @return boolean
     */
    public static function login($usuario)
    {
        $query = "SELECT * FROM usuarios WHERE username = :username AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $_usuario = $usuario->getUsername();
        $_password = $usuario->getPassword();

        $resultado->bindParam(":username", $_usuario);
        $resultado->bindParam(":password", $_password);

        $resultado->execute();

        if ($resultado->rowCount() > 0) {

            $filas = $resultado->fetch();
            if ($filas['username'] == $usuario->getUsername() &&
                $filas['password'] == $usuario->getPassword()) {

                return true;
            }
        }

        return false;
    }

    /**
     * Función que sirve para recuperar el usuario
     *
     *  @param object $usuario
     * @return object
     */
    public static function getUser($usuario)
    {
        $query = "SELECT * FROM usuarios WHERE username = :username AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $_usuario = $usuario->getUsername();
        $_password = $usuario->getPassword();

        $resultado->bindParam(":username", $_usuario);
        $resultado->bindParam(":password", $_password);

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new Usuario();
        $usuario->setId($filas["id"]);
        $usuario->setNombre($filas["nombre"]);
        $usuario->setRol($filas["rol"]);
        $usuario->setUsername($filas["username"]);

        return $usuario;

    }

/**
 * Metodo que sirve para registrar usuarios
 *
 * @param object $usuario
 * @return boolean
 */
    public static function registrar($usuario)
    {
        $query = "INSERT INTO usuarios (nombre, username, password, rol)
                    VALUES (:nombre, :username, :password, :rol)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $_nombre = $usuario->getNombre();
        $_username = $usuario->getUsername();
        $_password = $usuario->getPassword();
        $_rol = $usuario->getRol();

        $resultado->bindParam(":nombre", $_nombre);
        $resultado->bindParam(":username", $_username);
        $resultado->bindParam(":password", $_password);
        $resultado->bindParam(":rol", $_rol);
        
        if ($resultado->execute()) {
            return true;
        } else {

            return false;

        }

    }

}
