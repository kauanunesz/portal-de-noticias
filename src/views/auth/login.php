<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="info">
            <div class="box">
                <div class="titulo">
                    <h1 class="news">News</h1>
                    <h1 class="wire">Wire</h1>
                </div>
                <p>Portal de notícias</p>
                <p>Acesse o painel para publicar e </p>
                <p>gerenciar as notícias do portal</p>
            </div>
        </div>
        <div class="linha-vertical"></div>
        <div class="form-box">
            <form action="index.php?pagina=login" method="post" class="card">
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email" placeholder="seuemail@gmail.com" required>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha" placeholder="Sua senha" required>
                <button type="submit">Entrar no Painel</button>
                <?php if (!empty($_SESSION['mensagem'])): ?>
                <p><?= htmlspecialchars($_SESSION['mensagem']) ?></p>
                <?php unset($_SESSION['mensagem']); ?>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>