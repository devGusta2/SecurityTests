<?php
    include('conexao.php');

    $email=$_POST['email'];
    $senha=$_POST['senha'];

    // $select="SELECT * FROM tbUser WHERE emailUser='$email' AND senhaUser='$senha'";
    // $result=$mysqli->query($select);

    // while($res=mysqli_fetch_assoc($result)){
    //     echo $res['nameUser'];
    // }
    $select="SELECT * FROM tbUser WHERE emailUser=? AND senhaUser=?";
    $stmt=$mysqli->prepare($select);
    $stmt->bind_param('ss',$email,$senha);
    $stmt->execute();

    $result=$stmt->get_result();
    while($res=$result->fetch_assoc()){
        echo $res['nameUser'];
    }

?>