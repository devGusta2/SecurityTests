<?php
$user="root";
$password="";
$banco="sqlinjection";
$host="localhost";

$mysqli=new mysqli($host, $usuario, $senha, $banco);

if($mysqli->error){
    die("Falha ao conectar".$mysqli->error);
}
?>
