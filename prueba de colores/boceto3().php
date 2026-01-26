<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Salón Anita – Elegante</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{box-sizing:border-box;margin:0;padding:0;}

body{
  font-family:Arial,sans-serif;
  background:#FAFAFA;
  color:#2e2e2e;
}

header{
  background:#D99A8C;
}

header,section,footer{
  padding:60px 10%;
}

nav a{
  color:#fff;
  letter-spacing:1px;
}

section{
  border-bottom:1px solid #eee;
}

.flex-container{
  display:flex;
  gap:20px;
  flex-wrap:wrap;
}

.card{
  background:#fff;
  border-left:5px solid #C97C6D;
  padding:25px;
  flex:1 1 250px;
}

.btn{
  background:#C97C6D;
  color:#fff;
  padding:12px 18px;
  text-decoration:none;
}

.whatsapp{
  position:fixed;
  bottom:20px;
  right:20px;
  background:#C97C6D;
  color:#fff;
  padding:14px 18px;
  border-radius:0;
}

@media(max-width:600px){
  header,section,footer{padding:40px 20px;}
  .flex-container{flex-direction:column;}
}
</style>
</head>
<body>
<!-- HEADER -->
<header id="inicio">
  <nav>
    <div>LOGO SALÓN ANITA</div>
    <ul>
      <li><a href="#promos">Promos</a></li>
      <li><a href="#equipo">Equipo</a></li>
      <li><a href="#productos">Productos</a></li>
      <li><a href="#servicios">Servicios</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
  </nav>
</header>

<!-- PRESENTACION -->
<section>
  <h1>Belleza, cuidado y estilo</h1>
  <p>Introducción general del salón</p>
</section>

<!-- PROMOCIONES -->
<section id="promos">
  <h2>Promociones Activas</h2>
  <div class="flex-container">
    <div class="card">
      <p>Promo editable desde código</p>
      <a class="btn" href="https://wa.me/XXXXXXXXX">Reservar</a>
    </div>
  </div>
</section>

<!-- EQUIPO -->
<section id="equipo">
  <h2>Nuestro Equipo</h2>
  <div class="flex-container">
    <div class="card">
      <p>Nombre</p>
      <p>Reseña</p>
    </div>
    <!-- agregar o quitar cards sin romper maquetaciOn -->
  </div>
</section>

<!-- PRODUCTOS -->
<section id="productos">
  <h2>Productos</h2>
  <div class="flex-container">
    <div class="card">
      <p>Producto</p>
      <p>Precio</p>
      <a class="btn" href="https://wa.me/XXXXXXXXX">Comprar</a>
    </div>
  </div>
</section>

<!-- SERVICIOS -->
<section id="servicios">
  <h2>Servicios y Precios</h2>
  <div class="flex-container">
    <div class="card">
      <p>Servicio</p>
      <p>Precio según largo</p>
      <a class="btn" href="https://wa.me/XXXXXXXXX">Reservar</a>
    </div>
  </div>
</section>

<!-- TRABAJOS -->
<section>
  <h2>Trabajos Realizados</h2>
  <div class="flex-container">
    <div class="card">Antes / Después</div>
  </div>
</section>

<!-- SOBRE NOSOTROS -->
<section>
  <h2>Sobre Salón Anita</h2>
  <p>Texto institucional de larga duración</p>
</section>

<!-- CONTACTO -->
<section id="contacto">
  <h2>Contacto</h2>
  <p>Horarios</p>
  <p>Mapa Google</p>
</section>

<footer>
  <p>© SalOn Anita</p>
</footer>

<a class="whatsapp" href="https://wa.me/XXXXXXXXX">
  WhatsApp
</a>

</body>
</html>
