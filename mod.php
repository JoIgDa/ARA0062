<?php
include("functions.php");
include_once("database.php");

$id = $_POST['tId'];
$senha = md5($_POST['tSenha']);        
$email = $_POST['tEmail'];             

$database = new database();

if( $database->query("SELECT * 
                      FROM `usuario` 
                      WHERE `email` = '$email'")->rowCount() > 0 ) {
    echo "Email já cadastrado!";
} else {
    $rows = $database->exec("UPDATE `usuario` 
                             SET `senha` = '$senha',
                                 `email` = '$email' 
                             WHERE `usuario`.`id` = '$id'"); 
    echo"<script>
    window.location.replace('https://davi-henrique.000webhostapp.com/crud.php');
    </script>";
}

?>