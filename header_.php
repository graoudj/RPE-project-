<!doctype html>
<html lang="fr" class="h-100" data-bs-theme="auto">
  <head>
    <!-- [Contenu existant du head] -->
  </head>
  <body class="d-flex flex-column h-100">
    <!-- SVG icons and other content remain unchanged -->

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="images/tree-576847.svg" alt="Logo RPE" height="40">
          RPE Bilboquet
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php echo !empty($index) ? "active" : "" ?>" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo !empty($utilisateurs) ? "active" : "" ?>" href="utilisateurs.php">Connexion</a>
            </li>
            <!-- Autres éléments de menu ici -->
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Content Wrapper -->
    <main role="main" class="flex-shrink-0 mt-5 pt-4">
      <div class="container mt-5">
        <!-- Contenu de la page ici -->
      </div>
    </main>

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+GErPo4gyfGo5oaT7LvwwmN5VvQF6" crossorigin="anonymous"></script>
    <script>
      // Ensure that the content is pushed down when the navbar expands
      document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.querySelector('.navbar');
        const mainContent = document.querySelector('main');

        function adjustPadding() {
          const navbarHeight = navbar.offsetHeight;
          mainContent.style.paddingTop = `${navbarHeight + 10}px`; // Ajouter 10px pour plus d'espace
        }

        // Ajuste le padding au chargement de la page
        adjustPadding();

        // Réajuste le padding si la fenêtre est redimensionnée (utile pour la réactivité)
        window.addEventListener('resize', adjustPadding);
      });
    </script>
  </body>
</html>

