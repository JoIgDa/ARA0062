<?php
include("database.php");
include("functions.php");

$database=new database();
$email = protect($_POST['tEmail']);
$senha = md5(protect($_POST['tSenha']));


if( $database->query ("SELECT * FROM `usuario` WHERE `email` = '$email' AND `senha` = '$senha'")->rowCount() > 0) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['id'] = $database->query("SELECT id FROM `usuario` WHERE `email` = '$email' AND `senha` = '$senha'")->fetchColumn();
    $_SESSION['adm'] = $database->query("SELECT adm FROM `usuario` WHERE `email` = '$email' AND `senha` = '$senha'")->fetchColumn();
    if($_SESSION['adm'] >= 80) {
        echo"<script>
                window.location.replace('https://davi-henrique.000webhostapp.com/crud.php');
            </script>";
        } else {
        echo"<script>
                window.location.replace('https://davi-henrique.000webhostapp.com/index.php');
            </script>";
    }
} else {
    echo "Usuario ou senha errados!";
}
?>