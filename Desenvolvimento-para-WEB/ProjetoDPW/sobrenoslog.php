<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Letrário Coimbra</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/outraspag.css"> 

</head>
<body>
   <?php 
  require('includes/headerlog.php');
  ?>
    <main>
        
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="imgs/a-photorealistic-image-of-a-modern-spaci_wn3zUQyCR5ym1SAb-JxuSA_GX0pJWXJTeS8riZ-XK3kIw.jpeg"
                         class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-3 text-nowrap">A nossa missão</h1>
                    <p class="lead text-muted mb-4">
                        O "Letrário Coimbra" é mais do que um site; é uma biblioteca digital de acesso livre
                        nascida da paixão pela literatura e pela partilha de conhecimento.
                    </p>
                    <p>
                        A nossa missão é simples: democratizar o acesso à cultura. Acreditamos que
                        todos devem ter a oportunidade de descobrir novas histórias, aprender e
                        viajar através das palavras, independentemente de barreiras geográficas ou financeiras.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-light py-5">
            <div class="container">
                <div class="row text-center mb-4">
                    <div class="col-12">
                        <h2 class="fw-bold">Os Nossos Valores</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 text-center">
                        <i class="bi bi-book-half fs-1"></i>
                        <h4 class="fw-semibold my-3">Acesso Livre</h4>
                        <p class="text-muted">Todos os livros no nosso acervo são de acesso gratuito. Sem custos, sem subscrições.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="bi bi-compass-fill fs-1"></i>
                        <h4 class="fw-semibold my-3">Facilitar a Descoberta</h4>
                        <p class="text-muted">Acreditamos que encontrar o livro certo deve ser fácil. A nossa plataforma é desenhada para o ajudar a descobrir novos autores e géneros de forma intuitiva.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="bi bi-people-fill fs-1"></i>
                        <h4 class="fw-semibold my-3">Comunidade</h4>
                        <p class="text-muted">Este é um espaço construído para leitores. Valorizamos a sua curadoria, sugestões e participação.</p>
                    </div>
                </div>
            </div>
        </div>

       <div class="container my-5 py-5">
    
    <div class="row text-center mb-5">
        <div class="col-12">
            <h2 class="fw-bold">Quem Somos</h2>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <p class="lead mb-4">
                O Letrário Coimbra é, acima de tudo, um projeto de paixão. Eu sou Guilherme Martinho, o fundador.
            </p>
            
            <p class="fs-5 mb-4">
                Como estudante de Informática de Gestão e um leitor ávido, senti a necessidade de criar um espaço digital que fosse, ao mesmo tempo, rico em literatura de língua portuguesa e totalmente gratuito.
            </p>
            
            <p class="fs-5">
                Trato pessoalmente da gestão das coleções e da manutenção da plataforma, para lhe garantir que a sua experiência de leitura é o mais simples e agradável possível.
            </p>
        </div>
    </div>

</div>

        <div class="container-fluid bg-secondary text-white">
            <div class="container text-center py-5">
                <h2 class="display-5 fw-bold mb-3">Junte-se à nossa comunidade</h2>
                <p class="lead mb-4">
                    O seu próximo livro favorito está à sua espera. Comece a explorar o nosso acervo agora.
                </p>
                <a href="estantelog.php" class="btn btn-light btn-lg fw-bold px-4">
                    Explorar a Estante
                </a>
            </div>
        </div>

    </main>

<?php 
  require('includes/footer.php');
  ?>

<script>
// SISTEMA DE SUGESTÕES - SEM ALTERAR COMPORTAMENTO DA BARRA
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('searchInput');
  const searchSuggestions = document.getElementById('searchSuggestions');
  const searchForm = document.getElementById('searchForm');

  // Mostrar sugestões apenas quando há texto
  searchInput.addEventListener('input', function() {
    if (this.value.length > 0) {
      searchSuggestions.classList.add('show');
    } else {
      searchSuggestions.classList.remove('show');
    }
  });

  // Mostrar sugestões também quando clicar (se já tiver texto)
  searchInput.addEventListener('focus', function() {
    if (this.value.length > 0) {
      searchSuggestions.classList.add('show');
    }
  });

  // Ocultar sugestões quando clicar fora
  document.addEventListener('click', function(e) {
    if (!searchForm.contains(e.target)) {
      searchSuggestions.classList.remove('show');
    }
  });

  // Clicar numa sugestão preenche o input
  document.querySelectorAll('.suggestion-item').forEach(item => {
    item.addEventListener('click', function() {
      const title = this.querySelector('.suggestion-title').textContent;
      searchInput.value = title;
      searchSuggestions.classList.remove('show');
      searchInput.focus(); // Mantém o foco no input
    });
  });

  // Tecla ESC fecha sugestões
  searchInput.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      searchSuggestions.classList.remove('show');
      searchInput.blur(); // Remove o foco
    }
  });

  // Clicar em "Ver todos" submete o form
  document.querySelector('.see-all-link').addEventListener('click', function(e) {
    e.preventDefault();
    searchForm.submit();
  });
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>