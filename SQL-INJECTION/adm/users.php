<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-adm.css">
    <title>Tabela de Usuários</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin-left:200px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        .container{
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="menu-vert"></div>
    <div class="table-box">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('../conexao.php');
                $select="SELECT * FROM tbUser";
                $stmt=$mysqli->prepare($select);
                $stmt->execute();
                $result=$stmt->get_result();

                while($res=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$res['idUser']."</td>";
                    echo "<td>".$res['nameUser']."</td>";
                    echo "<td>".$res['sobrenomeUser']."</td>";
                    echo "<td>".$res['dataNascUser']."</td>";
                    echo "<td>".$res['emailUser']."</td>";
                    echo "<td>".$res['senhaUser']."</td>";
                    echo "<td>".$res['telUser']."</td>";
                    echo "<td>".$res['cpfUser']."</td>";
                    echo "<td>".$res['logUser']."</td>";
                    echo "<td>".$res['cidadeUser']."</td>";
                    echo "<td>".$res['estadoUser']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </div>
</div>
<script src="https://kit.fontawesome.com/787aeba2d2.js" crossorigin="anonymous"></script>
</body>
</html>
