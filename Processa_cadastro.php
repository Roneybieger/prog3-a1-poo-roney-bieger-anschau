<?php

require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';

// Sanitização básica
$nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($nome && $email && $senha) {
    $usuario = new Usuario($nome, $email, $senha);
    Autenticador::registrar($usuario);

    header('Location: login.php');
    exit;
} else {
    echo "Dados inválidos! <a href='cadastro.php'>Voltar</a>";
}
