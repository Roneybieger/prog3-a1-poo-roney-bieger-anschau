<?php

require_once 'classes/Sessao.php';
Sessao::iniciar();

if (Sessao::get('usuario')) {
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}
exit;
