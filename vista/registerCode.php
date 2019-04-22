<?php
include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['nombre']) && isset($_POST["username"]) && isset($_POST["password"])
        && isset($_POST["password2"])) {

        $txtNombre = validar_campo($_POST['nombre']);
        $txtUsername = validar_campo($_POST['username']);
        $txtPassword = validar_campo($_POST['password']);
        $txtPassword2 = validar_campo($_POST['password2']);
        $txtRol = 2;

        if ($txtPassword == $txtPassword2) {

            if (UsuarioControlador::registrar($txtNombre, $txtUsername, $txtPassword, $txtRol)) {

                $usuario = UsuarioControlador::getUser($txtUsername, $txtPassword);
                $_SESSION["usuario"] = array(
                    "id" => $usuario->getId(),
                    "nombre" => $usuario->getNombre(),
                    "rol" => $usuario->getRol(),
                    "username" => $usuario->getUsername(),
                );

                header("location: periodista.php");
            }
        } else {header("location: register.html");}
    }
}
