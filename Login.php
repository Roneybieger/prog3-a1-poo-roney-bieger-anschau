<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();

$emailSalvo = $_COOKIE['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form action="processa_login.php" method="POST">
        <label>E-mail:</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($emailSalvo) ?>" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <label>
            <input type="checkbox" name="lembrar_email" value="1"> Lembrar e-mail
        </label><br><br>

        <button type="submit">Entrar</button>
    </form>

    <p><a href="cadastro.php">Não tem conta? Cadastre-se</a></p>
</body>
</html>
