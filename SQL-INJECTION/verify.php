<?php
    include('conexao.php');

    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $select="SELECT * FROM tbUser WHERE emailUser='$email' AND senhaUser='$senha'";
    $select=$mysqli->query($select);
    $rows=$select->num_rows;
    while($res=mysqli_fetch_assoc($select)){
        $sb=$res['sbNomeUser'];
        $senhaBanco=$res['senhaUser'];
        if($rows){
            echo $sb;
        }
    }
 

?>