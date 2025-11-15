<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Letrário Coimbra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  
  <link rel="stylesheet" href="css/home.css">
</head>
<body>

    <?php 
    // --- 1. HEADER ---
    require('includes/headerlog.php');
    ?>

    <!-- 2. HERO BANNER -->
    <div class="hero-banner position-relative">
      <img width="100%" src="imgs/banner-panoramico-de-uma-biblioteca-mode_Opw2jWGISU6kp7XTbTct_A_YGX156qTQP2Rz6lQtWRABg.jpeg" class="hero-img">
      <div class="hero-content text-white">
        <h1 class="fw-bold display-5">Descobre novas leituras, vive novas histórias!</h1>
        <a href="estantedigital.php" class="btn btn-white btn-lg mt-3">Explorar →</a>
      </div>
    </div>

    <?php 
    // --- 3. SECÇÃO: Melhor Avaliados ---
    // Agora, em vez de HTML, apenas definimos os dados
    $row_title = "Melhor Avaliados";
    $row_link = "melhoravaliadoslog.php";
    $books = [
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "O Nome do Vento", "author" => "Patrick Rothfuss", "link" => "livro1log.php"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "1984", "author" => "George Orwell", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "A Sombra do Vento", "author" => "Carlos Ruiz Zafón", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "O Pequeno Príncipe", "author" => "Antoine de Saint", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Harry Potter", "author" => "J.K. Rowling", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "O Hobbit", "author" => "J.R.R. Tolkien", "link" => "#"]
    ];

    include ('includes/book_row.php'); 
    ?>

    <?php 
    // --- 4. SECÇÃO: NOVIDADES ---
    $row_title = "Novidades a Não Perder";
    $row_link = "novidadeslog.php";
    $books = [
        // Adiciona aqui os 6 livros de novidades
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Novidade 1", "author" => "Autor 1", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Novidade 2", "author" => "Autor 2", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Novidade 3", "author" => "Autor 3", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Novidade 4", "author" => "Autor 4", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Novidade 5", "author" => "Autor 5", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Novidade 6", "author" => "Autor 6", "link" => "#"]
    ];

    include ('includes/book_row.php'); 
    ?>

    <!-- 5. CAROUSEL -->
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <img src="imgs/a-detailed-photograph-of-hands-carefully_uuXj8pvVQky38FItKQ3L0g_zfg-ecp4S3aNDWmMpiWbyg.jpeg" class="carousel-img d-block mx-auto" alt="...">
            <div class="carousel-text">
            <h3>Para Quem...</h3>
            <p>Gosta de Literatura Financeira</p>
            <a href="literatura-financeira.php" class="btn btn-light btn-carousel">Ver</a>
            </div>
        </div>
        <div class="carousel-item">
          <img src="imgs/a-warm-cinematic-photograph-of-weathered_KZWDuYg5SuOiq4z52l4tiQ_kiSEf0_HQTOWaHDJq9L7Vg.jpeg" class="carousel-img d-block mx-auto" alt="...">
          <div class="carousel-text">
            <h3>Para Quem...</h3>
            <p>Gosta de Literatura Clássica</p>
            <a href="literatura-classica.php" class="btn btn-light btn-carousel">Ver</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="imgs/a-cinematic-photograph-of-a-musician-s-h_zibuE9WbR4Gt3TSSTtkTcw_qoWLAJcMSm-u6O_NzNI8GA.jpeg" class="carousel-img d-block mx-auto" alt="...">
          <div class="carousel-text">
            <h3>Para Quem...</h3>
            <p>É amante de música</p>
            <a href="literatura-musical.php" class="btn btn-light btn-carousel">Ver</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>

    <?php 
    // --- 6. SECÇÃO: HALLOWEEN ---
    $row_title = "Especiais de Halloween";
    $row_link = "halloween.php";
    $books = [
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Drácula", "author" => "Bram Stoker", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Frankenstein", "author" => "Mary Shelley", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "O Chamado de Cthulhu", "author" => "H.P. Lovecraft", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "It", "author" => "Stephen King", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "A Maldição de Hill House", "author" => "Shirley Jackson", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "O Exorcista", "author" => "William Peter Blatty", "link" => "#"]
    ];

    include ('includes/book_row.php'); 
    ?>

    <?php 
    // --- 7. SECÇÃO: RECOMENDAÇÕES ---
    // Repara como $row_link = false esconde o "Ver +"
    $row_title = "As Recomendações da Semana";
    $row_link = false; 
    $books = [
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "A Biblioteca da Meia-Noite", "author" => "Matt Haig", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Cem Anos de Solidão", "author" => "Gabriel García Márquez", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "O Deus das Pequenas Coisas", "author" => "Arundhati Roy", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Ensaio sobre a Cegueira", "author" => "José Saramago", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "A Insustentável Leveza do Ser", "author" => "Milan Kundera", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Sapiens", "author" => "Yuval Noah Harari", "link" => "#"]
    ];

    include ('includes/book_row.php'); 
    ?>

    <!-- 8. LIVRO EM FOCO -->
    <div class="container my-5 py-md-5">
      <div class="row align-items-center">
          <div class="col-md-4 order-md-2 ms-5">
              <a href="#"> <img src="imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp" class="img-fluid rounded-3 shadow-sm"> </a>
            </div>
          
          <div class="col-md-7 order-md-1">
              <h1 class="display-6 fw-bold mb-3 ms-5">O Livro em Foco</h1>
              <p class="lead ms-5">Todas as semanas destacamos um livro especial que é o nosso Livro em Foco.</p>
              
              <p class="ms-5">Esta semana, o destaque vai para 
                  <a href="#" class="link-danger fw-bold">O Homem das Castanhas</a>, do autor Søren Sveistrup.
              </p>
          </div>
      </div>
    </div>

    <?php 
    // --- 9. SECÇÃO: MAIS NOVOS ---
    $row_title = "Novidades para os Mais Novos";
    $row_link = "maisnovos.php";
    $books = [
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Onde Vivem os Monstros", "author" => "Maurice Sendak", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "Uma Lagarta Muito Comilona", "author" => "Eric Carle", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "O Grufalão", "author" => "Julia Donaldson", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "A Ovelhinha que Veio para Jantar", "author" => "Steve Smallman", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "O Monstro das Cores", "author" => "Anna Llenas", "link" => "#"],
        ["img" => "imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp", "title" => "O Diário de um Banana", "author" => "Jeff Kinney", "link" => "#"]
    ];

    include ('includes/book_row.php'); 
    ?>

    <!-- 10. FAQ -->
    <div class="container my-5" style="max-width: 800px;">
        <h2 class="text-uppercase fw-bold mb-4">Perguntas Frequentes</h2>
        <div class="accordion accordion-flush" id="faqAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        COMO FAÇO O REGISTO?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        O registo é efetuado através do ícone de utilizador (ou perfil) localizado no canto superior direito da sua página. Ao clicar, será redirecionado para a área de autenticação.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        POSSO LER NO MEU TABLET/TELEFONE?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sim, pode ler diretamente no seu telemóvel através do nosso website ou descarregando o pdf.
                    </div>
                </div>
            </div>
           
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        PRECISO DE ESTAR LIGADO À INTERNET PARA LER?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        A leitura no nosso website é online e requer internet. No entanto, se descarregar o ficheiro PDF do livro, poderá lê-lo no seu dispositivo (tablet ou telemóvel) sem precisar de ligação à internet.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    require('includes/footerlog.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const searchSuggestions = document.getElementById('searchSuggestions');
      const searchForm = document.getElementById('searchForm');

      searchInput.addEventListener('input', function() {
        if (this.value.length > 0) {
          searchSuggestions.classList.add('show');
        } else {
          searchSuggestions.classList.remove('show');
        }
      });

      searchInput.addEventListener('focus', function() {
        if (this.value.length > 0) {
          searchSuggestions.classList.add('show');
        }
      });

      document.addEventListener('click', function(e) {
        if (!searchForm.contains(e.target)) {
          searchSuggestions.classList.remove('show');
        }
      });

      document.querySelectorAll('.suggestion-item').forEach(item => {
        item.addEventListener('click', function() {
          const title = this.querySelector('.suggestion-title').textContent;
          searchInput.value = title;
          searchSuggestions.classList.remove('show');
          searchInput.focus();
        });
      });


      searchInput.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
          searchSuggestions.classList.remove('show');
          searchInput.blur();
        }
      });

      document.querySelector('.see-all-link').addEventListener('click', function(e) {
        e.preventDefault();
        searchForm.submit();
      });
    });
    </script>
</body>
</html>