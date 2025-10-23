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

    <title>Cadastre-se aqui</title>
</head>
<body>
<main>
        <header>
            <h1>STUDIOFLIX</h1>
            <a href="index.html"><i class="fa-solid fa-home"></i></a>
        </header>

        <div class="central">
            <form action="">
                <h1>Crie sua conta no studioflix</h1>

                <div class="inputs">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                </div>

                <div class="inputs">
                    <label for="user">Nome de usuário</label>
                    <input type="text" name="user" id="user" placeholder="Digite seu nome de usuário">
                </div>

                <div class="inputs">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email">
                </div>
                
                <div class="inputs">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha">  
                </div>

                <div class="btn-login">
                    <a href="#">Cadastrar</a>
                </div>

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