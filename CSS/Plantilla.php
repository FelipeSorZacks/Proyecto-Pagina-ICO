<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($title) ? htmlspecialchars($title) : "FES Aragon"; ?></title>
  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    /* Colores de la UNAM */
    .nav-wrapper, .page-footer {
      background-color: #003366; /* Azul oscuro de la UNAM */
    }
    .brand-logo, .nav-wrapper a, .footer-content, .footer-links h5, .footer-links a {
      color: #FFD700 !important; /* Color dorado */
    }

    /* Asegurar que el footer esté en la parte inferior */
    body, html {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      margin: 0;
    }
    main {
      flex: 1 0 auto;
    }
    .footer-content {
      color: #FFD700 !important; /* Texto dorado */
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">FES Aragon</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="http://localhost/Proyecto%20Web1/Proyecto-Pagina-ICO/index.php">Inicio</a></li>
          <li><a href="#">Registro</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <!-- Insert content here -->
      <?php if (isset($content)) echo $content; ?>
    </div>
  </main>

  <footer class="page-footer">
    <div class="container footer-content">
      <div class="row">
        <div class="col l6 s12">
          <h5>Informacion de Contacto</h5>
          <p class="grey-text text-lighten-4">Alumno: Felipe Soriano Z.</p> 
          <p class="grey-text text-lighten-4">FES ARAGON</p>
      </div>
    </div>
  </footer>

  <!-- Materialize JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems, {});
    });
  </script>
</body>
</html>