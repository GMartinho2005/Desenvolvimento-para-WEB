<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recomendações - Letrário Coimbra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  
  <link rel="stylesheet" href="css/outraspag.css">
</head>
<body>  
 <?php 
  require('includes/headerlog.php');
  ?>  

<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">

            <div id="quiz-intro">
                <h1 class="display-4 fw-bold mb-3">Descubra o seu Próximo Livro</h1>
                <p class="lead mb-4">Não sabe o que ler? Responda a 4 perguntas rápidas e nós encontramos a recomendação perfeita para si.</p>
                <button class="btn btn-secondary btn-lg px-5" onclick="startQuiz()">Começar!</button>
            </div>

            <div id="quiz-q1" class="quiz-question d-none">
                <h2 class="mb-4">1. Que tipo de filme prefere ver numa sexta-feira à noite?</h2>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('fantasy')">Uma grande aventura épica com magia.</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('romance')">Uma história de amor comovente.</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('mystery')">Um mistério complexo, "quem matou?".</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('scifi')">Uma viagem ao futuro ou ao espaço.</button>
            </div>

            <div id="quiz-q2" class="quiz-question d-none">
                <h2 class="mb-4">2. Qual destes destinos de férias escolheria?</h2>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('scifi')">Uma cidade super-tecnológica, como Tóquio.</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('mystery')">Uma antiga mansão inglesa com uma história sombria.</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('fantasy')">Uma paisagem natural e selvagem, como a Islândia.</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('romance')">Um passeio romântico por Paris ou Veneza.</button>
            </div>
            
            <div id="quiz-q3" class="quiz-question d-none">
                <h2 class="mb-4">3. Qual destas palavras mais o atrai?</h2>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('mystery')">Segredo</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('romance')">Paixão</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('fantasy')">Magia</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('scifi')">Futuro</button>
            </div>
            
            <div id="quiz-q4" class="quiz-question d-none">
                <h2 class="mb-4">4. Que tipo de herói prefere?</h2>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('fantasy', true)">O "Escolhido" destinado a salvar o mundo.</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('scifi', true)">O cientista ou explorador corajoso.</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('romance', true)">A pessoa normal que se apaixona contra tudo e todos.</button>
                <button class="btn btn-white btn-lg w-100 mb-3" onclick="selectAnswer('mystery', true)">O detetive inteligente que vê o que ninguém vê.</button>
            </div>


            <div id="result-fantasy" class="quiz-result d-none">
                <h2 class="display-6 fw-bold">O seu género é FANTASIA!</h2>
                <p class="lead my-4">Adora mundos épicos, magia e grandes aventuras. A sua próxima leitura devia ser...</p>
                <div class="card book-card" style="width: 250px; margin: 0 auto;">
                    <img src="imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-semibold">O Nome do Vento</h6>
                        <p class="card-text text-muted small mb-2">Patrick Rothfuss</p>
                        <a href="livro1log.php" class="btn btn-outline-dark">Saber Mais</a>
                    </div>
                </div>
            </div>

            <div id="result-scifi" class="quiz-result d-none">
                <h2 class="display-6 fw-bold">O seu género é FICÇÃO CIENTÍFICA!</h2>
                <p class="lead my-4">Adora o futuro, tecnologia e explorar o desconhecido. A sua próxima leitura devia ser...</p>
                <div class="card book-card" style="width: 250px; margin: 0 auto;">
                    <img src="imgs/placeholder-scifi.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-semibold">Dune</h6>
                        <p class="card-text text-muted small mb-2">Frank Herbert</p>
                        <a href="#" cclass="btn btn-outline-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
            
            <div id="result-romance" class="quiz-result d-none">
                <h2 class="display-6 fw-bold">O seu género é ROMANCE!</h2>
                <p class="lead my-4">Adora histórias de paixão, emoções fortes e ligações humanas. A sua próxima leitura devia ser...</p>
                <div class="card book-card" style="width: 250px; margin: 0 auto;">
                    <img src="imgs/placeholder-romance.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-semibold">Orgulho e Preconceito</h6>
                        <p class="card-text text-muted small mb-2">Jane Austen</p>
                        <a href="#" class="btn btn-outline-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
            
            <div id="result-mystery" class="quiz-result d-none">
                <h2 class="display-6 fw-bold">O seu género é MISTÉRIO!</h2>
                <p class="lead my-4">Adora um bom segredo, resolver puzzles e reviravoltas. A sua próxima leitura devia ser...</p>
                <div class="card book-card" style="width: 250px; margin: 0 auto;">
                    <img src="imgs/placeholder-mystery.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-semibold">E Não Sobrou Nenhum</h6>
                        <p class="card-text text-muted small mb-2">Agatha Christie</p>
                        <a href="#" class="btn btn-outline-dark">Saber Mais</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
  require('includes/footer.php');
  ?>


<script>
    // 1. Variáveis para guardar os pontos e a pergunta atual
    let scores = {
        fantasy: 0,
        scifi: 0,
        romance: 0,
        mystery: 0
    };
    let currentQuestion = 0;

    // 2. Função para começar o Quiz
    function startQuiz() {
        document.getElementById('quiz-intro').classList.add('d-none');
        document.getElementById('quiz-q1').classList.remove('d-none');
        currentQuestion = 1;
    }

    // 3. Função chamada por CADA botão de resposta
    function selectAnswer(category, isLast = false) {
        // Adiciona um ponto à categoria escolhida
        scores[category]++;
        
        // Esconde a pergunta atual
        document.getElementById('quiz-q' + currentQuestion).classList.add('d-none');
        
        // 4. Verifica se é a última pergunta
        if (isLast) {
            // Se for a última, calcula o resultado
            calculateResult();
        } else {
            // Se não, avança para a próxima pergunta
            currentQuestion++;
            document.getElementById('quiz-q' + currentQuestion).classList.remove('d-none');
        }
    }

    // 5. Função para calcular e mostrar o resultado final
    function calculateResult() {
        let maxScore = -1;
        let bestCategory = '';

        // Loop para encontrar a categoria com mais pontos
        for (const category in scores) {
            if (scores[category] > maxScore) {
                maxScore = scores[category];
                bestCategory = category;
            }
        }
        
        // Mostra a div de resultado correspondente
        // ex: 'result-fantasy'
        document.getElementById('result-' + bestCategory).classList.remove('d-none');
    }
</script>
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