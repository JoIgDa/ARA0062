<?php
session_start();
include("database.php");
include("functions.php");
$database=new database();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/teste.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto my-2 order-0 order-md-1 position-relative">
            <a class="mx-auto" href="#">
                <img src="//placehold.it/120/ccff00" class="rounded-circle">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
            <ul class="navbar-nav mr-auto text-center">
                <?php
                if (!isset($_SESSION['id'])) {
                    echo "
                    <li class='nav-item'>
                        <a class='nav-link' href='cadastro.php'>Cadastre-se</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='login.php'>Entrar</a>
                    </li>
                    ";
                } else {
                    $nome = $database->query("SELECT nome FROM usuario WHERE id=$_SESSION[id]")->fetchColumn();
                    echo "                                   
                        <li class='nav-item'>
                            <a class='nav-link' href='vendas.php'>Vendas</a>
                        </li>                        
                    ";
                    echo "                                   
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>Perfil</a>
                        </li>                        
                    ";
                    if($_SESSION['adm'] >= 80) {
                        echo "
                        <li class='nav-item'>
                            <a class='nav-link' href='crud.php'>Admin</a>
                        </li>
                        ";
                    } else {
                        echo "
                        <li class='nav-item'>
                            <a class='nav-link disabled' href='crud.php'><i>Admin</i></a>
                        </li>
                        ";
                    }
                    echo "                                   
                        <li class='nav-item'>
                            <a class='nav-link' href='logout.php'>Logout (".$nome.")</a>
                        </li>                        
                    ";
                }

                ?>
            </ul>
        </div>
    </nav>
</body>

</html>