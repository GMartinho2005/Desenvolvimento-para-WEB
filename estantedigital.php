<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estante Digital - Letrário Coimbra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  
  <link rel="stylesheet" href="css/outraspag.css">
</head>
<body>

<?php 
require('includes/header.php');
?>

    <!-- Conteúdo Principal -->
    <div class="container my-5">

        <!-- Título da Página -->
        <div class="pb-3 mb-4 border-bottom">
            <h1 class="h2 fw-bold">Estante Digital</h1>
            <p class="text-muted">Explore todas as nossas categorias.</p>
        </div>

        <div class="row g-4">

            <!-- Categoria 1: Romance -->
            <div class="col-6 col-md-4 col-lg-2">
                <!-- Cada cartão é um link para a página dessa categoria -->
                <a href="Romance.php" class="card text-white category-card shadow-sm text-decoration-none">
                    <!-- Imagem de Placeholder (substitui pela tua) -->
                    <img src="imgs/Gemini_Generated_Image_odhu84odhu84odhu.png" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Romance</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 2: Ficção Científica -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="Ficcao.php" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="imgs/Gemini_Generated_Image_20ytyy20ytyy20yt.png" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Ficção Científica</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 3: Fantasia -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="Fantasia.php" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="imgs/Gemini_Generated_Image_ck9jvlck9jvlck9j.png" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Fantasia</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 4: Mistério -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="Policial.php" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="imgs/Gemini_Generated_Image_vsuyyqvsuyyqvsuy.png" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Policial</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 5: Humor -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="Humor.php" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="imgs/Gemini_Generated_Image_v5xbkwv5xbkwv5xb.png" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Humor</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 6: Biografia -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="Biografia.php" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="imgs/Gemini_Generated_Image_b3yz4hb3yz4hb3yz.png" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Biografia</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 7: História -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="Historia.php" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="imgs/Gemini_Generated_Image_psqrh3psqrh3psqr.png" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">História</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 8: Conto -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="Conto.php" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="imgs/Gemini_Generated_Image_ljahy6ljahy6ljah.png" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Conto</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 9: Poesia -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="Poesia.php" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="imgs/Gemini_Generated_Image_x7tuekx7tuekx7tu.png" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Poesia</h5>
                    </div>
                </a>
            </div>
        </div> 
    </div>
<?php 
require('includes/footer.php'); 
?>

    <!-- Scripts JS (Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>