<?php
session_start();
include "conexao.php";

$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['senha'])) {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $stmt = $conn->prepare("SELECT  nome, email, senha FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
                    $_SESSION['id']= $usuario['id'];
                    $_SESSION['nome']  = $usuario['nome'];
                    $_SESSION['email'] = $usuario['email'];

                    
                header("Location: filmes.php");
                exit;
            } else {
                $msg = "Senha incorreta!";
            }
        } else {
            $msg = "Usuário não encontrado!";
        }
    } else {
        $msg = "Preencha todos os campos!";
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

    <title>Faça o login</title>
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
            <form action="login.php" method="post">
                <h1>Faça seu login no studioflix</h1>

                <div class="inputs">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email">
                </div>

                <div class="inputs">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                </div>

                <button type="submit">Entrar</button>

                <?php if (!empty($msg)) echo "<p style='color:white; font-weight: bold; font-family: sans-serif;'> $msg </p>" ?>

                <h2>NÃO TEM UMA CONTA? <a href="cadastro.php">Cadastre-se aqui</a></h2>
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
<?php 

if ($_GET['msg']) {
    print_r("<script>alert('{$_GET['msg']}')</script>");
}
?>