<?php
require_once __DIR__ . '/../models/usuario.php';

class LoginController {

    public function index() {
        include __DIR__ . '/../views/login.php';
    }

    public function autenticar() {
        session_start();

        $usuario = new Usuario();
        $resultado = $usuario->autenticar($_POST['email'], $_POST['senha']);

        if ($resultado->num_rows > 0) {

            $dados = $resultado->fetch_assoc();
            $_SESSION['id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];

            header("Location: ../../index.php?action=painel");
            exit;

        } else {
            include __DIR__ . '/../views/erro.php';
        }
    }

    public function painel() {
        session_start();

        if (!isset($_SESSION['id'])) {
            header("Location: ../../index.php");
            exit;
        }

        include __DIR__ . '/../views/painel.php';
    }
}

?>