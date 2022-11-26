<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pucteca, a biblioteca comunitária da pucpr, área de Login">
  <link rel="stylesheet" href="./registro-de-contas.css">
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
  <title>PUCTECA | REGISTRAR CONTA</title>
</head>

<body>
  <main id="introducao">
    <div class="colEsquerda">
      <h1>
        Cadastre-se com o endereço de e-mail
      </h1>
      <form action="#" method="POST" class="formularioLogin">
        <fieldset>
          <legend class="pMaior">Nome</legend>
          <input type="text" id="nomeUsuario" name="nomeUsuario" require placeholder="Nome Completo">
        </fieldset> <br />
        <fieldset>
          <legend class="pMaior">Email</legend>
          <input type="email" id="email" name="email" require placeholder="seuemail@email.com">
        </fieldset> <br />
        <fieldset>
          <legend class="pMaior">Senha</legend>
          <input type="password" id="senha" name="senha" require placeholder="*******">
        </fieldset> <br />
        <fieldset>
          <a href="#"><button class="login-butoons cadastre_se" type="submit" id="cadastre_se">CADASTRE-SE</button></a>
        </fieldset><br />
        <p class="termos">Este site está protegido pelo reCAPTCHA e a <a href="#">Política de Privacidade</a> e <a href="#">Termos de Serviço</a> do Google são aplicáveis.</p>
        <div class="loginExtra">
          <p>Já tem uma conta? <span class="destaque"><a href="../login/login.php">Fazer login</a></span></p>
        </div>
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
          <a href="https://www.facebook.com" target="_black"><img width="20" height="20" src="./imgs/registrodeContas/footer/facebook.svg" alt="Link da rede social facebook x"></a>
          <a href="https://twitter.com" target="_black"> <img width="20" height="20" src="./imgs/registrodeContas/footer/twitter.svg" alt="Link da rede social twitter"></a>
          <a href="https://instagram.com" target="_black"><img width="20" height="20" src="./imgs/registrodeContas/footer/instagran.svg" alt="Link da rede social instagran"></a>
          <a href="https://www.youtube.com/channel/UCCVlStjZTACMrlLlyAlrU1A" target="_black"><img width="20" height="20" src="./imgs/registrodeContas/footer/youtube.svg" alt="Link da rede social youtube"></a>
          <a href="https://www.linkedin.com/in/jacksondouglasdesouza/" target="_black"><img width="20" height="20" src="./imgs/registrodeContas/footer/linkedin.svg" alt="Link da rede social linkedin"></a>
        </div>
      </footer>

    </div> <!-- DIV ESQUERDA -->

    <!-- COLONA DIREITA -->
    <div>
      <a href="../index.php"><img class="fotoMulher" src="./imgs/registrodeContas/foto/casalSeguranca-section-002.png" alt="Um casal de adolescentes, sentados ao redor de uma cadeado, representando a segurança."></a>

    </div>
  </main>
</body>

</html>