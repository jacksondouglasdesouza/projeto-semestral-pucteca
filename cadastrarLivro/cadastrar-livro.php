<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pucteca, a biblioteca comunitária da pucpr, área de cadastramento de livros.">
  <link rel="stylesheet" href="./cadastrar-livro.css">
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
  <title>PUCTECA | CADASTRAR LIVRO</title>
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
    Cadastro de livros
  </h1>
  <main id="introducao">
    <div class="colEsquerda">
      <form action="#" method="POST" class="formularioEsquerda">
        <fieldset>
          <!-- NOME DO LIVRO -->
          <legend class="pMaior">Nome do Livro</legend>
          <input type="text" id="nomedoLivro" name="nomedoLivro" require>
        </fieldset> <br />
        <fieldset>
          <!-- NOME DO AUTOR -->
          <legend class="pMaior">Nome do Author</legend>
          <input type="text" id="nomedoAutor" name="nomedoAutor" require>
        </fieldset> <br />
        <fieldset>
          <!-- NOME DA EDITORA -->
          <legend class="pMaior">Nome da Editora</legend>
          <input type="text" id="nomeEditora" name="nomeEditora" require>
        </fieldset> <br />
        <fieldset>
          <!-- NÚMERO DO ISBN -->
          <legend class="pMaior">ISBN</legend>
          <input type="text" id="numeroIsbn" name="numeroIsbn" require placeholder="Número do ISBN">
        </fieldset> <br />
        <fieldset>
          <!-- ANO DE PUBLICAÇÃO -->
          <legend class="pMaior">Ano de Publicação</legend>
          <input type="text" id="ano" name="ano" class="numeroCasa">
        </fieldset>
        <fieldset>
          <!-- NÚMERO DE FOLHAS -->
          <legend class="pMaior">Nº de Folhas</legend>
          <input type="text" id="nFolhas" name="nFolhas" class="cepUsuario">
        </fieldset>
        <fieldset class="imgFile">
          <!-- FOTOS DO LIVRO -->
          <img class="upload" src="./imgs/configUsuario/painel/upload.svg" alt="Upload Foto" width="51.78" height="55.82"><br />
          <label for="fotosLivro">Fotos do livro</label>
          <input type="file" id="fotosLivro" name="fotosLivro">
        </fieldset> <br />
      </form>
    </div> <!-- DIV ESQUERDA -->

    <!-- COLONA DIREITA -->
    <div class="colEsquerda">
      <form action="#" method="POST" class="formularioDireita">
        <div class="descricao">
          <fieldset>
            <legend class="pMaior">Descrição do Livro</legend>
            <textarea name="descricaoLivro" id="" cols="60" rows="15"></textarea>
          </fieldset>
          <div class="carregarLivros">
            <fieldset class="imgFile">
              <!-- ARQUIVOS DO LIVRO -->
              <label for="carregarLivro">Carregar Livro</label>
              <input type="file" id="carregarLivro" name="carregarLivro">
            </fieldset> <br />
          </div>
        </div>
        <div class="confirmar">
          <fieldset>
            <!-- SALVAR CADASTRO -->
            <a href="#"><button type="submit" id="salvarCadastro" name="salvarCadastro" class="salvarCadastro">Confirmar</button></a>
          </fieldset>
          <fieldset>
            <!-- CANCELAR CADASTRO -->
            <a href=""><button type="submit" id="cancelarCadastro" name="cancelarCadastro" class="cancelarCadastro">Cancelar</button></a>
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