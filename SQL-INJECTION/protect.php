<?php

if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    die("<h1>Faça login antes de acessar esta página!</h1><a href='login.php'></a>");    
}
?>