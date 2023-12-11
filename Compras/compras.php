<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>

      <!-- Link para o CSS/Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Link para os icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Link para o CSS -->
    <link rel="stylesheet" href="compras.css">

     <!-- Link para o header -->
     <link rel="stylesheet" href="../templates/header.css">

    <!-- Link para o footer -->
    <link rel="stylesheet" href="../templates/footer.css">

</head>
<body>
    <?php
      include_once("../templates/header.php");
    ?>

<div class="container">
        <!-- Produto -->
        <a href="../Home/home-foda.php"<button type="button" class="btn btn-secondary">Voltar</button></a>
        <div class="row mt-3 mainEsquerda">
            <div class="col-md-6">
                <section class="encimaEsquerda">
                    <!-- <img src="Imagens-não-oficiais/camisa2.png" alt="camiseta1" class="img-fluid">
                    <img src="Imagens-não-oficiais/costas.png" alt="camisa2" class="img-fluid mt-2"> -->
                    <ul class="imagemMenor">
                        <li><a href="#"><img src="../Imagens-não-oficiais/camisa2.png" alt="produto" width="70px" height="70px" id="imgMenor1"></a></li>
                        <li><a href="#"><img src="../Imagens-não-oficiais/costas.png" alt="produto" width="70px" height="70px" id="imgMenor2"></a></li>
                        <li><a href="#"><img src="../Imagens-não-oficiais/camisa1.png" alt="produto" width="70px" height="70px" id="imgMenor3"></a></li>
                </ul>
                <div class="imagemPrincipal">
                    <img src="../Imagens-não-oficiais/camisa1.png" alt="produto" width="430px" class="img-fluid" height="430px" id="imgMaior">
                </div>
                </section>
            </div>
            <div class="col-md-6">
                <div class="letra">
                    <h1>Camiseta Feminina Chapolin</h1>
                    <button class="btn btn-warning">Pré-Lançamento</button>
                    <p class="valor"> De: R$79,90</p>
                    <h3 class="valor2">R$49,90</h3>
                </div>
                <div class="escolha mt-3">
                    <input type="number" id="quantity" name="quality" min="1" max="10" class="form-control" style="width: 150px;">
                </div>
                <div class="tamanhos mt-3">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">PP</button>
                        <button type="button" class="btn btn-primary">P</button>
                        <button type="button" class="btn btn-primary">M</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">G</button>
                        <button type="button" class="btn btn-primary">GG</button>
                        <button type="button" class="btn btn-primary">2GG</button>
                    </div>
                </div>
                <button class="btn btn-success mt-3 Comprar" disabled>COMPRAR</button>
                <br>
                <button class="btn btn-secondary mt-3">Adicionar no carrinho<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg></button>
            </div>
        </div>

        <!-- DESCRIÇÃO DA BLUSA -->
        <h1 class="descricao">Descrição</h1>
        <div class="descricao mt-4">
            <p class="text-justify"> A camiseta do Chapolin Colorado é uma peça icônica que homenageia um dos personagens mais queridos da televisão latino-americana. 
        Conhecido por suas trapalhadas, frases engraçadas e seu famoso bordão "Não contavam com a minha astúcia!", 
        o Chapolin Colorado é um herói atrapalhado que conquistou o coração de milhões de fãs.
        <br>
        <br>
        <b>Conforto Inigualável:</b>
            Fabricada com materiais de alta qualidade, 
            nossa camiseta proporciona o máximo conforto durante todo o dia. 
            O tecido macio e respirável garante uma sensação agradável na pele, 
            enquanto a modelagem cuidadosamente pensada oferece um caimento perfeito.
        <br>
        <br>
        <b>Estilo Versátil:</b>
            A camiseta geralmente apresenta uma estampa vibrante e colorida, com a imagem do Chapolin em destaque. 
            O vermelho característico de seu uniforme, as antenas amarelas em sua cabeça e o coração amarelo no peito são 
            elementos marcantes que não podem faltar na representação do personagem.
            Além disso, a expressão facial peculiar e o inseparável martelo vermelho que ele carrega são detalhes que c
            ontribuem para a identificação imediata.
        </p>
        </div>

        <!-- Avaliações -->
        <div class="mt-4">
            <h3 class="avaliacoes">Avaliações</h3>
            <div class="fabricio row mt-3">
                <div class="col-md-3">
                    <img src="../Imagens-não-oficiais/fabricio.png" alt="" class="img-fluid img-fabricio" height="100px" width="200px">
                </div>
                <div class="col-md-9 informacoes-fabricio">
                    <p>Fabricio Augusto</p>
                    <p>⭐⭐⭐⭐⭐</p>
                    <p>A Camiseta Exclusiva Colorado superou todas as expectativas! A qualidade do material é excepcional, proporcionando um conforto notável. O design impressionante, fiel ao personagem. Uma compra que vale cada centavo!</p>
                </div>
            </div>
            <div class="ana row mt-3">
                <div class="col-md-3">
                    <img src="../Imagens-não-oficiais/bruna.png" alt="" class="img-fluid img-ana" width="200px" height="100px">
                </div>
                <div class="col-md-9 informacoes-ana">
                    <p>Ana Benta</p>
                    <p>⭐⭐⭐⭐⭐</p>
                    <p>A Camiseta Exclusiva do Chapolim superou todas as expectativas! A qualidade do material é excepcional, proporcionando um conforto notável. O design impressionante, fiel ao personagem. Uma compra que vale cada centavo!</p>
                </div>
            </div>
        </div>
    </div>

<?php
  include_once("../templates/footer.php");
?>

<script src="compras.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>