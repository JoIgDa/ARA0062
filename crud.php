<?php
include("database.php");
$database = new database();
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Forms Clothes - Gerenciamento</title>
    <link rel="shortcut icon" href="img/icon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/gallery.min.css" />
    <link rel="stylesheet" type="text/css" href="css/gallery.theme.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>

<body>
    <header id="cabecalho">
        <h1 style="text-align: center"><a href="index.php"><img src="img/logo.png"></a></h1>
    </header>
<body>
    <nav id="menu">
        <h1 style="text-align: center"> Gerenciamento </h1>
    </nav>
    
    <hr>
    
    <div style="text-align: center">
        <a class="btn btn-primary" href="../cadastro.php" role="button">Cadastrar</a>
    </div>

    <table id="crudTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id*</th>
                <th>E-mail*</th>
                <th>Senha*</th>
                <th>Nome*</th>
                <th>Sobrenome*</th>
                <th>Sexo*</th>
                <th>Nascimento*</th>
                <th>Logradouro*</th>
                <th>Numero*</th>
                <th>Complemento</th>
                <th>Estado*</th>
                <th>Cidade*</th>
                <th>Time*</th>
                <?php
                if ($_SESSION[adm] > 80) {
                    echo "<th>Admin</th>";
                }
                ?>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            

            foreach ($database->query("SELECT * FROM `usuario`") as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['senha'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['sobrenome'] . "</td>";
                echo "<td>" . $row['sexo'] . "</td>";
                echo "<td>" . $row['nascimento'] . "</td>";
                echo "<td>" . $row['logradouro'] . "</td>";
                echo "<td>" . $row['numero'] . "</td>";
                echo "<td>" . $row['complemento'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "<td>" . $row['cidade'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                if ($_SESSION[adm] > 80) {
                    echo "<td>" . $row['adm'] . "</td>";
                }

                echo "<td><a href='#' onclick ='confirma(". $row['id'] . ")'> Excluir</a></td>";

                echo "<td><a href='crud_mod.php?id=" . $row['id'] . "'>Alterar</a></td>";
                echo "</tr>";
            }


            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id*</th>
                <th>E-mail*</th>
                <th>Senha*</th>
                <th>Nome*</th>
                <th>Sobrenome*</th>
                <th>Sexo*</th>
                <th>Nascimento*</th>
                <th>Logradouro*</th>
                <th>Numero*</th>
                <th>Complemento</th>
                <th>Estado*</th>
                <th>Cidade*</th>
                <th>Time*</th>
                <?php
                 if ($_SESSION[adm] > 80) {
                    echo "<th>Admin</th>";
                }
                ?>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script>
        function confirma(id) {

          if (confirm("Confirmar exclusão?")) {
            window.location.replace("https://davi-henrique.000webhostapp.com/crud_del.php?id="+id);
          }
        }
    
        $(document).ready(function() {
            $('#crudTable').DataTable();
        });
    </script>
</body>

</html>