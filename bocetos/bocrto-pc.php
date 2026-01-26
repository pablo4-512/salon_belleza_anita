<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Salón Anita</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body { margin: 0; font-family: Arial, sans-serif; }
    section { padding: 60px 10%; }
    .grid { display: flex; flex-wrap: wrap; gap: 20px; }
    .card { flex: 1 1 250px; border: 1px solid #ddd; padding: 20px; }
    .btn { display: inline-block; padding: 10px 20px; }
  </style>
</head>

<body>

<!-- HEADER -->
<header>
  <nav>
    <div>LOGO SALÓN ANITA</div>
    <ul>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#equipo">Equipo</a></li>
      <li><a href="#productos">Productos</a></li>
      <li><a href="#servicios">Servicios</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
  </nav>
</header>

<!-- INICIO -->
<section id="inicio">
  <h1>Belleza que realza tu estilo</h1>
  <p>Promociones activas y trabajos destacados</p>
  <a class="btn" href="https://wa.me/XXXXXXXXX">Reservar por WhatsApp</a>
</section>

<!-- PROMOCIONES -->
<section id="promociones">
  <h2>Promoción del Mes</h2>
  <p>Texto editable desde código</p>
</section>

<!-- EQUIPO -->
<section id="equipo">
  <h2>Nuestro Equipo</h2>
  <div class="grid">
    <div class="card">
      <h3>Nombre</h3>
      <p>Reseña corta</p>
    </div>
    <!-- Agregar o quitar cards sin romper diseño -->
  </div>
</section>

<!-- PRODUCTOS -->
<section id="productos">
  <h2>Productos</h2>
  <div class="grid">
    <div class="card">
      <p>Imagen</p>
      <p>Nombre producto</p>
      <p>Precio</p>
      <a class="btn" href="https://wa.me/XXXXXXXXX">Comprar</a>
    </div>
  </div>
</section>

<!-- SERVICIOS -->
<section id="servicios">
  <h2>Servicios y Precios</h2>
  <div class="grid">
    <div class="card">
      <p>Corte</p>
      <p>Precio según largo</p>
      <a class="btn" href="https://wa.me/XXXXXXXXX">Reservar</a>
    </div>
  </div>
</section>

<!-- TRABAJOS -->
<section id="trabajos">
  <h2>Trabajos Realizados</h2>
  <div class="grid">
    <div class="card">Antes / Después</div>
  </div>
</section>

<!-- SOBRE NOSOTROS -->
<section id="nosotros">
  <h2>Sobre Salón Anita</h2>
  <p>Texto institucional casi permanente</p>
</section>

<!-- CONTACTO -->
<section id="contacto">
  <h2>Contacto</h2>
  <p>Horarios</p>
  <p>Ubicación (Google Maps)</p>
</section>

<footer>
  <p>© Salón Anita</p>
</footer>

</body>
</html>
