<?php

if(!isset($_SESSION[''])){
    session_start();
}

if(!isset($_SESSION['id'])){
    session_destroy();
    die("<h1>Faça login antes de acessar esta página!</h1><a href=\"index.php\">Login</a>");    
}
?>