<?php

require_once 'classes/Sessao.php';
Sessao::iniciar();

$usuario = Sessao::get('usuario');

if (!$usuario) {
    header('Location: login.php');
    exit;
}

$nome = $usuario->getNome();
$emailCookie = $_COOKIE['email'] ?? 'Não salvo';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?= htmlspecialchars($nome) ?>!</h2>
    <p>Seu e-mail salvo no cookie: <?= htmlspecialchars($emailCookie) ?></p>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>
