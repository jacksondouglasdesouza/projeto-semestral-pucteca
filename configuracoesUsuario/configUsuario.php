<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pucteca, a biblioteca comunitária da pucpr, área de Login">
  <link rel="stylesheet" href="./configUsuario.css">
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
      <a href="#">Configurações</a>
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
          <legend class="pMaior">Nome Completo</legend>
          <input type="text" id="nomeUsuario" name="nomeUsuario" require placeholder="Nome Completo">
        </fieldset> <br />
        <fieldset>
          <!-- CPF USUARIO -->
          <legend class="pMaior">CPF</legend>
          <input type="text" id="cpfUsuario" name="cpfUsuario" require placeholder="000.000.000-00">
        </fieldset> <br />
        <fieldset>
          <!-- RG USUARIO -->
          <legend class="pMaior">RG</legend>
          <input type="text" id="rgUsuario" name="rgUsuario" require placeholder="Numero Identidade">
        </fieldset> <br />
        <fieldset>
          <!-- ENDEREÇO USUÁRIO -->
          <legend class="pMaior">Endereço</legend>
          <input type="text" id="enderecoUsuario" name="enderecoUsuario" require placeholder="Rua, Bairro, Cidade, Estado">
        </fieldset> <br />
        <fieldset>
          <!-- NUMERO DA CASA -->
          <legend class="pMaior">Numero</legend>
          <input type="text" id="numerodaCasa" name="numerodaCasa" class="numeroCasa">
        </fieldset>
        <fieldset>
          <!-- CEP USUÁRIO  -->
          <legend class="pMaior">CEP</legend>
          <input type="text" id="cepUsuario" name="cepUsuario" class="cepUsuario">
        </fieldset>
        <fieldset>
          <!-- COMPLEMENTO ENDEREÇO USUÁRIO -->
          <legend class="pMaior">Completo</legend>
          <input type="text" id="ComplementoEndereco" name="ComplementoEndereco">
        </fieldset> <br />
        <fieldset class="imgFile">
          <!-- FOTO USUÁRIO -->
          <img class="upload" src="./imgs/configUsuario/painel/upload.svg" alt="Upload Foto" width="51.78" height="55.82"><br />
          <label for="fotoUsuario">Adicionar sua Foto</label>
          <input type="file" id="fotoUsuario" name="fotoUsuario">
        </fieldset> <br />
      </form>
    </div> <!-- DIV ESQUERDA -->

    <!-- COLONA DIREITA -->
    <div class="colEsquerda">
      <form action="#" method="POST" class="formularioDireita">
        <fieldset>
          <!-- CURSO USUARIO -->
          <legend class="pMaior">Curso</legend>
          <input type="text" id="CursoUsuario" name="CursoUsuario" require placeholder="Nome do Curso">
        </fieldset> <br />
        <fieldset>
          <!-- TURMA USUARIO -->
          <legend class="pMaior">Turma</legend>
          <input type="text" id="turmaUsuario" name="turmaUsuario" require placeholder="Numero da Turma">
        </fieldset> <br />
        <fieldset>
          <fieldset>
            <!-- RA USUARIO -->
            <legend class="pMaior">RA</legend>
            <input type="text" id="registroAcademico" name="registroAcademico" require placeholder="Numero do RA">
          </fieldset> <br />
          <fieldset>

            <!-- E-MAIL USUARIO -->
            <legend class="pMaior">Email</legend>
            <input type="email" id="email" name="email" require placeholder="seuemail@email.com.br">
          </fieldset> <br />
          <fieldset>
            <!-- TELEFONE USUARIO -->
            <legend class="pMaior">Telefone</legend>
            <input type="text" id="telefoneUsuario" name="telefoneUsuario" require placeholder="(xx) xxxx - xxxx">
          </fieldset> <br />
          <fieldset>
            <!-- CELULAR USUARIO -->
            <legend class="pMaior">Celular</legend>
            <input type="text" id="celularUsuario" name="celularUsuario" require placeholder="(xx) xxxxx - xxxx">
          </fieldset> <br />
          <div class="cadastros">
            <fieldset>
              <!-- CANCELAR CADASTRO -->
              <a href=""><button type="button" id="cancelarCadastro" name="cancelarCadastro" class="cancelarCadastro">Cancelar</button></a>
            </fieldset>
            <fieldset>
              <!-- SALVAR CADASTRO -->
              <a href="#"><button type="submit" id="salvarCadastro" name="salvarCadastro" class="salvarCadastro">Salvar</button></a>
            </fieldset> <br />

          </div>

      </form>
    </div> <!-- DIV ESQUERDA -->
    </div>
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