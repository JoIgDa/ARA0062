<?php
session_start();
include("database.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8"/>
        <title>Forms Clothes</title>
        <link rel="shortcut icon" href="img/icon/favicon.ico" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css"/>
        <link rel="stylesheet" href="css/camisas.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {
            background-color: #242424;}
        </style>
        
    </head>

    <body>
        
        <header id="cabecalho">
            <h1 style="text-align: center"><a href="index.html"><img src="img/logo.png"></a></h1>
        </header>
        
        <nav id="menu">
            <h1 style="text-align: center">Camisas</h1>
        </nav>
        
        <hr>
    
    
        <hgroup id="cards"> 
            <div class="container" >
                <div class="row main-row">
                    <?php
                    $database=new database();

                                foreach ($database->query("SELECT * FROM `card`") as $card) {
                                    $seller = $database->query("SELECT email FROM usuario WHERE id='".$card['fk_usuario_id']."'")->fetchColumn();
                            echo "<div class='col-md-4 mb-5'>
                                    <div class='card p-3' style='width: 18rem;'>
                                        <img src=".$card['img']." class='card-img-top shadow bg-white rounded'/>
                                        <div class='card-body'> 
                                            <h5 class='card-title'>".$card['title']."</h5>
                                            <p class='card-text'>".$card['body']."<br><br>Preço: R$".$card.['price']."<br>Vendido por: ".$seller."</p>
                                            <button type='button' class='btn btn-outline-dark'>Comprar</button>
                                        </div>
                                    </div>
                                </div>";
                                
                            
                        }
                    ?>                    
                </div>   
            </div>
        </hgroup>
    
        <footer id="rodape">
            <p>Copyright &copy; 2020 - by Forms Clothes<br> <a href="#" target="_blank">Facebook</a> | <a href="#" target="_blank">Twitter</a> </p>
        </footer>
    </body>

</html>
=