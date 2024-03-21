<?php
    include('conexao.php');

    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $select="SELECT * FROM tbUser WHERE emailUser='$email' AND senhaUser='$senha'";
    $result=$mysqli->prepare($select);
    $result->execute();
    $rows=$result->num_rows;

    while($res=mysqli_fetch_assoc($result)){
        $sb=$res['sbNomeUser'];
        $senhaBanco=$res['senhaUser'];
        if($rows){
            echo "SobreNOME:";
            echo $sb;
            echo "<br>";
        }
    }
 

?>