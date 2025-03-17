<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Verifique se o caminho está correto -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Registrar-se</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white py-3 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="main.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Saraiva_logo.svg/2560px-Saraiva_logo.svg.png" alt="Logo" style="width: 250px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Livros.php">Livros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SobreNos.php">Sobre-nós</a>
                </li>
            </ul>
            <form class="d-flex ms-0" role="search">
                <input class="form-control me-1" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="width: 400px;">
                <button class="btn btn-outline-success ms-0" type="submit">Pesquisar</button>
                <button class="btn btn-outline-primary ms-3" type="button" onclick="window.location.href='TelaLogin.php'">Login</button>
                <button class="btn btn-outline-secondary ms-2" type="button" onclick="window.location.href='TelaRegistrarse.php'">Criar Conta</button>
            </form>
        </div>
    </div>
</nav>

    <!-- Fim da navbar -->

    <!-- Formulário de Registro -->
    <div class="login-container">
        <h2>Criar Conta</h2>
        <form>
            <label for="name">Nome completo:</label>
            <input type="text" id="name" name="name" placeholder="Digite seu nome completo" required>

            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" placeholder="Digite seu endereço" required>

            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone" placeholder="Digite seu telefone" required>

            <label for="dob">Data de Nascimento:</label>
            <input type="text" id="data" name="dataNascimento" placeholder="Digite sua data de nascimento" required>

            <label for="login">Login:</label>
            <input type="text" id="login" name="login" placeholder="Digite seu login" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required>

            <button type="submit" class="login-btn">Registrar</button>

            <div class="create-account">
                <p>Já tem uma conta? <a href="TelaLogin.php">Faça login</a></p>
            </div>
        </form>
    </div>

</body>
</html>
