<?php 
   
?>

<!DOCTYPE html>
<html lang="pt-br">


    <head>
    <meta charset="UTF-8"/>
    <title>Forms Clothes</title>
    <link rel="shortcut icon" href="img/icon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/carrinho.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>   
        <header id="cabecalho">
            <h1 style="text-align: center"><a href="index.php"><img src="img/logo.png"></a></h1>
                <ul>
                    <li><a href="camisas.php">Voltar</a></li>
                </ul>
        </header>

        <nav id="menu">
                <h1 style="text-align: center">Carrinho</h1>
        </nav> 
        <hr>
        

    <main>
        <table id="carrinho">
            <thead>
                <tr>
                    <th colspan="1">Itens para comprar</th>
                    <th class="coluna-pequena">Descrição do Item</th>
                    <th class="coluna-pequena">Quantidade</th>
                    <th class="coluna-pequena">Preço</th>
                </tr> 
            </thead>
                   
            <tbody>
                <tr>
                    <td class="foto-produto">
                        <a href="camisas.php"><img src="img/fla2.jpeg" class="camiseta" /></a>
                    </td>
               
                    <td>   
                        <div class="produto">
                            <a href="camisas.php">Camisa do Flamengo | 2020 | Oficial</a>
                        </div>
                            <strong>Em estoque</strong>
                        <div>
                            <label><input type="checkbox"/>Deseja embalar para presente ?</label>
                        </div>
                            <a href="#">Tirar do carrinho</a>
                    </td>
                    <td>
                        <input type="number" value="0" name="tQuant" class="cQuant" min="0" max="20"/>
                    </td>
                    <td><span class="preco-produto">R$289,90</span></td>
                </tr>
                <tr>
                    <td class="foto-produto">
                        <a href="camisas.php"><img src="img/flu1.jpeg" class="camiseta" /></a>
                    </td>
               
                    <td>   
                        <div class="produto">
                            <a href="camisas.php">Camisa do Fluminense | 2020 | Oficial</a>
                        </div>
                            <strong>Em estoque</strong>
                        <div>
                            <label><input type="checkbox"/>Deseja embalar para presente ?</label>
                        </div>
                            <a href="#">Tirar do carrinho</a>
                    </td>
                    <td>
                        <input type="number" value="0" name="tQuant" class="cQuant" min="0" max="20"/>
                    </td>
                    <td><span class="preco-produto">R$259,90</span></td>
                </tr>
                <tr>
                    <td class="foto-produto">
                        <a href="camisas.php"><img src="img/vasco2.jpeg" class="camiseta" /></a>
                    </td>
               
                    <td>   
                        <div class="produto">
                            <a href="camisas.php">Camisa do Vasco | 2020 | Oficial</a>
                        </div>
                            <strong>Em estoque</strong>
                        <div>
                            <label><input type="checkbox"/>Deseja embalar para presente ?</label>
                        </div>
                            <a href="#">Tirar do carrinho</a>
                    </td>
                    <td>
                        <input type="number" value="0" name="tQuant" class="cQuant" min="0" max="20"/>
                    </td>
                    <td><span class="preco-produto">R$259,90</span></td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan="3" class="total-compra">Total da Compra</td>
                    <td><span id="preco-total">R$ 289.90</span></td>
                </tr>
            </tfoot>
        </table> <br>
        <input type="submit" class="btn btn-primary btn-lg btn-block" id="enviar" value="Comprar">

    </main> <br>

    <script src="js/functions.js"></script>

        <footer id="rodape">
            <p>Copyright &copy; <?php echo date ('Y');?> - by Forms Clothes<br> <a href="https://www.facebook.com/" target="_blank">Facebook</a> | <a href="https://www.Twitter.com/" target="_blank">Twitter</a> </p>
        </footer>
    </body>
</html>