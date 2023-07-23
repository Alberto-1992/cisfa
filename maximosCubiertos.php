<?php session_start();
    if(isset($_SESSION['usuario'])){
        require 'frontend/maximosCubiertos.php';
    }else if(isset($_SESSION['usuarioAdmin'])){
        require 'frontend/maximosCubiertos.php';
    }else{
        header ('location: index.php');
    }
        
?>