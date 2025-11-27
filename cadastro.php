<?php   

include "conexao.php";
    
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if (!empty($_POST['nome']) && !empty($_POST['nome_usuario']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

        $nome = $_POST ['nome'];
        $nome_usuario = $_POST ['nome_usuario'];
        $email = $_POST ['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO usuarios(nome, nome_usuario, email, senha) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $nome_usuario, $email, $senha);
    
        if ($stmt->execute()) {
    
            $msg = "Olá $nome_usuario, seu cadastro foi realizado com sucesso!!";
            header("Location: login.php?msg=" .urlencode($msg));
            exit;
    
        } else {
            print_r("<script>alert('Erro ao cadastrar usuário!')</script>");
        }
    } else {
        print_r("<script>alert('Por favor preencha todos os campos!')</script>");
    }

}   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/login.css">

    <link rel="shortcut icon" href="assets/studioflix.ico" type="image/x-icon">

    <title>Cadastre-se aqui</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="studioflix">
                <img src="assets/logo-studioflix.png" alt="Logo StudioFlix">
                <h1>Studioflix</h1>
            </div>

            <ul class="nav-list">
                <li class="link-hover"><a href="index.php" class="home"><i class="fa-solid fa-home"></i> </a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="central">
            <form action="cadastro.php" method="post"> 
                <h1>Crie sua conta no studioflix</h1>

                <div class="inputs">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                </div>

                <div class="inputs">
                    <label for="user">Nome de usuário</label>
                    <input type="text" name="nome_usuario" id="user" placeholder="Digite seu nome de usuário">
                </div>

                <div class="inputs">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email">
                </div>
                
                <div class="inputs">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha">  
                </div>

                <button type="submit">Cadastrar</button>

                <h2>Já TEM UMA CONTA? <a href="login.php">Entre aqui</a></h2>
            </form>
        </div>
    </main>

    <footer>
        <div class="container-footer">
            <div class="footer-content">
                <div class="footer-info">
                    <h1>Sua rede social cinéfila!</h1>
                    <p>Pronto para mergulhar na melhor comunidade de filmes? Comece agora mesmo.</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Abner Ferreira, Kauã Henrique, Pedro Paulo e Raquel Menezes.</p>
                <p>Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

</body>
</html>