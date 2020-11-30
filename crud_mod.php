<?php
include("database.php");
$database = new database();

$id = $_GET["id"];

foreach ($database->query("SELECT * FROM `usuario` WHERE `id` = '$id'") as $row) {
   $email=$row['email'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Forms Clothes</title>
    <link rel="shortcut icon" href="img/icon/favicon.ico" />
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
        <h1 style="text-align: center"><a href="index.html"><img src="img/logo.png"></a></h1>
    </header>
    <nav id="menu">
        <h1 style="text-align: center"> Gerenciamento </h1>
    </nav>
    <?php 
    if($id==1) {
        echo "<div class='container' style='text-align: center'>
            <small class='text-muted'>Infelizmente, o usuário admin não pode ser alterado!</small>
            <br>
            <a class='btn btn-danger btn-lg' href='crud.php'>Voltar</a>
        </div>";

    } else {
    echo "<form class='form-group' action='mod.php' method='POST'>
            <div class='container'>
                <small class='text-muted'>Atenção: As modificações estão limitadas somente ao Email e a Senha por motivos de segurança, tendo em vista que uma mensagem mal inserida pode danificar nosso banco de dados.</small><br>
                <small class='text-muted'>Tenha em mente que as senhas serão criptografadas, então aparacerá somente o HASH dela no crud. Não temos acesso à senha de ninguém!</small><br>
                <small class='text-muted'>Pode ser inserido qualquer dado no campo e-mail (INCLSUIVE INJEÇÃO SQL!!), então tome muito cuidado. (Limite: 40 caracteres)</small><br>
                <div class='form-row'>
                    <div class='col'>
                        ID::
                        <input type='text' name='tId' class='form-control' id='cId' value='$id' readonly/>
                    </div>
                    <div class='col'>
                        E-mail/Login:
                        <input type='text' name='tEmail' class='form-control' id='cEmail' value='$email' required/>
                    </div>
                    <div class='col'>
                        Senha:
                        <input type='password' class='form-control' name='tSenha' id='_cSenha' value='1234' required />
                    </div>
                    <br><br><br>
                    <input type='submit' class='btn btn-danger btn-lg btn-block' value='Modificar'>
                </div>
            </div>
        </form>"; }
      ?>
</body>
</html>


    