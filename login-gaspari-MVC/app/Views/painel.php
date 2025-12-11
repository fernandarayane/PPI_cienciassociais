<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
     
    die("Você não está logado. <a href='../../index.php'>Entrar</a>");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bem-vindo ao painel <?php echo $_SESSION['nome']?>
    <p>
        <a href="../../logout.php">Sair</a>
    </p>
</body>
</html>
