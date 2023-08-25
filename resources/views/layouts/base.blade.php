<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Naypagman</title>
  <link rel="stylesheet" href="assets/styles.css">
  <link rel="stylesheet" href="assets/default.css">
  <link rel="stylesheet" href="assets/component.css">
  <link rel="stylesheet" href="assets/slaider.css">
  <link rel="stylesheet" href="assets/normalize.css">
  <link rel="stylesheet" href="assets/contact.css">



</head>
<body>

<div class="navbar">
  <div class="navbar-logo">
    <a href="#"><img src="img/NAYPAQMANlogo.png" alt="Logo"></a>
  </div>
  <div class="navbar-menu-container">
    <div class="navbar-menu">
      <a href="#">Inicio</a>
      <a href="#">Servicios</a>
      <a href="#">Proyectos</a>
      <a href="#">Nosotros</a>
      <a href="/contact">Contacto</a>
    </div>
  </div>
</div>
<script src="js/styles.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/classie.js"></script>
<script src="js/tiltSlider.js"></script>


@yield('content')

<footer>
  <div class="footer-content">
    <div class="column">
      <div class="info-section">
        <p>Horarios:</p>
        <p>Lunes a Viernes: 9 AM - 6 PM</p>
        <p>Sábado: 10 AM - 2 PM</p>
        <p>Ubicación:</p>
        <p>Centro Poblado Uyurpampa</p>
        <p>Sucursal:</p>
        <p>Ferreñafe</p>
      </div>


    </div>
    <div class="column">
      <img src="logo.png" alt="Logo de la Empresa">
    </div>
    <div class="column">
      <ul class="menu">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </div>
  </div>
  <div class="rights">
    <p>© 2023 Nombre de la Empresa. Todos los derechos reservados.</p>
  </div>
</footer>


</body>
</html>


