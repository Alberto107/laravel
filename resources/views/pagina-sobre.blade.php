<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sobre - Portal de Cursos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('principal') }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- CABEÇALHO -->
<section class="bg-light py-5 text-center">
  <div class="container">
    <h1 class="display-5">Sobre Nossa Instituição</h1>
    <p class="lead">
      Formando profissionais qualificados para o mercado de trabalho.
    </p>
  </div>
</section>

<!-- HISTÓRIA -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6">
        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="img-fluid rounded shadow">
      </div>

      <div class="col-md-6">
        <h2>Nossa História</h2>
        <p>
          O Portal de Cursos foi criado com o objetivo de oferecer formação técnica
          de qualidade para jovens e adultos que desejam ingressar no mercado de
          trabalho ou aprimorar suas habilidades profissionais.
        </p>

        <p>
          Ao longo dos anos, a instituição se destacou por oferecer cursos
          atualizados, professores qualificados e uma estrutura moderna
          voltada para o aprendizado prático.
        </p>

        <p>
          Hoje contamos com cursos nas áreas de tecnologia, gestão e meio
          ambiente, preparando nossos alunos para os desafios do futuro.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- MISSÃO VISÃO VALORES -->
<section class="bg-light py-5">
  <div class="container text-center">

    <h2 class="mb-4">Missão, Visão e Valores</h2>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <div class="card-body">
            <h5 class="card-title">Missão</h5>
            <p class="card-text">
              Oferecer educação de qualidade que prepare os alunos para o
              mercado de trabalho e para o desenvolvimento da sociedade.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <div class="card-body">
            <h5 class="card-title">Visão</h5>
            <p class="card-text">
              Ser referência em formação técnica e profissional,
              contribuindo para a inovação e crescimento da comunidade.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow">
          <div class="card-body">
            <h5 class="card-title">Valores</h5>
            <p class="card-text">
              Ética, responsabilidade social, inovação, sustentabilidade
              e compromisso com a educação.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- EQUIPE -->
<section class="py-5">
  <div class="container text-center">

    <h2 class="mb-5">Nossa Equipe</h2>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="card shadow">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Carlos Silva</h5>
            <p class="card-text">Coordenador de Tecnologia</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Mariana Souza</h5>
            <p class="card-text">Coordenadora de Administração</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow">
          <img src="https://randomuser.me/api/portraits/men/65.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Roberto Lima</h5>
            <p class="card-text">Coordenador Ambiental</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- RODAPÉ -->
<footer class="bg-dark text-light text-center py-4">
  <p class="mb-0">© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>