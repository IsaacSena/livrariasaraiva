<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Verifique se o caminho está correto -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Livraria</title>
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

    <!--fim da navbar-->

    <!-- Carrossel de banners -->
    <div class="carousel-container">
        <div class="carousel">
            <img src="https://leitura.com.br/image/cache/catalog/Mar%C3%A7o-2025-1920x300-A-1920x300.jpg" alt="Banner 1" class="carousel-image">
            <img src="https://leitura.com.br/image/cache/catalog/1920x300%20Faro-1920x300.jpg" alt="Banner 2" class="carousel-image">
            <img src="https://leitura.com.br/image/cache/catalog/Banner-Leitura_Uma-vida-bela-1920x300.jpg" alt="Banner 3" class="carousel-image">
        </div>
    </div>

    <!-- Carrossel -->
    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.carousel-image');
        const carousel = document.querySelector('.carousel');

        function changeBanner() {
            // Atualiza o índice da imagem atual
            currentIndex = (currentIndex + 1) % images.length;
            
            // Move o carrossel para a posição da imagem atual
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
        
        // Muda a imagem a cada 10 segundos (10000 milissegundos)
        setInterval(changeBanner, 10000);

        // Inicializa o carrossel (primeira imagem é visível)
        changeBanner();
    </script>
    <!--fim do carrossel-->

    <!--novos produtos-->
    <div class="container mt-5">
        <div class="row">
            <!-- Novos Produtos -->
            <div class="col-md-3">
                <div class="Main p-3 shadow-sm rounded border">
                    <h4 class="fw-bold border-bottom pb-2">Novos Produtos</h4>
                    <div class="mb-3 d-flex align-items-center border-bottom pb-2">
                        <img src="https://m.media-amazon.com/images/I/81h4CdNxdgL._SY385_.jpg" width="50" height="75" class="me-2">
                        <div>
                            <p class="mb-1 fw-bold">O PRÍNCIPE</p>
                            <p class="text-muted mb-0">R$ 50,00</p>
                        </div>
                    </div>
                    <div class="mb-3 d-flex align-items-center border-bottom pb-2">
                        <img src="https://m.media-amazon.com/images/I/51vXa1V2pbL._AC_UY218_.jpg" width="50" height="75" class="me-2">
                        <div>
                            <p class="mb-1 fw-bold">ELANTRIS</p>
                            <p class="text-muted mb-0">R$ 100,00</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="https://m.media-amazon.com/images/I/91jny5rWgES._AC_UY218_.jpg" width="50" height="75" class="me-2">
                        <div>
                            <p class="mb-1 fw-bold">O HOBBIT</p>
                            <p class="text-muted mb-0">R$ 25,00</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Os Mais Vendidos -->

            

</body>
</html>
