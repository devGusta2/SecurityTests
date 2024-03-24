<?php
    include('conexao.php');

    $email=$_POST['email'];
    $senha=$_POST['senha'];

     $select="SELECT * FROM tbUser WHERE senhaUser='$senha' AND emailUser='$email' ";
     $result=$mysqli->query($select);
     $rows=$result->num_rows;

        while($res=mysqli_fetch_assoc($result)){
            $name=$res['nameUser'];
            $id=$res['idUser'];
            if($rows){
                $_SESSION['id']=$id;
                $_SESSION['nameUser']=$name;
                header('Location: profile.php');
            }
        }

    
    // $select="SELECT * FROM tbUser WHERE emailUser=? AND senhaUser=?";
    // $stmt=$mysqli->prepare($select);
    // $stmt->bind_param('ss',$email,$senha);
    // $stmt->execute();

    // $result=$stmt->get_result();
    // while($res=$result->fetch_assoc()){
    //     echo $res['nameUser'];
    // }

?>