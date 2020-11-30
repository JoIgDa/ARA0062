<?php
include("database.php");
$database = new database();
$id = $_GET["id"];

if($id == 1) {
    echo"<h1>Admin não pode ser alterado!</h1>";
} else {
    $count = $database->exec("DELETE FROM usuario WHERE id='$id'");
    echo "<h1>foi excluído $count registro</h1>";
}

?>