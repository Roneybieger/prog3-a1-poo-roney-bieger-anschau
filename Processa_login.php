<?php

require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';

Sessao::iniciar();

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lembrar = isset($_POST['lembrar_email']);

if ($email && $senha) {
    $usuario = Autenticador::autenticar($email, $senha);

    if ($usuario) {
        Sessao::set('usuario', $usuario);

        if ($lembrar) {
            setcookie('email', $email, time() + (7 * 24 * 60 * 60)); // 7 dias
        } else {
            setcookie('email', '', time() - 3600); // Apaga
        }

        header('Location: dashboard.php');
        exit;
    }
}

echo "Login inválido. <a href='login.php'>Tentar novamente</a>";
