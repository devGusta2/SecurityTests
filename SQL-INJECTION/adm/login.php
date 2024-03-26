<?php

 
include('../conexao.php');
if(isset($_POST['email']) and isset($_POST['senha'])){
    $email=$_POST['email'];
    $senha=$_POST['senha'];
}else{
    $email="";
    $senha="";
}


 $select="SELECT * FROM tbadm WHERE senhaAdm='$senha' AND emailAdm='$email' ";
 $result=$mysqli->query($select);
 $rows=$result->num_rows;
 
    if($rows>0){
        while($res=mysqli_fetch_assoc($result)){
            $name=$res['nomeAdm'];
            $id=$res['idAdm'];
            if($rows){
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['idAdm']=$id;
                $_SESSION['nomeAdm']=$name;
                header('Location: dashboard.php');
            }
        }
    }else{
        echo "E-mail ou senha estão incorretos";


    }
   
    // $select="SELECT * FROM tbUser WHERE senhaUser=? AND emailUser=? ";
    // $stmt=$mysqli->prepare($select);
    //    $stmt->bind_param('ss',$senha,$email);
    //    $stmt->execute();
    //    $result=$stmt->get_result();
    //    $rows=$result->num_rows;
    //    while($res=$result->fetch_assoc()){
    //     $name=$res['nameUser'];
    //     $id=$res['idUser'];
    //     if($rows){
    //         if(!isset($_SESSION)){
    //             session_start();
    //         }
    //         $_SESSION['id']=$id;
    //         $_SESSION['nameUser']=$name;
    //         header('Location: profile.php');
    //     }
    // }
    //         if(!isset($_SESSION)){
    //             session_start();
    //         }
    //         $_SESSION['id']=$id;
    //         $_SESSION['nameUser']=$name;
    //         header('Location: profile.php');
    //     }
    // }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
    <body>
        <div class="container">
            <form action="" method="post" class="login-box">
                    <h3>Login Admin</h3>
                    <label>E-mail</label>
                    <input type="text" placeholder="E-mail" name="email">
                    <label>Senha</label>
                    <input type="text" placeholder="Senha" name="senha">
                    <button type="submit"><h4>Seguinte</h3></button>
                  
           </form>
        </div>
    </body>
</html>