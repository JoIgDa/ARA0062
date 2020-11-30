<?php
session_start();
include("functions.php");
include("database.php");
include("card.php");

if(isset($_SESSION['id'])) {
        if(isset($_POST['vender'])) {
        $database = new database();
        $card = new cards();
        $imagem = protect($_POST['vendaImagem']);
        $titulo = protect($_POST['vendaTitulo']);
        $descricao = protect($_POST['vendaDescricao']);
        $preco = protect($_POST['vendaPreco']);
        $seller = protect($_POST['vendaEmail']);
        $sellerid = $database->query("SELECT id FROM usuario WHERE email='".$_POST['vendaEmail']."'")->fetchColumn();
        $database->exec($card->create($imagem, $titulo, $descricao, $preco, $sellerid));
                echo"<script>
                    window.location.replace('https://davi-henrique.000webhostapp.com/camisas_prototipo.php');
                </script>";
    }
} else {
    echo "Você precisa estar logado para criar uma venda!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Forms Clothes - Anuncie</title>
  <link rel="shortcut icon" href="img/icon/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/cadastro.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">   
  
</head>

<body>

  <header id="cabecalho">
    <h1 style="text-align: center"><a href="index.php"><img src="img/logo.png"></a></h1>
      <ul>
        <li><a href="index.php">Voltar</a></li>
      </ul>
  </header>

  <nav id="menu">
    <h1 style="text-align: center"> Anuncio </h1>
  </nav>
  
  <hr>

  <form method="POST" action="vender.php">
    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="vendaImagem">
            <label class="custom-file-label" for="customFile">Imagem do produto</label>
        </div>
        
        <br><br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="vendaTituloTexto">Titulo</span>
            </div>
            <input type="text" class="form-control" name="vendaTitulo">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Descrição</span>
            </div>
            <textarea class="form-control" name="vendaDescricao"></textarea>
        </div><br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">R$</span>
            </div>
            <input type="number" class="form-control" name="vendaPreco">
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="vendaVendedor">Vendedor</span>
            </div>
            <?php
            $_email = $_SESSION[email];
            echo"
                <input type='text' class='form-control' value='$_email' name='vendaEmail' readonly>";
            ?>
        </div>
        <!--
        <label>Quantidade: </label><input type="number" name="tQuanntidade" id="cQuantidade" min="0" max="10"
          value="0">
      <label>Preço Total: R$ </label> <input type="text" name="tTotal" id="cTotal" placeholder="Total a Pagar"
          readonly>
      -->
    </div>
    <input type="submit" class="btn btn-primary" name="vender" id="vender" value="Vender">
  </form>

  <footer id="rodape">
    <p>Copyright &copy; <?php echo date ('Y');?> - by Forms Clothes<br> <a href="https://www.facebook.com/" target="_blank">Facebook</a> | <a href="https://www.Twitter.com/" target="_blank">Twitter</a> </p>
</footer>

</body>

</html>