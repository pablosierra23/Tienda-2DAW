<?php

require_once __DIR__ . '/bd.php';

$vista = $_GET['var'] ?? 'registro';

if ($vista === 'main') {
    require __DIR__ . '/views/mainView.phtml';
} elseif ($vista === 'login') {
    require __DIR__ . '/views/loginView.php';
} else {
    require __DIR__ . '/views/registerView.php';
}
?>
