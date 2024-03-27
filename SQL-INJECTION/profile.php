<?php
  include('protect.php');
  include('conexao.php');
  $id=$_SESSION['id'];
  $select="SELECT * FROM tbUser WHERE idUser='$id'";
    $stmt=$mysqli->query($select);

    while($data=mysqli_fetch_assoc($stmt)){
        $nome=$data['nameUser'];
        $sbnome=$data['sobrenomeUser'];
        $email=$data['emailUser'];
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="user">
            <i class="fa-solid fa-user"></i>
                <?php echo "Bem vindo(a)".$nome;?>
            </div>
            <ul>
                <li>
                    <select name="" id="">
                        <option value="">Categorias</option>
                    </select>
                </li>
                <li>
                    <select name="" id="">
                        <option value="">Ofertas</option>
                    </select>
                </li>
                <li>
                    <select name="" id="">
                        <option value="">Periféricos</option>
                    </select>
                </li>
                <li>
                    <select name="" id="">
                        <option value="">Computadores</option>
                    </select>
                </li>
            
            </ul>
            <i class="fa-solid fa-bag-shopping fa-2x"></i>
            <i class="fa-solid fa-bars fa-2x"></i>
            <a href="sair.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            
        </header>


        <main>
            <div class="card">
                <i class="fa-solid fa-user fa-5x"></i>
                
               <div class="box">
                    <div class="info">
                        <?php
                            echo $nome." ".$sbnome;
                        ?>
                    </div>
                    <?php
                        echo $email;
                    ?>
               </div>
          
            </div>
            <div class="card">
                <i class="fa-solid fa-credit-card fa-3x"></i>
                    <div class="info">
                       <div class="box">
                       <h5>Dados pessoais</h5>
                            <p style="font-size:12pt; font-weight:normal;">Informações do seu documento de identidade.</p>
                       </div>
                    </div>
                
            </div>
            <div class="card">
                <i class="fa-solid fa-lock fa-3x"></i>
                <div class="info">
                       <div class="box">
                            <h5>Segurança</h5>
                            <p style="font-size:12pt; font-weight:normal;">Aumente a segurança de sua conta!</p>
                       </div>
                    </div>
            </div>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/787aeba2d2.js" crossorigin="anonymous"></script>
</body>
</html>