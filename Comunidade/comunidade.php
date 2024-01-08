<?php

if(!isset($_SESSION)) {
  session_start();
}

// Verifica se o usuário não está logado
if (!isset($_SESSION['nome'])) {
    // Se não estiver logado, exibe uma mensagem e encerra o script
    include_once("../nao-logado/nao-logado.php");
    exit();
  }


include_once('../Base/conexao.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade</title>

    <!-- Link para o CSS/Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="shortcut icon" href="../Imagens-não-oficiais/logo.png" type="image/x-icon">

    <!-- Link para os icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <!-- Link para o header -->
    <link rel="stylesheet" href="../templates/header/header.css">

    <!-- Link para o footer -->
    <link rel="stylesheet" href="../templates/footer/footer.css">

    <!-- Link para o css -->
    <link rel="stylesheet" href="comunidade.css">

</head>
<body>
    <?php
      include_once("../templates/header/header.php");
    ?>

<a href="../Home/home-foda.php" class="voltar-home"><button type="button" class="btn btn-secondary">Voltar</button></a>

<br>
            <h1 class="text-center">COMUNIDADE</h1>

            <div class="d-flex justify-content-center botoes-comunidade">
                <a href="../Comentarios-pessoais/comentarios-pessoais.php" class="comentarios-pessoais-link">
                    <button class="btn btn-outline-warning">Meus comentários</button>
                </a>
                <button class="btn btn-outline-primary" id="CriarBTN">Criar comentário</button>
            </div>

            <br>

            <div class="container text-center ocultar-conteudo">
                <form action="criar-comentario.php" method="POST" class="mx-auto mt-5" style="max-width: 700px;">
                    <h3 class="mb-4">Digite seu comentário:</h3>
                    <div class="mb-3 d-flex justify-content-center">
                        <textarea class="form-control" name="comentario" id="comentario" rows="5" maxlength="255" placeholder="Digite seu comentário..." style="width: 100%;"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" id="CancelarBTN">Cancelar</button>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>




            <div class="d-flex justify-content-center">
                <h6 id="comentarios-postados">Comentários postados:</h6>
            </div>

            <?php 

                   // Consulta SQL para obter todos os comentários com conteúdo
                   $sqlComentarios = "SELECT comentario_id, comentario, usuario_nome, usuario_id, data_criacao FROM comentarios ORDER BY data_criacao DESC";
                   $resultadoComentarios = $mysqli->query($sqlComentarios);

                    // Verificar se há resultados
                    if ($resultadoComentarios->num_rows > 0) {
                        // Iterar sobre os resultados e exibir cada comentário
                        while ($row = $resultadoComentarios->fetch_assoc()) {
                            // Obter dados do banco de dados
                            $comentarioID = $row['comentario_id'];
                            $conteudoComentario = $row['comentario'];
                            $usuarioID = $row['usuario_id'];
                            $usuarioNome = $row['usuario_nome'];
                            $DataCriacao = $row['data_criacao'];

                            // Agora, faça uma nova consulta para obter a foto do usuário
                            $sqlUsuario = "SELECT foto FROM usuarios WHERE usuario_id = $usuarioID";
                            $resultadoUsuario = $mysqli->query($sqlUsuario);

                            // Verificar se há resultados para o usuário
                            if ($resultadoUsuario->num_rows > 0) {
                                $rowUsuario = $resultadoUsuario->fetch_assoc();
                                $usuarioFoto = $rowUsuario['foto'];

                                // Verificar se o usuário tem uma foto de perfil
                                if ($usuarioFoto) {
                                    $usuarioFotoBase64 = base64_encode($usuarioFoto);
                                } else {
                                    // Usar foto padrão se o usuário não tiver uma foto
                                    $fotoPadraoPath = '../Imagens-não-oficiais/foto-de-perfil-default.jpg';
                                    $usuarioFotoBase64 = base64_encode(file_get_contents($fotoPadraoPath));
                                }

                                // Exibir o template com os dados do comentário
                                echo '<div class="template row mt-3 p-3 rounded shadow">
                                        <div class="col-md-3 dados-do-comentario">
                                            <img src="data:image/jpeg;base64,' . $usuarioFotoBase64 . '" class="img-fluid rounded-circle foto-de-perfil" style="width: 130px; height: 130px; object-fit: cover;" alt="Foto de Perfil">
                                        </div>
                                        <div class="col-md-9 informacoes-template">
                                            <p class="fw-bold">' . $usuarioNome . '</p>
                                            <p class="mb-0">' . $conteudoComentario . '</p>
                                            <p class="data-criacao">Data e horário da postagem:</p>
                                            <p class="data-criacao">'. $DataCriacao .'</p>
                                        </div>
                                    </div>';
                            }
                        }
                    }

                 // Fechar a conexão com o banco de dados
                 $mysqli->close();
            ?>

            <?php
            include_once("../templates/footer/footer.php");
            ?>
            
<script src="comunidade.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>