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

    <link rel="stylesheet" href="styles/postagem.css">

    <title>Nova Postagem - Studioflix</title>
</head>
<body>
    <header>
        <h1>STUDIOFLIX</h1>
        <i class="fa-solid fa-bars"></i>
    </header>

    <main>
        <div class="central">
                <form action="">
                    <h1>Faça sua postagem no StudioFlix</h1>

                    <div class="inputs">
                        <label for="filme">Filme</label>
                        <input type="text" name="filme" id="filme" placeholder="Qual será o filme?">
                    </div>
                    
                    <div class="inputs">
                        <label for="comentario">Comentário</label>
                        <input type="text" name="comentario" id="comentario" placeholder="Faça seu comentário">  
                    </div>

                    <button type="submit">Postar</button>

                    <a class="lista" href="filmes.php">Veja aqui os filmes do Studioflix</a>
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