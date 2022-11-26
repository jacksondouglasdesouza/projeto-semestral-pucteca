<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pucteca, a biblioteca comunitária da pucpr, desenvolvida por alunos.">
  <link rel="stylesheet" href="./index.css">
  <!-- AUTHOR UI - UX - CODING -->
  <!-- My LinkedIn ---* https://www.linkedin.com/in/jacksondouglasdesouza -->
  <!-- My Github ---* https://github.com/jacksondouglasdesouza -->
  <meta author="author" content="Jackson Douglas de Souza" />
  <!-- ICON TAB -->
  <link rel="icon" href="./favicon/favicon.png" type="image/sgv+xml" width="512" height="512">
  <!-- GOOGLE API FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- TITLE -->
  <title>PUCTECA | HOME</title>
</head>

<body>
  <main id="introducao">
    <div class="colEsquerda">
      <img class="logoMarca" src="./imgs/home/logoMarca/LogoMarca.svg" alt="Logo Marca Pucteca" width="178" height="127">
      <h1>
        Bem Vindo a biblioteca comunitária da PUCPR
      </h1>
      <p>
        A Pucteca foi desenvolvida por Jackson Douglas, aluno do curso de análise e desenvolvimento de sistemas, o projeto tem como objetivo facilitar o empréstimo de livros entre os alunos. Faça já seu login e cadastre seus livros para empréstimos ou pegue um livro emprestado.
      </p>
      <fieldset id="entrar">
        <legend id="entrar">Faça Login</legend>
        <a href="./login/login.php"><button class="butoons" type="button" id="entrar">ENTRAR</button></a>
      </fieldset>
      <fieldset id="cadastra">
        <legend id="cadastra">Não tem uma Conta?</legend>
        <a href="./registrodeConta/registrodecontas.php"><button class="butoons azul" type="button" id="cadastra">CRIAR UMA CONTA</button></a>
      </fieldset>

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
          <a href="https://www.facebook.com" target="_black"><img width="20" height="20" src="./imgs/home/footer/facebook.svg" alt="Link da rede social facebook x"></a>
          <a href="https://twitter.com" target="_black"> <img width="20" height="20" src="./imgs/home/footer/twitter.svg" alt="Link da rede social twitter"></a>
          <a href="https://instagram.com" target="_black"><img width="20" height="20" src="./imgs/home/footer/instagran.svg" alt="Link da rede social instagran"></a>
          <a href="https://www.youtube.com/channel/UCCVlStjZTACMrlLlyAlrU1A" target="_black"><img width="20" height="20" src="./imgs/home/footer/youtube.svg" alt="Link da rede social youtube"></a>
          <a href="https://www.linkedin.com/in/jacksondouglasdesouza/" target="_black"><img width="20" height="20" src="./imgs/home/footer/linkedin.svg" alt="Link da rede social linkedin"></a>
        </div>
      </footer>

    </div> <!-- DIV ESQUERDA -->

    <!-- COLONA DIREITA -->
    <div>
      <img class="fotoMulher" src="./imgs/home/foto/fotoModelo.jpg" alt="Foto de uma mulher loira, ela esta segurando uma caderno, está de camisa azul.">
    </div>
  </main>
</body>

</html>