<?php

require_once 'Usuario.php';

class Autenticador {
    private static $usuarios = [];

    public static function registrar(Usuario $usuario) {
        self::$usuarios[] = $usuario;
    }

    public static function autenticar($email, $senha) {
        foreach (self::$usuarios as $usuario) {
            if ($usuario->getEmail() === $email && $usuario->verificarSenha($senha)) {
                return $usuario;
            }
        }
        return null;
    }
}
