<?php session_start();
    if(isset($_SESSION['usuario'])){
        require 'frontend/minimosCubiertos.php';
    }else if(isset($_SESSION['usuarioAdmin'])){
        require 'frontend/minimosCubiertos.php';
    }else{
        header ('location: index.php');
    }
        
?>