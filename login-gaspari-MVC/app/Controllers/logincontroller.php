<?php
require_once __DIR__ . '/../models/usuario.php';

class Logincontroller {
    
    public function index() {
        include __DIR__ . '/../views/login.php';
    }

    public function autenticar() {
        session_start();

        $usuario = new Usuario();
        $resultado = $usuario->autenticar($_POST['email'], $_POST['senha']);

        if($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
            $_SESSION['id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];

            header("Location: app/views/painel.php");
            exit;
        } else {
            include __DIR__ . '/../views/erro.php';
        }
    }

    public function painel() {
        session_start();

        if(!isset($_SESSION['id'])) {
            header("Location: /login-gaspari-MVC/index.php");
            exit;
        }

        include __DIR__ . '/../views/painel.php';
    }
}
?>