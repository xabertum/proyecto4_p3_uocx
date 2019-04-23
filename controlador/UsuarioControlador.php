<?php
include '../datos/usuarioDAO.php';

class UsuarioControlador
{

    public static function login($usuario, $password)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsername($usuario);
        $obj_usuario->setPassword($password);

        return UsuarioDAO::login($obj_usuario);
    }

    public static function getUser($usuario, $password)
    {

        $obj_usuario = new Usuario();
        $obj_usuario->setUsername($usuario);
        $obj_usuario->setPassword($password);

        return UsuarioDAO::getUser($obj_usuario);

    }

    public static function registrar($nombre, $username, $password, $rol)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setUsername($username);
        $obj_usuario->setPassword($password);
        $obj_usuario->setRol($rol);

        return UsuarioDAO::registrar($obj_usuario);

    }
}
