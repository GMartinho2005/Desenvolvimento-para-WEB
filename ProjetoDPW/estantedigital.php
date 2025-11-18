<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estante Digital - Letrário Coimbra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  
  <link rel="stylesheet" href="css/home.css">
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

        <!-- Grelha de Categorias (baseada no teu esboço) -->
        <div class="row g-4">

            <!-- Categoria 1: Romance -->
            <div class="col-6 col-md-4 col-lg-2">
                <!-- Cada cartão é um link para a página dessa categoria -->
                <a href="categoria.php?nome=romance" class="card text-white category-card shadow-sm text-decoration-none">
                    <!-- Imagem de Placeholder (substitui pela tua) -->
                    <img src="https://placehold.co/400x500/A52A2A/FFFFFF?text=Romance" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Romance</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 2: Ficção Científica -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="categoria.php?nome=ficcao" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="https://placehold.co/400x500/4682B4/FFFFFF?text=Ficção" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Ficção Científica</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 3: Fantasia -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="categoria.php?nome=fantasia" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="https://placehold.co/400x500/6A5ACD/FFFFFF?text=Fantasia" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Fantasia</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 4: Mistério -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="categoria.php?nome=misterio" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="https://placehold.co/400x500/2F4F4F/FFFFFF?text=Mistério" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Mistério</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 5: Terror -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="categoria.php?nome=terror" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="https://placehold.co/400x500/000000/FFFFFF?text=Terror" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Terror</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 6: Biografia -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="categoria.php?nome=biografia" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="https://placehold.co/400x500/8B4513/FFFFFF?text=Biografia" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">Biografia</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 7: História -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="categoria.php?nome=historia" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="https://placehold.co/400x500/D2B48C/FFFFFF?text=História" class="card-img">
                    <div class="category-title-box">
                        <h5 class="card-title mb-0 fw-bold">História</h5>
                    </div>
                </a>
            </div>

            <!-- Categoria 8: Poesia -->
            <div class="col-6 col-md-4 col-lg-2">
                <a href="categoria.php?nome=poesia" class="card text-white category-card shadow-sm text-decoration-none">
                    <img src="https://placehold.co/400x500/556B2F/FFFFFF?text=Poesia" class="card-img">
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