<?php session_start();
    if(isset($_SESSION['usuario'])){
        require 'frontend/minimos.php';
    }else if(isset($_SESSION['usuarioAdmin'])){
            require 'frontend/minimos.php';
    }else{
        header ('location: index.php');
    }
        
?>