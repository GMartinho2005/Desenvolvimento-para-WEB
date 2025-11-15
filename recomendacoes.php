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
  require('includes/header.php');
  ?>  

<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card quiz-card shadow-lg border-0 rounded-4 overflow-hidden">
                
                <div class="progress d-none" id="quiz-progress" style="height: 6px; border-radius: 0;">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="card-body p-4 p-md-5 text-center">

                    <div id="quiz-intro" class="quiz-step">
                        <h1 class="display-5 fw-bold mb-3">Descubra o seu Próximo Livro</h1>
                        <p class="lead mb-5 text-muted">Não sabe o que ler a seguir? Responda a 4 perguntas rápidas e nós encontramos a recomendação perfeita.</p>
                        <button class="btn btn-dark btn-lg px-5 rounded-pill fw-bold" onclick="startQuiz()">Começar Quiz</button>
                    </div>

                    <div id="quiz-q1" class="quiz-step d-none">
                        <span class="badge bg-light text-dark border mb-3">Pergunta 1 de 4</span>
                        <h3 class="mb-4 fw-bold">Que tipo de filme prefere ver numa sexta-feira à noite?</h3>
                        <div class="d-grid gap-3 col-md-10 mx-auto">
                            <button class="btn btn-quiz-option" onclick="selectAnswer('fantasy')">Uma grande aventura épica com magia 🏰</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('romance')">Uma história de amor comovente ❤️</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('mystery')">Um mistério complexo, "quem matou?" 🔎</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('scifi')">Uma viagem ao futuro ou ao espaço 🚀</button>
                        </div>
                    </div>

                    <div id="quiz-q2" class="quiz-step d-none">
                        <span class="badge bg-light text-dark border mb-3">Pergunta 2 de 4</span>
                        <h3 class="mb-4 fw-bold">Qual destes destinos de férias escolheria?</h3>
                        <div class="d-grid gap-3 col-md-10 mx-auto">
                            <button class="btn btn-quiz-option" onclick="selectAnswer('scifi')">Uma cidade super-tecnológica, como Tóquio 🌃</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('mystery')">Uma mansão antiga com uma história sombria 🏚️</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('fantasy')">Uma paisagem natural e selvagem 🏔️</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('romance')">Um passeio romântico por Paris ou Veneza 🛶</button>
                        </div>
                        <div class="mt-4 text-start">
                            <button class="btn btn-link text-muted text-decoration-none px-0" onclick="prevQuestion()">
                                <i class="bi bi-arrow-left"></i> Voltar
                            </button>
                        </div>
                    </div>
                    
                    <div id="quiz-q3" class="quiz-step d-none">
                        <span class="badge bg-light text-dark border mb-3">Pergunta 3 de 4</span>
                        <h3 class="mb-4 fw-bold">Qual destas palavras mais o atrai?</h3>
                        <div class="d-grid gap-3 col-md-10 mx-auto">
                            <button class="btn btn-quiz-option" onclick="selectAnswer('mystery')">Segredo</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('romance')">Paixão</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('fantasy')">Magia</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('scifi')">Futuro</button>
                        </div>
                        <div class="mt-4 text-start">
                            <button class="btn btn-link text-muted text-decoration-none px-0" onclick="prevQuestion()">
                                <i class="bi bi-arrow-left"></i> Voltar
                            </button>
                        </div>
                    </div>
                    
                    <div id="quiz-q4" class="quiz-step d-none">
                        <span class="badge bg-light text-dark border mb-3">Pergunta 4 de 4</span>
                        <h3 class="mb-4 fw-bold">Que tipo de herói prefere?</h3>
                        <div class="d-grid gap-3 col-md-10 mx-auto">
                            <button class="btn btn-quiz-option" onclick="selectAnswer('fantasy', true)">O "Escolhido" destinado a salvar o mundo.</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('scifi', true)">O cientista ou explorador corajoso.</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('romance', true)">A pessoa comum que luta pelo amor.</button>
                            <button class="btn btn-quiz-option" onclick="selectAnswer('mystery', true)">O detetive que vê o que ninguém vê.</button>
                        </div>
                        <div class="mt-4 text-start">
                            <button class="btn btn-link text-muted text-decoration-none px-0" onclick="prevQuestion()">
                                <i class="bi bi-arrow-left"></i> Voltar
                            </button>
                        </div>
                    </div>

                    <div id="result-fantasy" class="quiz-step d-none">
                        <div class="text-center mb-4">
                            <i class="bi bi-stars text-warning display-1"></i>
                        </div>
                        <h2 class="fw-bold">FANTASIA</h2>
                        <p class="lead mb-4">Adora mundos épicos e magia. A nossa sugestão:</p>
                        
                        <div class="card mb-4 border-0 shadow-sm bg-light overflow-hidden mx-auto" style="max-width: 400px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="imgs/b1bd2a5bad30e595246e62ba2f3a3117.webp" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="...">
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold">O Nome do Vento</h5>
                                        <p class="card-text small text-muted">Patrick Rothfuss</p>
                                        <a href="livro1.php" class="btn btn-dark btn-sm stretched-link">Ler Sinopse</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-link text-muted text-decoration-none" onclick="restartQuiz()">Recomeçar Quiz ↺</button>
                    </div>

                    <div id="result-scifi" class="quiz-step d-none">
                        <div class="text-center mb-4">
                            <i class="bi bi-rocket-takeoff text-primary display-1"></i>
                        </div>
                        <h2 class="fw-bold">FICÇÃO CIENTÍFICA</h2>
                        <p class="lead mb-4">O futuro e o desconhecido fascinam-no. A nossa sugestão:</p>
                        
                        <div class="card mb-4 border-0 shadow-sm bg-light overflow-hidden mx-auto" style="max-width: 400px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="https://placehold.co/200x300/000/FFF?text=Dune" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="...">
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold">Dune</h5>
                                        <p class="card-text small text-muted">Frank Herbert</p>
                                        <a href="#" class="btn btn-dark btn-sm stretched-link">Ler Sinopse</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-link text-muted text-decoration-none" onclick="restartQuiz()">Recomeçar Quiz ↺</button>
                    </div>
                    
                    <div id="result-romance" class="quiz-step d-none">
                        <div class="text-center mb-4">
                            <i class="bi bi-heart-fill text-danger display-1"></i>
                        </div>
                        <h2 class="fw-bold">ROMANCE</h2>
                        <p class="lead mb-4">Procura emoções fortes e ligações humanas. A nossa sugestão:</p>
                         <div class="card mb-4 border-0 shadow-sm bg-light overflow-hidden mx-auto" style="max-width: 400px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="https://placehold.co/200x300/pink/white?text=Orgulho" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="...">
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold">Orgulho e Preconceito</h5>
                                        <p class="card-text small text-muted">Jane Austen</p>
                                        <a href="#" class="btn btn-dark btn-sm stretched-link">Ler Sinopse</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-link text-muted text-decoration-none" onclick="restartQuiz()">Recomeçar Quiz ↺</button>
                    </div>
                    
                    <div id="result-mystery" class="quiz-step d-none">
                         <div class="text-center mb-4">
                            <i class="bi bi-search text-dark display-1"></i>
                        </div>
                        <h2 class="fw-bold">MISTÉRIO</h2>
                        <p class="lead mb-4">Gosta de desvendar segredos e puzzles. A nossa sugestão:</p>
                         <div class="card mb-4 border-0 shadow-sm bg-light overflow-hidden mx-auto" style="max-width: 400px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="https://placehold.co/200x300/333/FFF?text=Crime" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="...">
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold">E Não Sobrou Nenhum</h5>
                                        <p class="card-text small text-muted">Agatha Christie</p>
                                        <a href="#" class="btn btn-dark btn-sm stretched-link">Ler Sinopse</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-link text-muted text-decoration-none" onclick="restartQuiz()">Recomeçar Quiz ↺</button>
                    </div>

                </div>
            </div> </div>
    </div>
</div>

<?php 
  require('includes/footer.php');
  ?>

<script>
    // 1. Configuração
    // Agora guardamos as respostas (ex: {1: 'fantasy', 2: 'scifi'})
    let userAnswers = {}; 
    let currentQuestion = 0;
    const totalQuestions = 4;

    // 2. Começar
    function startQuiz() {
        changeStep('quiz-intro', 'quiz-q1');
        currentQuestion = 1;
        // Mostrar barra de progresso
        document.getElementById('quiz-progress').classList.remove('d-none');
        updateProgressBar();
    }

    // 3. Selecionar Resposta
    function selectAnswer(category, isLast = false) {
        // Guarda a resposta para a pergunta atual
        userAnswers[currentQuestion] = category;
        
        if (isLast) {
            calculateResult();
        } else {
            const nextQ = currentQuestion + 1;
            changeStep('quiz-q' + currentQuestion, 'quiz-q' + nextQ);
            currentQuestion++;
            updateProgressBar();
        }
    }

    // 4. Voltar Atrás (NOVA FUNÇÃO)
    function prevQuestion() {
        if (currentQuestion > 1) {
            const prevQ = currentQuestion - 1;
            changeStep('quiz-q' + currentQuestion, 'quiz-q' + prevQ);
            currentQuestion--;
            updateProgressBar();
        }
    }

    // Função auxiliar para animação de troca
    function changeStep(hideId, showId) {
        const hideEl = document.getElementById(hideId);
        const showEl = document.getElementById(showId);
        
        hideEl.classList.remove('fade-in');
        hideEl.classList.add('fade-out');

        setTimeout(() => {
            hideEl.classList.add('d-none');
            hideEl.classList.remove('fade-out');
            
            showEl.classList.remove('d-none');
            showEl.classList.add('fade-in');
        }, 300); // Tempo deve bater certo com o CSS
    }

    // 5. Atualizar Barra de Progresso
    function updateProgressBar() {
        // (currentQuestion - 1) para começar em 0% na Q1
        const percentage = ((currentQuestion - 1) / totalQuestions) * 100;
        document.querySelector('.progress-bar').style.width = percentage + '%';
    }

    // 6. Calcular Resultado
    function calculateResult() {
        document.getElementById('quiz-progress').classList.add('d-none');
        
        // Reinicia contagem
        let scores = { fantasy: 0, scifi: 0, romance: 0, mystery: 0 };

        // Soma os pontos baseados nas respostas guardadas
        for (let q in userAnswers) {
            let cat = userAnswers[q];
            if (scores[cat] !== undefined) {
                scores[cat]++;
            }
        }
        
        // Encontra vencedor
        let maxScore = -1;
        let bestCategory = '';

        for (const category in scores) {
            if (scores[category] > maxScore) {
                maxScore = scores[category];
                bestCategory = category;
            }
        }
        
        // Animação final
        const lastQDiv = document.getElementById('quiz-q' + totalQuestions);
        lastQDiv.classList.remove('fade-in');
        lastQDiv.classList.add('fade-out');
        
        setTimeout(() => {
            lastQDiv.classList.add('d-none');
            lastQDiv.classList.remove('fade-out');
            
            const resultDiv = document.getElementById('result-' + bestCategory);
            resultDiv.classList.remove('d-none');
            resultDiv.classList.add('fade-in');
        }, 300);
    }

    // 7. Recomeçar
    function restartQuiz() {
        userAnswers = {};
        currentQuestion = 0;
        
        // Esconder todos os resultados
        const allSteps = document.querySelectorAll('.quiz-step');
        allSteps.forEach(el => {
            el.classList.add('d-none');
            el.classList.remove('fade-in', 'fade-out');
        });

        // Mostrar intro
        const intro = document.getElementById('quiz-intro');
        intro.classList.remove('d-none');
        intro.classList.add('fade-in');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('searchInput');
  const searchSuggestions = document.getElementById('searchSuggestions');
  const searchForm = document.getElementById('searchForm');

  if (searchInput && searchSuggestions && searchForm) {
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
      const seeAll = document.querySelector('.see-all-link');
      if(seeAll) {
          seeAll.addEventListener('click', function(e) {
            e.preventDefault();
            searchForm.submit();
          });
      }
  }
});
</script>

</body>
</html>