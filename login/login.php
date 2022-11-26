<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pucteca, a biblioteca comunitária da pucpr, área de Login">
  <link rel="stylesheet" href="./login.css">
  <!-- AUTHOR UI - UX - CODING -->
  <!-- My LinkedIn ---* https://www.linkedin.com/in/jacksondouglasdesouza -->
  <!-- My Github ---* https://github.com/jacksondouglasdesouza -->
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
  <title>PUCTECA | LOGIN</title>
</head>

<body>
  <main id="introducao">
    <div class="colEsquerda">
      <a href="../index.php"><img class="logoMarca" src="./imgs/login/logoMarca/LogoMarca.svg" alt="Logo Marca Pucteca" width="178" height="127"></a>
      <h1>
        Bem Vindo Comunidade
      </h1>
      <p>
        A Pucteca é repleta de livros para você emprestar
        faça seu login e escolha o seu preferido.
      </p>

      <form action="#" method="POST" class="formularioLogin">
        <fieldset>
          <legend class="pMaior">Email</legend>
          <input type="email" id="email" name="email" require placeholder="seuemail@email.com">
        </fieldset> <br />
        <fieldset>
          <legend class="pMaior">Senha</legend>
          <input type="password" id="senha" name="senha" require placeholder="*******">
        </fieldset> <br />
        <fieldset>
          <legend><span><input class="check" type="checkbox"></span>Lembrar da senha <span class="esqueci"><a href="#">Esqueci minha senha</a></span></legend>
          <a href="#"><button class="login-butoons" type="submit" id="entrar">ENTRAR</button></a>
        </fieldset><br />
        <fieldset>
          <legend>Não tem uma Conta?</legend>
          <a href="../registrodeConta/registrodecontas.php"><button class="login-butoons azul" type="button" id="cadastra">CRIAR UMA CONTA</button></a>
        </fieldset> <br />

      </form>

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
          <a href="https://www.facebook.com" target="_black"><img width="20" height="20" src="./imgs/login/footer/facebook.svg" alt="Link da rede social facebook x"></a>
          <a href="https://twitter.com" target="_black"> <img width="20" height="20" src="./imgs/login/footer/twitter.svg" alt="Link da rede social twitter"></a>
          <a href="https://instagram.com" target="_black"><img width="20" height="20" src="./imgs/login/footer/instagran.svg" alt="Link da rede social instagran"></a>
          <a href="https://www.youtube.com/channel/UCCVlStjZTACMrlLlyAlrU1A" target="_black"><img width="20" height="20" src="./imgs/login/footer/youtube.svg" alt="Link da rede social youtube"></a>
          <a href="https://www.linkedin.com/in/jacksondouglasdesouza/" target="_black"><img width="20" height="20" src="./imgs/login/footer/linkedin.svg" alt="Link da rede social linkedin"></a>
        </div>
      </footer>

    </div> <!-- DIV ESQUERDA -->

    <!-- COLONA DIREITA -->
    <div>
      <img class="fotoMulher" src="./imgs/login/foto/estante-de-livros-sec-002.png" alt="Estante de livros com uma ilustração de uma garota.">
    </div>
  </main>
</body>

</html>