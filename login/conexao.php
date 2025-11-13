<?php 
    $host = "localhost"; 
    $usuario = "root"; 
    $senha = ""; 
    $database = "login"; 
   
        $mysqli = new mysqli($host, $usuario, $senha, $database); 
       
        if($mysqli->connect_error){
            die ("Algo deu errado com a conexão"); 
        }

?>