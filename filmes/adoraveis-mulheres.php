<?php
include "../conexao.php";
session_start();

if (isset($_POST['comentario']) && $_POST['comentario'] !== "") {
    $comentario = $conn->real_escape_string($_POST['comentario']);
    $id_filme = 30;

    $query = "INSERT INTO comentarios (id_filmes, comentario) VALUES ($id_filme, '$comentario')";
    if ($conn->query($query)) {
        header("Location: adoraveis-mulheres.php?msg=enviado");
        exit();
    } else {
        echo "Erro ao enviar comentário.";
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <link rel="stylesheet" href="../styles/filme.css">

    <link rel="shortcut icon" href="assets/studioflix.ico" type="image/x-icon">

    <title>Adoráveis Mulheres</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="studioflix">
                <img src="../assets/logo-studioflix.png" alt="Logo StudioFlix">
                <h1>Studioflix</h1>
            </div>

            <button class="hamburguer"></button>

            <ul class="nav-list">
                <li class="link-hover"><a href="../filmes.php" class="login"></i>Filmes</a></li>
                <li class="link-hover"><a href="../logout.php" class="login"><i class="fa-solid fa-user"></i>Fazer Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="filme">
            <img class="banner" src="../assets/banner-adoraveis-mulheres.jpg" alt="Adoráveis Mulheres">
            <img class="poster" src="../assets/poster-adoraveis-mulheres.jpg" alt="Adoráveis Mulheres">
            <div class="descricao-filme">
                <h2>Adoráveis Mulheres (2019)</h2>
                <p class="genero"><b>Gênero:</b> Drama / Romance</p>
                <p>As irmãs March enfrentam desafios de amadurecimento, sonhos e desigualdades sociais durante o século XIX. A história celebra afeto, feminilidade e escolhas pessoais.</p>
            </div>
            <form action="" method="post">
                <input type="text" name="comentario" id="comentario" placeholder="Comente sobre o filme">
                <button type="submit">Enviar</button>
            </form>

            <div class="lista-comentarios">
                <?php
                $lista = $conn->query("SELECT id, comentario, data_hora FROM comentarios WHERE id_filmes = 30 ORDER BY id DESC");

                if ($lista->num_rows > 0) {
                    while ($c = $lista->fetch_assoc()) {
                        echo "
                            <div class='card-comentario'>
                                <p><b>Usuário Studioflix</b> <small>({$c['data_hora']})</small></p>
                                <p>💬 {$c['comentario']}</p>
                                <form action='../excluir_comentario.php' method='POST' style='display:inline;'>
                                    <input type='hidden' name='id' value='" . $c['id'] . "'>
                                    <button type='submit' class='excluir'>Excluir comentário</button>
                                </form>
                            </div>
                        ";
                    }
                } else {
                    echo "<p>Seja o primeiro a comentar!</p>";
                }
                ?>
            </div>

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

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="../scripts/header.js"></script>
    <script>
        const params = new URLSearchParams(window.location.search);

        if (params.get("msg") === "excluido") {
            Toastify({
                text: "Comentário excluído",
                duration: 5000,
                close: true,
                gravity: "bottom",
                position: "left",
                stopOnFocus: true,
                style: { background: "#ef4444" },
            }).showToast();
        }

        if (params.get("msg") === "enviado") {
            Toastify({
                text: "Comentário enviado com sucesso!",
                duration: 5000,
                close: true,
                gravity: "bottom",
                position: "left",
                stopOnFocus: true,
                style: { background: "#22c55e" },
            }).showToast();
        }

        const newUrl = window.location.pathname;
        window.history.replaceState({}, "", newUrl);

    </script>
</body>
</html>