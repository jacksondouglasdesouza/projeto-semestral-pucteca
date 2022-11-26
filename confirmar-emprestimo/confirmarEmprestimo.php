<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pucteca, a biblioteca comunitária da pucpr, área de Login">
  <link rel="stylesheet" href="./confirmarEmprestimo.css">
  <!-- AUTHOR UI - UX - CODING -->
  <!-- My LinkedIn --- https://www.linkedin.com/in/jacksondouglasdesouza -->
  <!-- My Github --- https://github.com/jacksondouglasdesouza -->
  <meta author="author" content="Jackson Douglas de Souza" />
  <!-- ICON TAB -->
  <link rel="icon" href="../favicon/favicon.png" type="image/sgv+xml" width="512" height="512">
  <!-- GOOGLE API FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- TITLE -->
  <title>PUCTECA | CONFIGURAÇÕES</title>
</head>

<body>
  <!-- NAV -->
  <header>
    <img class="logo" src="./imgs/configUsuario/nav/LogoMarca.svg" alt="logo Marca Pucteca" width="150" height="90">
    <nav>
      <a href="#">Seu Painel</a>
      <a href="../configuracoesUsuario/configUsuario.php">Configurações</a>
      <a href="#">Seus Livros</a>
      <a href="#">Seus Empréstimos</a>
      <a href="#">Sair</a>
      <a href="#"><img src="./imgs/configUsuario/nav/email.svg" alt="Ícone do email" width="27" header="17"></a>

    </nav>
  </header>
  <h1>
    Suas Informações
  </h1>
  <main id="introducao">
    <div class="colEsquerda">
      <form action="#" method="POST" class="formularioEsquerda">
        <fieldset>
          <!-- NOME COMPLETO USUARIO -->
          <legend class="pMaior">Seu Nome</legend>
          <!-- Auto complete -->
          <input type="text" id="nomeUsuario" name="nomeUsuario">
        </fieldset> <br />
        <fieldset>
          <!-- CPF USUARIO -->
          <legend class="pMaior">Seu CPF</legend>
          <!-- Auto complete -->
          <input type="text" id="cpfUsuario" name="cpfUsuario">
        </fieldset> <br />
        <fieldset>
          <!-- RG USUARIO -->
          <legend class="pMaior">Seu RG</legend>
          <!-- Auto complete -->
          <input type="text" id="rgUsuario" name="rgUsuario">
        </fieldset> <br />
        <fieldset>
          <!-- ENDEREÇO USUÁRIO -->
          <legend class="pMaior">Seu Endereço</legend>
          <!-- Auto complete -->
          <input type="text" id="enderecoUsuario" name="enderecoUsuario">
        </fieldset> <br />
        <fieldset>
          <!-- NUMERO DA CASA -->
          <!-- Auto complete -->
          <legend class="pMaior">Numero</legend>
          <input type="text" id="numerodaCasa" name="numerodaCasa" class="numeroCasa">
        </fieldset>
        <fieldset>
          <!-- CEP USUÁRIO  -->
          <!-- Auto complete -->
          <legend class="pMaior">CEP</legend>
          <input type="text" id="cepUsuario" name="cepUsuario" class="cepUsuario">
        </fieldset>
        <fieldset>
          <!-- RA USUÁRIO -->
          <legend class="pMaior">Seu RA</legend>
          <input type="text" id="registroAcademico" name="registroAcademico">
        </fieldset> <br />
        <fieldset>
          <!-- DATA DE DEVOLUÇÃO -->
          <legend class="pMaior">Escolha a Data Devolução</legend>
          <input type="date" id="dataDevolucao" name="dataDevolucao"> <br />
        </fieldset> <br />
      </form>
    </div> <!-- DIV ESQUERDA -->

    <!-- COLONA DIREITA -->
    <div class="colEsquerda">
      <form action="#" method="POST" class="formularioDireita">
        <fieldset>
          <!-- NOME DO USUARIO PROPRIETÁRIO -->
          <legend class="pMaior">Nome Proprietário</legend>
          <!-- Auto complete -->
          <input type="text" id="nomeProprietario" name="nomeProprietario">
        </fieldset> <br />
        <fieldset>
          <!-- EMAIL DO USUARIO PROPRIETÁRIO -->
          <legend class="pMaior">Email do Proprietário</legend>
          <!-- Auto complete -->
          <input type="email" id="emailProprietario" name="emailProprietario">
        </fieldset> <br />
        <fieldset>
          <fieldset>
            <!-- TELEFONE DO USUARIO PROPRIETÁRIO -->
            <legend class="pMaior">Telefone do Proprietário</legend>
            <!-- Auto complete -->
            <input type="text" id="foneProprietario" name="foneProprietario">
          </fieldset> <br />
          <fieldset>

            <!-- CELULAR DO USUARIO PROPRIETÁRIO -->
            <legend class="pMaior">Celular do Proprietário</legend>
            <!-- Auto complete -->
            <input type="text" id="celularProprietario" name="celularProprietario">
          </fieldset> <br />
          <div class="cadastros">
            <fieldset>
              <!-- CANCELAR EMPRÉSTIMO -->
              <a href=""><button type="button" id="salvarCadastro" name="salvarCadastro" class="salvarCadastro">Confirmar</button></a>
            </fieldset>
            <fieldset>
              <!-- SALVAR EMPRÉSTIMO -->
              <a href="#"><button type="submit" id=" cancelarCadastro" name="cancelarCadastro" class="cancelarCadastro">Cancelar</button></a>
            </fieldset> <br />
          </div>

      </form>
    </div> <!-- DIV ESQUERDA -->
  </main>
  <!-- FOOTER -->
  <footer>
    <div>
      <p>
        Imaculada Conceição, 1155. Prado Velho, Curitiba/PR<br />
        <span class="dev">
          Desenvolvido por <a href="https://www.linkedin.com/in/jacksondouglasdesouza" target="_black">Jackson Douglas de Souza
          </a>
        </span>
      </p>
    </div>

    <div class="icons">
      <a href="https://www.facebook.com" target="_black"><img width="24" height="24" src="./imgs/configUsuario/footer/facebook.svg" alt="Link da rede social facebook x"></a>
      <a href="https://twitter.com" target="_black"> <img width="24" height="24" src="./imgs/configUsuario/footer/twitter.svg" alt="Link da rede social twitter"></a>
      <a href="https://instagram.com" target="_black"><img width="24" height="24" src="./imgs/configUsuario/footer/instagran.svg" alt="Link da rede social instagran"></a>
      <a href="https://www.youtube.com/channel/UCCVlStjZTACMrlLlyAlrU1A" target="_black"><img width="24" height="24" src="./imgs/configUsuario/footer/youtube.svg" alt="Link da rede social youtube"></a>
      <a href="https://www.linkedin.com/in/jacksondouglasdesouza/" target="_black"><img width="24" height="24" src="./imgs/configUsuario/footer/linkedin.svg" alt="Link da rede social linkedin"></a>
    </div>
  </footer>
</body>

</html>