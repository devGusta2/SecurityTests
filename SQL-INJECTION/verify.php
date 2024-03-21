<?php
    include('conexao.php');

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    
    $select="SELECT * FROM tbUser WHERE emailUser='$email' OR senhaUser='$senha'";

    
?>