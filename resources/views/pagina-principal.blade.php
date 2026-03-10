<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cursos Técnicos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="bg-light py-5 text-center">
  <div class="container">
    <h1 class="display-5">Conheça Nossos Cursos Técnicos</h1>
    <p class="lead">
      Formação de qualidade para preparar você para o mercado de trabalho.
    </p>
  </div>
</section>

<!-- CURSOS -->
<div class="container py-5">

  <div class="row g-4">

    <!-- Desenvolvimento de Sistemas -->
    <div class="col-md-4">
      <div class="card h-100 shadow">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top" alt="Programação">

        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>

          <p class="card-text">
            Aprenda a criar softwares, sites e aplicações utilizando linguagens
            modernas de programação, banco de dados e desenvolvimento web.
          </p>

          <ul>
            <li>Programação</li>
            <li>Banco de Dados</li>
            <li>Desenvolvimento Web</li>
          </ul>

          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Administração -->
    <div class="col-md-4">
      <div class="card h-100 shadow">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="card-img-top" alt="Administração">

        <div class="card-body">
          <h5 class="card-title">Administração</h5>

          <p class="card-text">
            Desenvolva habilidades de gestão, organização e planejamento
            estratégico para atuar em empresas e organizações.
          </p>

          <ul>
            <li>Gestão empresarial</li>
            <li>Finanças</li>
            <li>Empreendedorismo</li>
          </ul>

          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-4">
      <div class="card h-100 shadow">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top" alt="Meio Ambiente">

        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>

          <p class="card-text">
            Estude sustentabilidade, preservação ambiental e gestão de
            recursos naturais para contribuir com o futuro do planeta.
          </p>

          <ul>
            <li>Sustentabilidade</li>
            <li>Gestão ambiental</li>
            <li>Recursos naturais</li>
          </ul>

          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

  </div>

</div>

<!-- RODAPÉ -->
<footer class="bg-dark text-light text-center py-4">
  <p class="mb-0">© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>