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
                    <input type="text" placeholder="E-mail">
                    <label>Senha</label>
                    <input type="text" placeholder="Senha">
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