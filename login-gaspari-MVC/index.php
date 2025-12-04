<?php

require_once __DIR__ . '/app/controllers/loginController.php';

$controller = new LoginController();

$action = $_GET['action'] ?? 'index';

$controller->$action();
?>