<?php  require('./main.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/global_style.css" type="text/css" />
    <link rel="stylesheet" href="../css/alunos_cadastrados.css" type="text/css" />
    <link rel="stylesheet" href="../css/sidebar.css" type="text/css" />
    <link rel="stylesheet" href="../css/table.css" type="text/css" />

    <title>Alunos Cadastrados</title>
</head>
<body>
    <div class="alunos-cadastrados">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="../html/index.html">Cadastro de alunos</a>
                </li>
                <li class="active">
                    <a href="./alunos_cadastrados.php">Alunos Cadastrados</a>
                </li>
            </ul>
        </div>
        <div class="tabela">
            <h2>Usuários Cadastrados</h2>
            <table class="tabela-usuarios-cadastrados">
                <tr>
                    <th>Nome</th>
                    <th>RA</th>
                    <th>Sexo</th>
                    <th>Idade</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Email</th>
                </tr>  
                <?php
                    $todos_estudantes_cadastrados;
                ?>
            </table>
        </div>
    </div>
</body>
</html>