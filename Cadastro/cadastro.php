<?php

    if(isset($_POST['submit']))
    {
        include_once('../Base/conexao.php');
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

         // Verificar se o email já existe no banco de dados
         $verificar_email = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE email = '$email'");
        
         if(mysqli_num_rows($verificar_email) > 0) {
             // O email já existe, redirecione para uma página de erro ou faça algo apropriado
             echo '<script>alert("E-mail já cadastrado. Tente outro.");</script>';

            } else {
                    
        $sql = mysqli_query($mysqli, "INSERT INTO usuarios(nome,email,senha)
        VALUES ('$nome', '$email', '$senha')");

        header("Location: ../index.php");
            }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- BootStrap - Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" href="cadastro.css">
    
    <title>Cadastro</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="../Imagens-não-oficiais/logo.png" type="image/x-icon">
</head>
<body>
<form novalidate action="cadastro.php" method="POST" onsubmit="return validarFormulario()">
    <div class="content">
        <section>
            <div class="Cadastro">
                <img src="../Imagens-não-oficiais/logo.png" alt="">
                <h2>Cadastro</h2>
                <br>
                <!-- NOME -->
                <div class="inputBox">
                    <input type="text" placeholder="Nome do Usuário" minlength="6" maxlength="18" name="nome" id="nome" required>
                    <p class="subtitulo">Entre 6 e 18 caracteres</p>
                </div>
                <!-- EMAIL -->
                <div class="inputBox">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <!-- CONFIMAR O EMAIL -->
                <div class="inputBox">
                    <input type="email" id="confirmarEmail" name="confirmarEmail" placeholder="Confirme o email" required>
                </div>
                <!-- SENHA -->
                <div class="inputBox" style="color: gray;">
                    <input id="senha" name="senha" type="password" placeholder="Senha" minlength="8" maxlength="20" required>
                    <span class="show-password olho1" onclick="mostrarSenha('senha')" required>
                        <i class="bi bi-eye-slash"></i>
                    </span>
                    <p class="subtitulo">Entre 8 e 20 caracteres</p>
                </div>
                <!-- CONFIRMAR SENHA -->
                <div class="inputBox" style="color: gray;">
                    <input id="confirmaSenha" name="confirmaSenha" type="password" placeholder="Confirme a senha"  minlength="8" maxlength="20" required>
                    <span class="show-password olho2" onclick="mostrarSenha('confirmaSenha')" required>
                        <i class="bi bi-eye-slash"></i>
                    </span>
                </div>
                <div class="inputBox">
                    <button type="submit" class="btn" name="submit">Enviar</button>
                </div>
                <div class="group">
                    <a href="../index.php">
                        Depois de enviar clique aqui!
                        <br>    
                        Já tenho uma conta!
                    </a>
                </div>
                <br>
            </div>
        </section>
    </div>
</form>

<!-- BootStrap - Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="cadastro.js"></script>

<script>
    function validarFormulario() {
        var nome = document.getElementById('nome').value;
        var email = document.getElementById('email').value;
        var confirmarEmail = document.getElementById('confirmarEmail').value;
        var senha = document.getElementById('senha').value;
        var confirmaSenha = document.getElementById('confirmaSenha').value;

        // Verifica se os campos obrigatórios foram preenchidos
        if (nome === '' || email === '' || senha === '' || confirmarEmail === '' || confirmaSenha === '') {
            alert("Preencha todos os campos obrigatórios.");
            return false;
        }

        // Verifica se os campos de confirmação são iguais
        if (email !== confirmarEmail || senha !== confirmaSenha) {
            alert("Os campos de confirmação de e-mail e senha devem ser iguais.");
            return false;
        }

        if (senha.length < 8 || senha.length > 20) {
            alert("A senha deve ter entre 8 e 20 caracteres.");
            return false;
        }

        return true;
    }
</script>
</body>
</html>