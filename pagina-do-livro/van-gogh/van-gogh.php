<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pucteca, a biblioteca comunitária da pucpr, página do livro, Van-Gogh.">
  <link rel="stylesheet" href="./van-gogh.css">
  <!-- AUTHOR UI - UX - CODING -->
  <!-- My LinkedIn --- https://www.linkedin.com/in/jacksondouglasdesouza -->
  <!-- My Github --- https://github.com/jacksondouglasdesouza -->
  <meta name="author" content="Jackson Douglas de Souza" />
  <!-- ICON TAB -->
  <link rel="icon" href="../../favicon/favicon.png" type="image/sgv+xml" width="512" height="512">
  <!-- GOOGLE API FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- TITLE -->
  <title>PUCTECA | VAN GOGH</title>
</head>

<body>
  <!-- NAV -->
  <header>
    <img class="logo" src="./configUsuario/nav/LogoMarca.svg" alt="logo Marca Pucteca" width="150" height="90">
    <nav>
      <a href="#">Seu Painel</a>
      <a href="../configuracoesUsuario/configUsuario.php">Configurações</a>
      <a href="#">Seus Livros</a>
      <a href="#">Seus Empréstimos</a>
      <a href="#">Sair</a>
      <a href="#"><img class="email" src="./configUsuario/nav/email.svg" alt="Ícone do email" width="18" header="8"></a>
    </nav>
  </header>

  <!--CONTEÚDO PRINCIPAL -->
  <main class="intro">
    <!-- COLUNA DE FOTOS -->
    <figure>
      <img class="fotoLivro" src="./imgs/fotosLivro/van-gogh-pagina.jpg" alt="Livro - Van-Gogh." width="348" height="500">
      <figcaption>Exemplar Capa dura – 29 novembro 2012</figcaption>
    </figure>
    <!-- COLUNA DESCRIÇÃO -->
    <div class="colunaDireita">
      <article>
        <section class="descricao">
          <h1>
            Van Gogh
          </h1>
          <h2>
            Edição de Luxo - Capa Dura.
          </h2>
          <p>
            Mestre da pintura do século XIX e profeta da arte moderna, Vincent Willem van Gogh (18531890) nasceu num vilarejo fronteiriço nos confins pantanosos do sul da Holanda, filho primogênito de um modesto pastor protestante. Solitário e impetuoso desde criança, o artista fracassou em todas as tentativas de se fixar numa profissão “respeitável”. Somente encontrou alívio parcial para seus anseios excruciantes na produção de milhares de desenhos e pinturas, ao mesmo tempo em que submergia na doença e na loucura. Steven Naifeh e Gregory White Smith apresentam nesta monumental reconstituição biográfica uma visão ao mesmo tempo erudita e apaixonada sobre o artista holandês. Os autores, responsáveis por uma biografia de Jackson Pollock (inédita no Brasil e inspiradora do filme Pollock, de 2000), esmiúçam o conturbado relacionamento com os pais, a amizade com o irmão Theo, a relação intensa com a religião, a errância entre diversas cidades, a vida sexual desregrada, o fracasso em vender suas obras, a amizade conturbada com Paul Gauguin, a loucura, a orelha mutilada - e sugere uma explicação surpreendente para o suposto suicídio. Amparados pela mais ampla documentação já reunida sobre Van Gogh, Naifeh e Smith orientam o leitor com impecável segurança através do intrincado labirinto de referências estéticas, literárias e religiosas que definiu sua curta existência. Desse modo, diversas imprecisões, bem como mitos há muito estabelecidos na fortuna crítica vangoghiana, são esclarecidos com admirável sensibilidade humana e artística. O livro é complementado pelo site Van Gogh biography (em inglês), com notas bibliográficas e vasto material iconográfico. “A biografia definitiva para as próximas décadas.” - Leo Jansen, curador do Museu Van Gogh (Amsterdam) “O que Naifeh e Smith] capturam poderosamente em Van Gogh é sua extraordinária determinação para aprender, perseverar contra os infortúnios, continuar a pintar mesmo quando seus primeiros professores o ridicularizavam, quando uma facilidade natural parecia enganá-lo, quando suas telas encalhavam.” - Michiko Kakutani, The New York Times “Uma biografia de Van Gogh minuciosa o suficiente para ensejar uma reavaliação de tudo o que já se escreveu sobre o artista, e do que ele escreveu sobre si mesmo.” - William Feaver, The Guardian

          </p>
        </section>
        <div class="detalhesLivro">
          <h3>Detalhes do Livro</h3>
          <p><span class="detalhe">Autor:</span> Steven Naifeh</p>
          <p><span class="detalhe">Editora:</span> Companhia das Letras - 1ª edição</p>
          <p><span class="detalhe">Ano:</span> 29 novembro 2012</p>
          <p><span class="detalhe">ISBN:</span> 8535921974</p>
          <p><span class="detalhe">Folhas:</span> 1128</p>
          <a href="../../confirmar-emprestimo/confirmarEmprestimo.php"><button type="button" class="emprestar">EMPRESTAR</button></a>
          <a href="#"><button type="button" class="emprestar">+ LIVROS</button></a>
        </div>
      </article>

    </div>
  </main>

  <section class="recomendacoes">
    <h4>Recomendações para você</h4>
    <a class="recom" href="../Antifragil/antifragil.php"><img class="recomImg" src="../Antifragil/imgs/fotosLivro/Antifragil-miniatura.jpg" alt="Recomendação do livro, Antifrágil" width="160" height="160"></a>

    <a class="recom" href="../mindset/paginadolivro-Livro - mindset.php"><img class="recomImg" src="../mindset/imgs/fotosLivro/Livro - Mindset/Mindset -miniatura.jpg" alt="Recomendação do livro, Mindset" width="160" height="160"></a>

    <a class="recom" href="../Ate-o-verao-terminar/ate-o-verao-terminar.php"><img class="recomImg" src="../Ate-o-verao-terminar/imgs/fotosLivro/Ate-o-verao-terminar-miniatura.jpg" alt="Recomendação do livro, até o verão terminar." width="160" height="160"></a>

    <a class="recom" href="../Opoderdohabito/o-poder-do-habito.php"><img class="recomImg" src="../Opoderdohabito/imgs/fotosLivro/O poder do hábito-miniatura.jpg" alt="Recomendação do livro, o Poder do Hábito." width="160" height="160"></a>

    <a class="recom" href="../A-BibliotecadaMeia-Noite/a-biblioteca-da-meia-noite.php"><img class="recomImg" src="../A-BibliotecadaMeia-Noite/imgs/fotosLivro/ABibliotecadaMeia-Noite-miniatura.jpg" alt="Recomendação do livro, A Biblioteca da Meia-Noite" width="160" height="160"></a>

    <a class="recom" href="../Eu-e-Esse-Meu-Coracao/eu-e-esse-meu-coracao.php"><img class="recomImg" src="../Eu-e-Esse-Meu-Coracao/fotosLivro/Eu-e-Esse-Meu-Coracao-miniatura.jpg" alt="Recomendação do livro, eu e esse meu coração." width="160" height="160"></a>

    <a class="recom" href="../A-hipotesedoamor/a-hipotese-do-amor.php"><img class="recomImg" src="../A-hipotesedoamor/imgs/fotosLivro/A-hipotese-do-amor-miniatura.jpg" alt="Recomendação do livro, a hipótese do amor" width="160" height="160"></a>
  </section>

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
      <a href="https://www.facebook.com" target="_black"><img width="24" height="24" src="./configUsuario/footer/facebook.svg" alt="Link da rede social facebook"></a>
      <a href="https://twitter.com" target="_black"> <img width="24" height="24" src="./configUsuario/footer/twitter.svg" alt="Link da rede social twitter"></a>
      <a href="https://instagram.com" target="_black"><img width="24" height="24" src="./configUsuario/footer/instagran.svg" alt="Link da rede social instagran"></a>
      <a href="https://www.youtube.com/channel/UCCVlStjZTACMrlLlyAlrU1A" target="_black"><img width="24" height="24" src="./configUsuario/footer/youtube.svg" alt="Link da rede social youtube"></a>
      <a href="https://www.linkedin.com/in/jacksondouglasdesouza/" target="_black"><img width="24" height="24" src="./configUsuario/footer/linkedin.svg" alt="Link da rede social linkedin"></a>
    </div>
  </footer>
</body>

</html>