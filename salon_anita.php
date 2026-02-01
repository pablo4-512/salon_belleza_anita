<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon de Belleza - Resalta tu Belleza</title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="estilos/carrusel-img.css">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
        :root {
            --color-primario: #d4a5c3;
            --color-secundario: #f8e0e9;
            --color-oscuro: #8a5a7a;
            --color-claro: #fff9fb;
            --color-texto: #333333;
            --color-accento: #c97ba5;
            --color-whatsapp: #25D366;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            color: var(--color-texto);
            background-color: var(--color-claro);
            line-height: 1.6;
        }
        
        /* Botón de WhatsApp fijo */
        .whatsapp-fijo {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--color-whatsapp);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
            text-decoration: none;
        }
        
        .whatsapp-fijo:hover {
            background-color: #128C7E;
            transform: scale(1.1);
        }
        
        /* Header y Navegacion */
        .header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .contenedor {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .nav-contenedor {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
        }
        
        .logo-area {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo-img {
            height: 100px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }
        
        .logo-texto {
            font-size: 20px;
            font-weight: bold;
            color: var(--color-oscuro);
        }
        
        .logo-texto span {
            color: var(--color-accento);
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-item {
            margin-left: 30px;
        }
        
        .nav-link {
            text-decoration: none;
            color: var(--color-texto);
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-link:hover {
            color: var(--color-accento);
        }
        
        .menu-hamburguesa {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--color-oscuro);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(to right, var(--color-secundario), var(--color-claro));
            padding: 150px 0 100px;
            margin-top: 70px;
            text-align: center;
        }
        
        .hero-titulo {
            font-size: 3rem;
            color: var(--color-oscuro);
            margin-bottom: 20px;
        }
        
        .hero-subtitulo {
            font-size: 1.8rem;
            color: var(--color-accento);
            margin-bottom: 30px;
        }
        
        .btn-hero {
            background-color: var(--color-accento);
            color: white;
            padding: 15px 40px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            display: inline-block;
            transition: background-color 0.3s, transform 0.3s;
        }
        
        .btn-hero:hover {
            background-color: var(--color-oscuro);
            transform: translateY(-3px);
        }
        
        /* Servicios Section */
        .seccion {
            padding: 80px 0;
        }
        
        .seccion-titulo {
            text-align: center;
            font-size: 2.5rem;
            color: var(--color-oscuro);
            margin-bottom: 20px;
        }
        
        .seccion-subtitulo {
            text-align: center;
            font-size: 1.2rem;
            color: var(--color-oscuro);
            margin-bottom: 50px;
        }
        
        .servicios-contenedor {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .servicio-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
            text-align: center;
            padding: 30px 20px;
        }
        
        .servicio-card:hover {
            transform: translateY(-10px);
        }
        
        .servicio-icono {
            font-size: 50px;
            color: var(--color-accento);
            margin-bottom: 20px;
        }
        
        .servicio-titulo {
            font-size: 1.5rem;
            color: var(--color-oscuro);
            margin-bottom: 15px;
        }
        
        .servicio-descripcion {
            color: var(--color-texto);
            margin-bottom: 20px;
        }
        
/* Galeria de Servicios (ahora seccionada) */
        /* Estilos antiguos para la galería estática eliminados. Usa .servicios-tabs y .servicios-content para la versión seccionada. */

        /* ======== Galeria de Servicios - Seccionada ======== */
        .servicios-tabs {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .servicio-tab {
            background: transparent;
            border: 2px solid var(--color-accento);
            color: var(--color-oscuro);
            padding: 8px 14px;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.15s ease;
            text-transform: none;
        }

        .servicio-tab.active {
            background: var(--color-accento);
            color: #fff;
            box-shadow: 0 8px 22px rgba(0,0,0,0.08);
            transform: translateY(-3px);
        }

        .servicios-content {
            margin-top: 18px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .servicio-panel {
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.4s ease;
            border-radius: 8px;
        }

        .servicio-panel.open {
            padding: 12px;
            border: 1px solid rgba(0,0,0,0.06);
        }

        .servicio-photos {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .servicio-photo img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
            max-height: 360px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }

        @media (max-width: 768px) {
            .servicio-photo img { max-height: 280px; }
            .servicio-tab { padding: 7px 12px; }
        }

        @media (max-width: 480px) {
            .servicio-photo img { max-height: 220px; }
            .servicio-photos { gap: 10px; }
        }

        /* Galeria de Estilo */
        .galeria-estilo-contenedor {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }
        
        .galeria-estilo-item {
            border-radius: 10px;
            overflow: hidden;
            height: 250px;
        }
        
        .galeria-estilo-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .galeria-estilo-item:hover .galeria-estilo-img {
            transform: scale(1.1);
        }
        
        /*  promociones Section */
        :root {
            --color-promocion: #ff6bbc; /* color vistoso principal - cambia fácil */
            --color-promocion-2: #ec2020; /* variante para degradado */
            --promo-text-color: #ffffff;
        }
        
        .promociones {
            padding: 40px 0;
            background: linear-gradient(90deg, rgba(255,107,129,0.06), rgba(255,209,224,0.03));
        }
        
        .promociones .seccion-titulo {
            color: var(--color-oscuro);
            margin-bottom: 10px;
        }
        
        .promo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 18px;
            align-items: stretch;
            margin-top: 20px;
        }
        
        .promo-card {
            background: linear-gradient(135deg, var(--color-promocion), var(--color-promocion-2));
            color: var(--promo-text-color);
            padding: 18px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 120px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .promo-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
        }
        
        .promo-tag {
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 0.4px;
            opacity: 0.95;
            margin-bottom: 8px;
        }
        
        .promo-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 6px;
        }
        
        .promo-desc {
            font-size: 0.95rem;
            opacity: 0.95;
            margin-bottom: 12px;
            line-height: 1.25;
        }
        
        .promo-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }
        
        .promo-price {
            font-weight: 800;
            font-size: 1.05rem;
        }
        
        .promo-btn {
            background: rgba(255,255,255,0.12);
            color: var(--promo-text-color);
            border: 0;
            padding: 8px 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.15s ease;
            text-decoration: none;
            font-weight: 700;
        }
        .promo-btn:hover { background: rgba(255,255,255,0.2); transform: translateY(-2px); }
        
        /* Ajustes responsivos para promociones */
        @media (max-width: 768px) {
            .promociones { padding: 28px 0; }
            .promo-card { padding: 14px; min-height: 110px; }
        }
        
        @media (max-width: 480px) {
            .promociones { padding: 20px 0; }
            .promo-grid { gap: 12px; }
            .promo-card { padding: 12px; min-height: 100px; }
        }
        
        /* Ubicacion Section */
        .ubicacion {
            background-color: var(--color-secundario);
        }
        
        .ubicacion-contenedor {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        
        .ubicacion-info {
            padding: 20px;
        }
        
        .ubicacion-titulo {
            font-size: 1.8rem;
            color: var(--color-oscuro);
            margin-bottom: 20px;
        }
        
        .ubicacion-descripcion {
            margin-bottom: 25px;
            font-size: 1.1rem;
        }
        
        .ubicacion-detalle {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .ubicacion-icono {
            color: var(--color-accento);
            font-size: 1.2rem;
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .ubicacion-mapa {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            height: 400px;
        }
        
        .ubicacion-mapa iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        
        /* Footer */
        .footer {
            background-color: var(--color-oscuro);
            color: white;
            padding: 50px 0 30px;
            text-align: center;
        }
        
        .footer-contenedor {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-columna {
            text-align: left;
        }
        
        .footer-titulo {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--color-secundario);
        }
        
        .footer-enlace {
            display: block;
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
            transition: color 0.3s;
        }
        
        .footer-enlace:hover {
            color: var(--color-secundario);
        }
        
        .footer-telefono {
            font-size: 1.2rem;
            color: var(--color-secundario);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .footer-copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-titulo {
                font-size: 2.5rem;
            }
            
            .hero-subtitulo {
                font-size: 1.5rem;
            }
            
            .seccion-titulo {
                font-size: 2rem;
            }
            
            .ubicacion-contenedor {
                grid-template-columns: 1fr;
            }
            
            .ubicacion-mapa {
                height: 350px;
            }
        }
        
        @media (max-width: 768px) {
            .menu-hamburguesa {
                display: block;
            }
            
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                flex-direction: column;
                background-color: white;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                padding: 20px 0;
            }
            
            .nav-menu.activo {
                left: 0;
            }
            
            .nav-item {
                margin: 15px 0;
            }
            
            .hero {
                padding: 120px 0 80px;
            }
            
            .hero-titulo {
                font-size: 2rem;
            }
            
            .hero-subtitulo {
                font-size: 1.3rem;
            }
            
            .seccion {
                padding: 60px 0;
            }
            
            .whatsapp-fijo {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
                font-size: 25px;
            }
        }
        
        @media (max-width: 480px) {
            .contenedor {
                width: 95%;
            }
            
            .hero-titulo {
                font-size: 1.8rem;
            }
            
            .btn-hero {
                padding: 12px 30px;
            }
            
            .servicios-contenedor {
                grid-template-columns: 1fr;
            }
            
            .logo-texto {
                font-size: 18px;
            }
        }
</style>
</head>
<body>
    <!-- Botón de WhatsApp fijo -->
    <a href="https://wa.me/77993528?text=Hola,%20me%20gustaría%20agendar%20una%20cita" target="_blank" class="whatsapp-fijo">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- header y navegacion -->
    <header class="header">
        <div class="contenedor">
            <nav class="nav-contenedor">
                <div class="logo-area">
                    <!-- espacio reservado para el logo -->
                    <div class="logo-placeholder">
                        <img src="estilos/salon-anita.png" alt="Logo Salon Anita" class="logo-img">
                    </div>
                    <div class="logo-texto">Salon Belleza<span>Anita</span></div>
                </div>
                
                <div class="menu-hamburguesa" id="menu-hamburguesa">
                    <i class="bi bi-list"></i>
                </div>
                
                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item">
                        <a href="#inicio" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#servicios" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#galeria-servicios" class="nav-link">Galeria de Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#galeria-estilo" class="nav-link">Galeria de Estilo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#nosotros" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="#ubicacion" class="nav-link">Ubicacion</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacto" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>



 
    <!-- inicio de caja de adaptacion  -->
    <section class="hero" id="inicio">
        <div class="contenedor">
        <!-- carrucel de imagenes -->    





    <div class="coverflow-carousel">
    <div class="coverflow-track">
        <img src="img/entrada.jpg" class="coverflow-img" alt="Imagen 1">
        <img src="img/pasillo.jpeg" class="coverflow-img" alt="Imagen 2">
        <img src="img/patio.jpg" class="coverflow-img" alt="Imagen 3">
        <img src="img/patio2.jpg" class="coverflow-img" alt="Imagen 4">
        <img src="img/vista-superior.jpg" class="coverflow-img" alt="Imagen 5">
        <img src="img/vistasala.jpeg" class="coverflow-img" alt="Imagen 6">
    </div>

    <button class="coverflow-btn prev">&#10094;</button>
    <button class="coverflow-btn next">&#10095;</button>
    </div>






        </div>
    </section>

    <!-- Promociones Section -->
    <section class="seccion promociones" id="promociones">
        <div class="contenedor">
            <h2 class="seccion-titulo">Promociones</h2>
            <p class="seccion-subtitulo">Ofertas especiales que puedes acumular y modificar fácilmente</p>

            <div class="promo-grid" id="promo-grid">
                <!-- Contenido por defecto (se reemplaza si JS está activo) -->
                <div class="promo-card">
                    <div>
                        <div class="promo-tag">20% OFF</div>
                        <div class="promo-title">Cortes y Peinados</div>
                        <div class="promo-desc">Aplica en servicios selectos durante el mes.</div>
                    </div>
                    <div class="promo-meta">
                        <div class="promo-price">Desde 250 bs</div>
                        <a href="#contacto" class="promo-btn">Reservar</a>
                    </div>
                </div>

                <div class="promo-card">
                    <div>
                        <div class="promo-tag">Paquete</div>
                        <div class="promo-title">Novias</div>
                        <div class="promo-desc">Incluye prueba y servicio el día del evento.</div>
                    </div>
                    <div class="promo-meta">
                        <div class="promo-price">1800 bs</div>
                        <a href="#contacto" class="promo-btn">Más info</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section class="seccion" id="servicios">
        <div class="contenedor">
            <h2 class="seccion-titulo">Nuestros Servicios</h2>
            <p class="seccion-subtitulo">Lo Mejor para Ti</p>
            
            <div class="servicios-contenedor">
                <div class="servicio-card">
                    <div class="servicio-icono">
                        <i class="bi bi-scissors"></i>
                    </div>
                    <h3 class="servicio-titulo">Cortes & Peinados</h3>
                    <p class="servicio-descripcion">Transformamos tu look con cortes modernos y peinados elegantes para cualquier ocasión. Nuestros estilistas están capacitados en las últimas tendencias.</p>
                </div>
                
                <div class="servicio-card">
                    <div class="servicio-icono">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h3 class="servicio-titulo"></h3>
                    <p class="servicio-descripcion"></p>
                </div>
                
                <div class="servicio-card">
                    <div class="servicio-icono">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </div>
                    <h3 class="servicio-titulo"></h3>
                    <p class="servicio-descripcion"></p>
                </div>
                
                <div class="servicio-card">
                    <div class="servicio-icono">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <h3 class="servicio-titulo">Coloracion</h3>
                    <p class="servicio-descripcion">Técnicas de coloración avanzada, mechas, reflejos y tratamientos para mantener tu cabello sano y radiante.</p>
                </div>
                
                <div class="servicio-card">
                    <div class="servicio-icono">
                        <i class="bi bi-flower1"></i>
                    </div>
                    <h3 class="servicio-titulo"></h3>
                    <p class="servicio-descripcion"></p>
                </div>
                
                <div class="servicio-card">
                    <div class="servicio-icono">
                        <i class="bi bi-star"></i>
                    </div>
                    <h3 class="servicio-titulo">Servicios Especiales</h3>
                    <p class="servicio-descripcion">Paquetes para novias, tratamientos corporales y servicios a domicilio para ocasiones especiales.</p>
                </div>
<!-- Agregar mas tarjetas de servicio segun sea necesario -->







            </div>
        </div>
    </section>

    <!-- Galeria de Servicios Section -->
    <section class="seccion galeria" id="galeria-servicios">
        <div class="contenedor">
            <h2 class="seccion-titulo">Galeria de Servicios</h2>
            <p class="seccion-subtitulo">Selecciona una categoría para ver sus fotos</p>

            <div class="servicios-tabs" id="servicios-tabs" role="tablist" aria-label="Categorias de servicios">
                <!-- Botones renderizados por JS -->
            </div>

            <div class="servicios-content" id="servicios-content">
                <!-- Panels renderizados por JS; cada panel contiene fotos en vertical -->
            </div> 







            </div>
        </div>
    </section>

    <!-- Galeria de Estilo Section -->
    <section class="seccion" id="galeria-estilo">
        <div class="contenedor">
            <h2 class="seccion-titulo">Galeria de Estilo</h2>
            <p class="seccion-subtitulo">Nuestros Mejores Trabajos</p>
            
            <div class="galeria-estilo-contenedor">
                <div class="galeria-estilo-item">
                    <img src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Corte cabello mujer" class="galeria-estilo-img">
                </div>
                <div class="galeria-estilo-item">
                    <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Maquillaje artistico" class="galeria-estilo-img">
                </div>
                <div class="galeria-estilo-item">
                    <img src="https://images.unsplash.com/photo-1604654894610-df63bc536371?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Uñas decoradas 2" class="galeria-estilo-img">
                </div>
                <div class="galeria-estilo-item">
                    <img src="https://images.unsplash.com/photo-1596703923338-48f1c07e4f2e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Peinado recogido" class="galeria-estilo-img">
                </div>
                <div class="galeria-estilo-item">
                    <img src="https://images.unsplash.com/photo-1580618864180-f6d7d39b8ff6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Coloracion roja" class="galeria-estilo-img">
                </div>
                <div class="galeria-estilo-item">
                    <img src="https://images.unsplash.com/photo-1557170336-a4d03c8c41f6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Tratamiento capilar" class="galeria-estilo-img">
                </div>
                <div class="galeria-estilo-item">
                    <img src="https://images.unsplash.com/photo-1560851248-6c2f83c1c8b4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Maquillaje de noche" class="galeria-estilo-img">
                </div>
                <div class="galeria-estilo-item">
                    <img src="https://images.unsplash.com/photo-1605497788044-5a32c7078486?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Servicio spa" class="galeria-estilo-img">
                </div>

                <!-- Agregar mas items segun sea necesario -->




            </div>
        </div>
    </section>

    <!-- Ubicacion Section -->
    <section class="seccion ubicacion" id="ubicacion">
        <div class="contenedor">
            <h2 class="seccion-titulo">Nuestra Ubicacion</h2>
            <p class="seccion-subtitulo">Visitanos en nuestro salon</p>
            
            <div class="ubicacion-contenedor">
                <div class="ubicacion-info">
                    <h3 class="ubicacion-titulo">Encuentranos Facilmente</h3>
                    <p class="ubicacion-descripcion">Nuestro salon esta ubicado en una zona céntrica y de facil acceso, con amplio estacionamiento y un ambiente diseñado para tu comodidad y relajacion.</p>
                    
                    <div class="ubicacion-detalle">
                        <i class="bi bi-geo-alt ubicacion-icono"></i>
                        <div>
                            <strong>Direccion:</strong><br>
                            Avenida Principal #123,<br>
                            Colonia Centro, Ciudad, CP 12345
                        </div>
                    </div>
                    
                    <div class="ubicacion-detalle">
                        <i class="bi bi-clock ubicacion-icono"></i>
                        <div>
                            <strong>Horario:</strong><br>
                            Lunes a Sabado: 9:00 AM - 8:00 PM<br>
                            Domingos: 10:00 AM - 1:00 PM
                        </div>
                    </div>
                    
                    <div class="ubicacion-detalle">
                        <i class="bi bi-telephone ubicacion-icono"></i>
                        <div>
                            <strong>Telefono:</strong><br>
                           70359344-77993528<br>
                           4255924

                        </div>
                    </div>
                </div>
                
                <div class="ubicacion-mapa">
                    <iframe src="https://maps.app.goo.gl/uz9PjLBPFv4ueWkx8" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contacto">
        <div class="contenedor">
            <div class="footer-contenedor">
                <div class="footer-columna">
                    <h3 class="footer-titulo">BellezaStudio</h3>
                    <p>Resalta tu belleza natural con nuestros servicios profesionales. Calidad, estilo y atencion personalizada.</p>
                </div>
                
                <div class="footer-columna">
                    <h3 class="footer-titulo">Enlaces Rapidos</h3>
                    <a href="#inicio" class="footer-enlace">Inicio</a>
                    <a href="#servicios" class="footer-enlace">Servicios</a>
                    <a href="#galeria-servicios" class="footer-enlace">Galeria de Servicios</a>
                    <a href="#ubicacion" class="footer-enlace">Ubicacion</a>
                </div>
                
                <div class="footer-columna">
                    <h3 class="footer-titulo">Contacto</h3>
                    <div class="footer-telefono">
                        <i class="bi bi-telephone"></i>
                        <span>70359344-77993528</span>
                    </div>
                    <p><i class="bi bi-envelope"></i> anamariaherediazenteno.com@gmail.com</p>
                    <p><i class="bi bi-geo-alt"></i> Av.Chapare, Sacaba </p>
                </div>
            </div>
            
            <div class="footer-copyright">
                <p>&copy; 2026 Salón Anita. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

<script>
        // Menu hamburguesa
        const menuHamburguesa = document.getElementById('menu-hamburguesa');
        const navMenu = document.getElementById('nav-menu');
        
        menuHamburguesa.addEventListener('click', () => {
            navMenu.classList.toggle('activo');
            menuHamburguesa.querySelector('i').classList.toggle('bi-list');
            menuHamburguesa.querySelector('i').classList.toggle('bi-x');
        });
        
        // Cerrar menu al hacer click en un enlace
        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
            navMenu.classList.remove('activo');
            menuHamburguesa.querySelector('i').classList.add('bi-list');
            menuHamburguesa.querySelector('i').classList.remove('bi-x');
        }));
        
        // Smooth scroll para enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

<!-- script para carrucel img -->

<script>
    $(document).ready(function () {
        const $imgs = $('.coverflow-img');
        let current = 0;
        let timer;

        function update() {
            $imgs.each(function (i) {
            $(this).attr('class', 'coverflow-img');

            if (i === current) $(this).addClass('active');
            else if (i === (current - 1 + $imgs.length) % $imgs.length) $(this).addClass('left1');
            else if (i === (current - 2 + $imgs.length) % $imgs.length) $(this).addClass('left2');
            else if (i === (current + 1) % $imgs.length) $(this).addClass('right1');
            else if (i === (current + 2) % $imgs.length) $(this).addClass('right2');
            });
        }

        function next() {
            current = (current + 1) % $imgs.length;
            update();
        }

        function prev() {
            current = (current - 1 + $imgs.length) % $imgs.length;
            update();
        }

        $('.coverflow-btn.next').click(next);
        $('.coverflow-btn.prev').click(prev);

        timer = setInterval(next, 3500);
        update();
    });

</script>

<!-- Script para renderizar promociones desde un arreglo (facil de modificar) -->
<script>
  (function(){
    const promos = [
      { tag: '20% OFF', title: 'Cortes y Peinados', desc: 'Aplica en servicios selectos durante el mes.', price: 'Desde $250', cta: 'Reservar', ctaHref: '#contacto' },
      { tag: 'Paquete', title: 'Novias', desc: 'Incluye prueba y servicio el día del evento.', price: '$1800', cta: 'Más info', ctaHref: '#contacto' }
      // Añade o quita objetos aqui para modificar las promociones facilmente
    ];

    function renderPromos(list){
      const container = document.getElementById('promo-grid');
      if(!container) return;
      container.innerHTML = ''; // limpiar contenido por defecto

      list.forEach(p => {
        const card = document.createElement('div');
        card.className = 'promo-card';
        card.innerHTML = `
          <div>
            <div class="promo-tag">${escapeHTML(p.tag)}</div>
            <div class="promo-title">${escapeHTML(p.title)}</div>
            <div class="promo-desc">${escapeHTML(p.desc)}</div>
          </div>
          <div class="promo-meta">
            <div class="promo-price">${escapeHTML(p.price)}</div>
            <a class="promo-btn" href="${escapeAttr(p.ctaHref || '#contacto')}">${escapeHTML(p.cta || 'Detalles')}</a>
          </div>
        `;
        container.appendChild(card);
      });
    }

    function escapeHTML(s){ return String(s||'').replace(/[&<>"']/g, function(m){ return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":"&#39;"}[m]; }); }
    function escapeAttr(s){ return String(s||'').replace(/"/g, '&quot;'); }

    if(document.readyState === 'loading') document.addEventListener('DOMContentLoaded', () => renderPromos(promos));
    else renderPromos(promos);

    // exposicion util para depuracion/modificacion desde consola
    window.__promociones = { list: promos, render: renderPromos }; // IMPORTANTE: no uses en la produccion cuidado pablo
  })();
</script>

<script>
(function($){
  const sections = [
    { id: 'peinados', label: 'Peinados', photos: [
        'https://images.unsplash.com/photo-1562322140-8baeececf3df?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
        'https://images.unsplash.com/photo-1580618672591-eb180b1a973f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
      ]
    },
    { id: 'unas', label: 'Uñas', photos: [
        'https://images.unsplash.com/photo-1604654894610-df63bc536371?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
      ]
    },
    { id: 'maquillaje', label: 'Maquillaje', photos: [
        'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
      ]
    },
    { id: 'coloracion', label: 'Coloración', photos: [
        'https://images.unsplash.com/photo-1556228578-9c360e1d8d34?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
      ]
    }
  ];

  function renderSections(list){
    const $tabs = $('#servicios-tabs');
    const $content = $('#servicios-content');
    if(!$tabs.length || !$content.length) return;
    $tabs.empty();
    $content.empty();

    list.forEach(function(section){
      const $btn = $('<button/>', {
        'class': 'servicio-tab',
        'type': 'button',
        'data-id': section.id,
        'text': section.label,
        'aria-expanded': 'false'
      });

      $btn.on('click', function(){ toggleSection(section.id, $(this)); });
      $tabs.append($btn);

      const $panel = $('<div/>', { 'class': 'servicio-panel', id: 'panel-' + section.id });
      const $photosWrap = $('<div/>', { 'class': 'servicio-photos' });

      (section.photos || []).forEach(function(src, idx){
        const $photoDiv = $('<div/>', { 'class': 'servicio-photo' });
        const $img = $('<img/>', { src: src || '', loading: 'lazy', alt: section.label + ' ' + (idx + 1) });
        $photoDiv.append($img);
        $photosWrap.append($photoDiv);
      });

      $panel.append($photosWrap);
      $content.append($panel);
    });
  }

  function toggleSection(id, $btn){
    const $panel = $('#panel-' + id);
    if(!$panel.length) return;
    const isOpen = $panel.hasClass('open');

    if(isOpen){
      // abrir imagen 

      $panel.css('max-height', $panel[0].scrollHeight + 'px');
      requestAnimationFrame(function(){
        $panel.css('max-height', '0px');
      });
      $panel.removeClass('open');
      $btn.removeClass('active').attr('aria-expanded', 'false');
    } else {
      // cerrar imagenes anteriores 
      $('.servicio-panel.open').not($panel).each(function(){
        const $other = $(this);
        $other.css('max-height', $other[0].scrollHeight + 'px');
        requestAnimationFrame(function(){ $other.css('max-height', '0px'); });
        $other.removeClass('open');
      });
      $('.servicio-tab.active').not($btn).removeClass('active').attr('aria-expanded', 'false');

      // abrir selecion 
      $panel.addClass('open');
      requestAnimationFrame(function(){
        const h = $panel[0].scrollHeight + 'px';
        $panel.css('max-height', h);
      });

      // ajustar altura 
      $panel.find('img').each(function(){
        if(!this.complete){
          $(this).on('load', function(){
            const updated = $panel[0].scrollHeight + 'px';
            $panel.css('max-height', updated);
          });
        }
      });

      $btn.addClass('active').attr('aria-expanded', 'true');
    }
  }

  function addSection(section){
    if(!section || !section.id) return;
    sections.push($.extend({ photos: [] }, section));
    renderSections(sections);
  }

  function addPhoto(sectionId, photoUrl){
    const s = sections.find(function(x){ return x.id === sectionId; });
    if(!s) return;
    s.photos.push(photoUrl);
    renderSections(sections);
  }

  $(function(){ renderSections(sections); });

  window.__servicios = { sections: sections, render: renderSections, addSection: addSection, addPhoto: addPhoto };
})(jQuery);
</script>
</body>
</html>