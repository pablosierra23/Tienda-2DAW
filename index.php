<?php

require_once __DIR__ . '/bd.php';

$vista = $_GET['var'] ?? 'registro';

if ($vista === 'login') {
    require __DIR__ . '/views/loginView.php';
} else {
    require __DIR__ . '/views/registerView.php';
}
?>
