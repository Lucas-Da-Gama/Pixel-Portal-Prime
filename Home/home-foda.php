<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Link para o CSS/Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Link para os icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Link para o CSS -->
    <link rel="stylesheet" href="home-foda.css">
</head>
<body>
    <header class="container-fluid">
        <div class="row head">
            <div class="col-md-3 logo">
                <img src="../Imagens-não-oficiais/loguinho.png" alt="logo" width="200px">
            </div>
            <div class="col-md-6 interacoes1">
                <input class="form-control barra-de-pesquisa" type="text" placeholder="O que você procura?">
            </div>
            <div class="col-md-3 interacoes2">
                <button href="..." class="btn btn-light carrinho"><img src="../Imagens-não-oficiais/cart.svg" alt="" height="45px" width="50px"></button>
                <button href="..." class="btn btn-light perfil"><img src="../Imagens-não-oficiais/person.svg" alt="" height="45px" width="50px"></button>  
            </div>
        </div>
    </header>

     <!-- Carrossel -->

     <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="../Imagens-não-oficiais/image.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="../Imagens-não-oficiais/a bridal shower (1).png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="../Imagens-não-oficiais/promoção3.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>

      <!-- ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; -->

      <h1 class="titulo">NOVIDADES DO MÊS DE DEZEMBRO!</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4 items-novidades">
        <div class="col">
          <div class="card">
            <img src="../Imagens-não-oficiais/chapolim.png" class="card-img-top" id="chapolim" alt="camisa-chapolin" height="350px" width="200px" onmouseover="changeChapolim()" onmouseout="restoreChapolim()">
            <div class="card-body">
              <h5 class="card-title">CAMISETA ART HISTORY</h5>
              <p class="card-text">R$ 69,90</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../Imagens-não-oficiais/camisa-dc.png" class="card-img-top" id="camisa-dc" alt="camisa-dc" height="350px" width="200px" onmouseover="changeDC()" onmouseout="restoreDC()">
            <div class="card-body">
              <h5 class="card-title">CAMISETA TOLKIEN</h5>
              <p class="card-text">R$ 69,90</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../Imagens-não-oficiais/marvel.png" class="card-img-top" id="camisa-marvel" alt="camisa-marvel" height="350px" width="200px" onmouseover="changeMarvel()" onmouseout="restoreMarvel()">
            <div class="card-body">
              <h5 class="card-title">CAMISETA PARANOID ANDROID</h5>
              <p class="card-text">R$ 69,90</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../Imagens-não-oficiais/starwars.png" class="card-img-top" id="camisa-star-wars" alt="Star Wars" height="350px" width="200px" onmouseover="changeStarWars()" onmouseout="restoreStarWars()">
            <div class="card-body">
              <h5 class="card-title">CAMISETA FOLLOW YOUR</h5>
              <p class="card-text">R$ 69,90</p>
            </div>
          </div>
        </div>
      </div>

      <H1 class="titulo">TEMAS</H1>

      <div class="row row-cols-1 row-cols-md-4 g-4 imagens-marcas">
        <div class="col">
          <a href="#" class="text-decoration-none">
          <div class="card h-100 border-0">
            <img src="../Imagens-não-oficiais/harry-potter.jpeg" class="card-img-top rounded-circle" alt="..." style="width: 230px; height: 230px; object-fit: cover;">
          </div>
        </a>
        </div>
        <div class="col">
          <a href="#" class="text-decoration-none">
          <div class="card h-100 border-0">
            <img src="../Imagens-não-oficiais/marvel.jpg" class="card-img-top rounded-circle" alt="..." style="width: 230px; height: 230px; object-fit: cover;">
          </div>
        </a>
        </div>
        <div class="col">
          <a href="#" class="text-decoration-none">
          <div class="card h-100 border-0">
            <img src="../Imagens-não-oficiais/disney.png" class="card-img-top rounded-circle" alt="..." style="width: 230px; height: 230px; object-fit: cover;">
          </div>
        </a>
        </div>
        <div class="col">
          <a href="#" class="text-decoration-none">
          <div class="card h-100 border-0">
            <img src="../Imagens-não-oficiais/dc.png" class="card-img-top rounded-circle" alt="..." style="width: 240px; height: 240px; object-fit: cover;">
          </div>
        </a>
        </div>
      </div>


      <footer>

        <div class="esquerda-footer">
            <nav>
                <ul>
                    <li><a href="#">Sobre nós</a></li>
                    <li><a href="#">Empresa</a></li>
                    <li><a href="#">Serviços Online</a></li>
                    <li><a href="#">Suporte</a></li>
                </ul>
            </nav>

            <div class="escrita-footer">
                <p>Política de privacidade | Termos legais | Acordo de subscrição | Reembolsos | Cookies</p>
                <p>@2023 Pixel Portal. Todos os direitos reservados, Todas as marcas comerciais são propriedades dos respectivos proprietários do Brasil.</p>
            </div>
        </div>

        <div class="direita-footer">
            <nav>
                <ul class="redes-sociais">
                    <div class="links-social">
                        <img src="../Imagens-não-oficiais/Twitter logo.png" alt="twitter" class="logo-social">
                        <li><a href="https://twitter.com/home" class="twitter">Pixel Portal</a></li>
                    </div>

                    <div class="links-social">
                        <img src="../Imagens-não-oficiais/Facebook logo.png" alt="facebook" class="logo-social">
                        <li><a href="https://www.facebook.com" class="face">Pixel Portal</a></li>
                    </div>

                    <div class="links-social">
                        <img src="../Imagens-não-oficiais/Instagram logo.png" alt="instagram" class="logo-social">
                        <li><a href="https://www.instagram.com" class="insta">Pixel Portal</a></li>
                    </div>
                </ul>
            </nav>
        </div>
    </footer>
  

</body>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>

      // TRANSIÇÃO CHAPOLIM
      function changeChapolim() {
          // document.getElementById("chapolim").src = "../Imagens-não-oficiais/chapolim-estampa.png";
          var cardImage = document.getElementById("chapolim");
        cardImage.style.opacity = 0.5;
        setTimeout(function() {
            cardImage.src = "../Imagens-não-oficiais/chapolim-estampa.png";
            cardImage.style.opacity = 1;
        }, 300); // Aguarde 300 milissegundos (duração da transição) antes de alterar a imagem
      }
  
      function restoreChapolim() {
          // document.getElementById("chapolim").src = "../Imagens-não-oficiais/chapolim.png";
          var cardImage = document.getElementById("chapolim");
        cardImage.style.opacity = 0.5;
        setTimeout(function() {
            cardImage.src = "../Imagens-não-oficiais/chapolim.png";
            cardImage.style.opacity = 1;
        }, 300);
      }
      // ________________________________________________________________________________

      // TRANSIÇÃO DC
      function changeDC() {
          // document.getElementById("chapolim").src = "../Imagens-não-oficiais/chapolim-estampa.png";
          var cardImage = document.getElementById("camisa-dc");
        cardImage.style.opacity = 0.5;
        setTimeout(function() {
            cardImage.src = "../Imagens-não-oficiais/dc-estampa.png";
            cardImage.style.opacity = 1;
        }, 300); // Aguarde 300 milissegundos (duração da transição) antes de alterar a imagem
      }
  
      function restoreDC() {
          // document.getElementById("chapolim").src = "../Imagens-não-oficiais/chapolim.png";
          var cardImage = document.getElementById("camisa-dc");
        cardImage.style.opacity = 0.5;
        setTimeout(function() {
            cardImage.src = "../Imagens-não-oficiais/camisa-dc.png";
            cardImage.style.opacity = 1;
        }, 300);
      }
      // _________________________________________________________________________

      // TRANSIÇÃO MARVEL
      function changeMarvel() {
          // document.getElementById("chapolim").src = "../Imagens-não-oficiais/chapolim-estampa.png";
          var cardImage = document.getElementById("camisa-marvel");
        cardImage.style.opacity = 0.5;
        setTimeout(function() {
            cardImage.src = "../Imagens-não-oficiais/marvel-estampa.png";
            cardImage.style.opacity = 1;
        }, 300); // Aguarde 300 milissegundos (duração da transição) antes de alterar a imagem
      }
  
      function restoreMarvel() {
          // document.getElementById("chapolim").src = "../Imagens-não-oficiais/chapolim.png";
          var cardImage = document.getElementById("camisa-marvel");
        cardImage.style.opacity = 0.5;
        setTimeout(function() {
            cardImage.src = "../Imagens-não-oficiais/marvel.png";
            cardImage.style.opacity = 1;
        }, 300);
      }
      // _________________________________________________________________________

      // TRANSIÇÃO STAR WARS
      function changeStarWars() {
          // document.getElementById("chapolim").src = "../Imagens-não-oficiais/chapolim-estampa.png";
          var cardImage = document.getElementById("camisa-star-wars");
        cardImage.style.opacity = 0.5;
        setTimeout(function() {
            cardImage.src = "../Imagens-não-oficiais/star-wars-estampa.png";
            cardImage.style.opacity = 1;
        }, 300); // Aguarde 300 milissegundos (duração da transição) antes de alterar a imagem
      }
  
      function restoreStarWars() {
          // document.getElementById("chapolim").src = "../Imagens-não-oficiais/chapolim.png";
          var cardImage = document.getElementById("camisa-star-wars");
        cardImage.style.opacity = 0.5;
        setTimeout(function() {
            cardImage.src = "../Imagens-não-oficiais/starwars.png";
            cardImage.style.opacity = 1;
        }, 300);
      }
      // _________________________________________________________________________
  </script>

</html>