<?php

 
include('conexao.php');
if(isset($_POST['email']) and isset($_POST['senha'])){
    $email=$_POST['email'];
    $senha=$_POST['senha'];
}else{
    $email="";
    $senha="";
}


 $select="SELECT * FROM tbUser WHERE senhaUser='$senha' AND emailUser='$email' ";
 $result=$mysqli->query($select);
 $rows=$result->num_rows;

    while($res=mysqli_fetch_assoc($result)){
        $name=$res['nameUser'];
        $id=$res['idUser'];
        if($rows){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id']=$id;
            $_SESSION['nameUser']=$name;
            header('Location: profile.php');
        }
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
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login/Cadastro</title>
    <style>
        body{
         background-image: url('img/bg4.jpg');
         background-size:cover;
        }
    </style>
</head>
    <body>
       <div class="container">
           <form action="" method="post" class="login-box">
        
                    <h3>Iniciar sessão</h3>
                    <label>E-mail</label>
                    <input type="text" placeholder="E-mail" name="email">
                    <label>Senha</label>
                    <input type="text" placeholder="Senha" name="senha">
                    <button type="submit"><h4>Seguinte</h3></button>
                    <button type="" style=" background-color:rgb(11, 105, 155);"><h4>Criar uma conta</h4></button>
           </form>

       </div>
    </body>
    
</html>

<?php

// $select = "SELECT * FROM tbUser WHERE emailUser=? AND senhaUser=?";

// $stmt=$mysqli->prepare($select);

// $stmt->bind_param('ss',$email, $senha);

// $stmt->execute();

// $res=$stmt->get_result();
// while($info=$res->fetch_assoc()){

// }


?>