<?php
    include('../conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="menu-vert">
                    <ul>
                        <li><a href="dashboard.php" class="link"><i class="fa-solid fa-house fa-2x"></i><p>Dashboard</p></a></li>
                        <li><a href="users.php" class="link"><i class="fa-solid fa-user  fa-2x"></i><p>Users</p></a></li>
                        <li><a href="" class="link"><i class="fa-solid fa-file fa-2x"></i><p>Pages</p></a></li>
                        <li><a href="" class="link"><i class="fa-solid fa-envelope fa-2x"></i><p>E-mails</p></a></li>
                        <li><a href="" class="link"><i class="fa-solid fa-phone fa-2x"></i><p>Contact</p></a></li>
                        <li><a href="" class="link"><i class="fa-solid fa-comment-dots fa-2x"></i><p>Comments</p></a></li>
                    </ul>
                    <a href=""><i class="fa-solid fa-right-from-bracket"></i>Sair</a>
        </div>
        <?php 
            $sql="SELECT idUser FROM tbUser";
            $stmt=$mysqli->query($sql);
            $users=$stmt->num_rows;
        ?>
        <div class="card-box">
            <div class="card">
                <h2>Usuarios</h2>
                <div class="row-card">
                    <i class="fa-solid fa-user fa-6x"></i>
                    <?php echo "<p>".$users."</p>";?>
                </div>
                
            </div>
            <div class="card">
                <h2>Comentários</h2>
                    <div class="row-card">
                        <i class="fa-solid fa-comment-dots fa-5x"></i>
                        <p>58</p>
                </div>
            </div>
            <div class="card">
                <h2>E-mails</h2>
                    <div class="row-card">
                        <i class="fa-solid fa-envelope fa-5x"></i>
                        <p>26</p>
                </div>
            </div>
            
        </div>
        
    </div>
    <script src="https://kit.fontawesome.com/787aeba2d2.js" crossorigin="anonymous"></script>
</body>
</html>