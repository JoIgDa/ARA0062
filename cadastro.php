<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Forms Clothes</title>
  <link rel="shortcut icon" href="img/icon/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/cadastro.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">   
  
  <script>
    function calc_total() {
      var qtd = parseInt(document.getElementById('cQuantidade').value);
      tot = qtd * 350;
      document.getElementById('cTotal').value = tot;
    }
  </script>
</head>

<body>

  <header id="cabecalho">
    <h1 style="text-align: center"><a href="index.php"><img src="img/logo.png"></a></h1>
      <ul>
        <li><a href="index.php">Voltar</a></li>
      </ul>
  </header>

  <nav id="menu">
    <h1 style="text-align: center"> Cadastre-se </h1>
  </nav>
  
  <hr>

  <form method="POST" id="cadastro" action="cadastrar.php" oninput="calc_total();">
    <div class="form-group">

      <!-- ###### Usuário ###### -->
      <div class="container" id="usuario">
        <legend>Usuário</legend>
        <div class="form-row">
          <div class="col">
            <label for="cNome">Nome: *</label>
            <input type="text" class="form-control" name="tNome" id="cNome" size="50" maxlength="50"
              placeholder="Ex. Antonio" required />
          </div>
          <div class="col">
            <label for="cSobrenomeNome">Sobrenome: *</label>
            <input type="text" class="form-control" name="tSobrenome" id="cSobrenome" size="50" maxlength="50"
              placeholder="Ex. Lopes da Silva" required />
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="col">
            <label for="cSenha">Senha: *</label>
            <input type="password" class="form-control" name="tSenha" id="cSenha" minlength="8" maxlength="15"
              placeholder="Min. 8 dígitos" required />
          </div>
          <div class="col">
            <label for="_cSenha">Confirmação de senha: *</label>
            <input type="password" class="form-control" name="_tSenha" id="_cSenha" minlength="8" maxlength="15"
              placeholder="********" required />
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="col">
            <label for="cEmail">E-mail: *</label>
            <input type="email" name="tEmail" class="form-control" id="cEmail" size="40" maxlength="40"
              placeholder="example@example.com" required />
              <small class="text-muted">Você usará seu e-mail para se conectar.</small>
          </div>
          <div class="col">
            <label for="_cEmail">Confirmação de E-mail: *</label>
            <input type="email" name="_tEmail" class="form-control" id="_cEmail" size="40" maxlength="40"
              placeholder="example@example.com" required />            
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="col">
            Sexo: *
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tSexo" id="cMasc" value="M" checked>
              <label class="form-check-label" for="cMasc">
                Masculino
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tSexo" id="cFem" value="F">
              <label class="form-check-label" for="cFem">
                Feminino
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tSexo" id="cInd" value="I" disabled>
              <label class="form-check-label" for="cIndefinido">
                Indefinido
              </label>
            </div>
          </div>
          <div class="col">
            <label for="cData">Data de Nascimento: *</label>
            <input type="date" class="form-control" name="tData" id="cData">
          </div>
        </div>
      </div>
      <br>


      <!-- ###### Endereço ###### -->
      <div id="endereco" class="container">
        <legend>Endereço do Usuário</legend>
        <label for="cLogradouro">Logradouro: *</label>
        <input type="text" class="form-control" name="tLogradouro" id="cLogradouro" size="40" maxlength="40"
          placeholder="Ex. Avenida Lucio Costa" required />
        <br>
        <div class="row">
          <div class="col">
            <label for="cNumero">Número: *</label>
            <input type="number" class="form-control" name="tNumero" id="cNumero" size="5" min="0" max="99999"
              placeholder="Ex. 506" required />
          </div>
          <div class="col">
            <label for="cComplemento">Complemento: </label>
            <input type="text" class="form-control" name="tComplemento" id="cComplemento" size="40" maxlength="40"
              placeholder="Ex. Bloco 2, Apt 505" />
          </div>
        </div>
        <br>
        <label for="cEstado">Estado: *</label>
        <select name="tEstado" class="custom-select" id="cEstado" required>
          <optgroup label="Região Norte">
            <option value="AM">Amazonas</option>
            <option value="RR">Roraima</option>
            <option value="AP">Amapá</option>
            <option value="PA">Pará</option>
            <option value="TO">Tocantins</option>
            <option value="RO">Rondônia</option>
            <option value="AC">Acre</option>
          </optgroup>
          <optgroup label="Região Nordeste">
            <option value="MA">Maranhão</option>
            <option value="PI">Piauí</option>
            <option value="CE">Ceará</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="PE">Pernambuco</option>
            <option value="PB">Paraíba</option>
            <option value="SE">Sergipe</option>
            <option value="AL">Alagoas</option>
            <option value="BA">Bahia</option>
          </optgroup>
          <optgroup label="Região Centro-Oeste">
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="GO">Goiás</option>
          </optgroup>
          <optgroup label="Região Sudeste">
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="ES">Espírito Santo</option>
            <option value="MG">Minas Gerais</option>
          </optgroup>
          <optgroup label="Região Sul">
            <option value="PR">Paraná</option>
            <option value="SC">Santa Catarina</option>
            <option value="RS">Rio Grande do Sul</option>
          </optgroup>
        </select>
        <br><br>
        <label for="cCidade">Cidade: *</label>
        <input type="text" class="form-control" name="tCidade" id="cCidade" size="40" maxlength="40"
          placeholder="Ex. Rio de Janeiro" list="cidades" required />
      </div>
    </div>


    <!-- ###### Misc. ###### -->
    <div class="container" id="pedido">
      <legend>Notificação</legend>
      <input type="checkbox" class="form-check-input" name="tPed" id="cPed">
      <label> Gostaria de receber notificação quando uma blusa do meu time estiver a venda.</label>
      <p><label for="cTime">Time:</label>
        <select name="tTime" class="custom-select" id="cTime">
          <optgroup label="Serie A">
            <option value="athletico">Athletico Paranaense</option>
            <option value="atletico-go">Atlético Goianiense</option>
            <option value="atletigo-mg">Atlético Mineiro</option>
            <option value="bahia">Bahia</option>
            <option value="botafogo">Botafogo</option>
            <option value="ceara">Ceará</option>
            <option value="corinthians">Corinthians</option>
            <option value="coritiba">Coritiba</option>
            <option value="flamengo">Flamengo</option>
            <option value="fluminense">Fluminense</option>
            <option value="fortaleza">Fortaleza</option>
            <option value="goias">Goiás</option>
            <option value="gremio">Grêmio</option>
            <option value="internacional">Internacional</option>
            <option value="palmeiras">Palmeiras</option>
            <option value="bragantino">Red Bull Bragantino</option>
            <option value="santos">Santos</option>
            <option value="saopaulo">São Paulo</option>
            <option value="sport">Sport</option>
            <option value="vasco">Vasco da Gama</option>                
        </optgroup>
        </select>
      <!--
        <label>Quantidade: </label><input type="number" name="tQuanntidade" id="cQuantidade" min="0" max="10"
          value="0">
      <label>Preço Total: R$ </label> <input type="text" name="tTotal" id="cTotal" placeholder="Total a Pagar"
          readonly>
      -->
    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar">
  </form>

  <footer id="rodape">
    <p>Copyright &copy; <?php echo date ('Y');?> - by Forms Clothes<br> <a href="https://www.facebook.com/" target="_blank">Facebook</a> | <a href="https://www.Twitter.com/" target="_blank">Twitter</a> </p>
</footer>

</body>

</html>