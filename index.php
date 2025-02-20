<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetEsfihas - As Melhores Esfihas</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <header>
        <div class="container">
            <img class="logo" src="images/logo.png" alt="Logo NetEsfihas">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="comprar.php">Cardápio</a></li>
                    <li><a href="./php/comprar.php" class="btn">Peça Já</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/banner1.png" alt="Banner 1"></div>
                    <div class="swiper-slide"><img src="images/banner2.png" alt="Banner 2"></div>
                    <div class="swiper-slide"><img src="images/banner3.png" alt="Banner 3"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="peca">
                <a href="comprar.php" class="btn">Veja o Cardápio</a>
            </div>
        </section>

        <section class="produtos">
            <div class="card">
                <img src="images/esfihadecarne.png" alt="Esfiha de Carne">
                <h3>Esfiha de Carne</h3>
                <p class="destaque">DESTAQUE</p>
                <p>R$4,99</p>
            </div>
            <div class="card">
                <img src="images/esfihadequeijo.png" alt="Esfiha de Queijo">
                <h3>Esfiha de Queijo</h3>
                <p class="destaque">DESTAQUE</p>
                <p>R$4,99</p>
            </div>
            <div class="card">
                <img src="images/fundo.png" alt="Esfiha de Frango">
                <h3>Esfiha de Frango</h3>
                <p class="destaque">DESTAQUE</p>
                <p>R$4,99</p>
            </div>
            <div class="card">
                <img src="images/esfihadoce.png" alt="Esfiha Doce">
                <h3>Esfiha Doce</h3>
                <p class="destaque">DESTAQUE</p>
                <p>R$4,99</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 NetEsfihas - Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script src="/js/script.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>
</html>
