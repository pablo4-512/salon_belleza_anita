 
/* estilos base  */

.coverflow-carousel {
  position: relative;
  width: 100%;
  max-width: 520px;
  height: 320px;
  margin: 2rem auto;
  perspective: 1200px;
  padding: 0 50px;
}

.coverflow-track {
  position: relative;
  width: 100%;
  height: 100%;
}

/* Estilos base para las imagenes */
.coverflow-img {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 260px;
  height: 260px;
  object-fit: cover;
  border-radius: 16px;
  transform: translate(-50%, -50%) scale(0.7);
  opacity: 0.6;
  transition: transform 0.7s cubic-bezier(0.4, 0.0, 0.2, 1), 
              opacity 0.5s ease-in-out;
  z-index: 1;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

/* imagen activa/principal */
.coverflow-img.active {
  transform: translate(-50%, -50%) scale(1.05);
  opacity: 1;
  z-index: 5;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}

/* imagenes lado izquierdo */
.coverflow-img.left1 {
  transform: translate(-110%, -50%) scale(0.85) rotateY(35deg);
  z-index: 4;
}

.coverflow-img.left2 {
  transform: translate(-180%, -50%) scale(0.7) rotateY(55deg);
  z-index: 3;
}

/* Imagenes lado derecho */
.coverflow-img.right1 {
  transform: translate(10%, -50%) scale(0.85) rotateY(-35deg);
  z-index: 4;
}

.coverflow-img.right2 {
  transform: translate(80%, -50%) scale(0.7) rotateY(-55deg);
  z-index: 3;
}

/* Botones de navegacion */
.coverflow-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 2rem;
  background: rgba(0, 0, 0, 0.3);
  color: #fff;
  border: none;
  border-radius: 50%;
  padding: 0.3rem 0.8rem;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  z-index: 10;
}

.coverflow-btn:hover {
  background: rgba(0, 0, 0, 0.6);
  transform: translateY(-50%) scale(1.1);
}

.coverflow-btn.prev { left: -30px; }
.coverflow-btn.next { right: -30px; }

/*adaptacion a patallas rectangulares ((celukares en horizontal) */

@media (max-width: 992px) {
  .coverflow-carousel {
    max-width: 450px;
    height: 280px;
    padding: 0 40px;
  }

  .coverflow-img {
    width: 220px;
    height: 220px;
  }

  .coverflow-img.left1 {
    transform: translate(-100%, -50%) scale(0.8) rotateY(30deg);
  }

  .coverflow-img.left2 {
    transform: translate(-160%, -50%) scale(0.65) rotateY(50deg);
  }

  .coverflow-img.right1 {
    transform: translate(0%, -50%) scale(0.8) rotateY(-30deg);
  }

  .coverflow-img.right2 {
    transform: translate(60%, -50%) scale(0.65) rotateY(-50deg);
  }

  .coverflow-btn {
    font-size: 1.5rem;
    padding: 0.2rem 0.6rem;
  }

  .coverflow-btn.prev { left: -20px; }
  .coverflow-btn.next { right: -20px; }
}

/* 
   adaptacion a celulares
    */

@media (max-width: 768px) {
  .coverflow-carousel {
    max-width: 100%;
    max-width: 380px;
    height: 240px;
    padding: 0 35px;
    margin: 1.5rem auto;
  }

  .coverflow-img {
    width: 180px;
    height: 180px;
    border-radius: 12px;
  }

  .coverflow-img.active {
    transform: translate(-50%, -50%) scale(1.02);
  }

  .coverflow-img.left1 {
    transform: translate(-95%, -50%) scale(0.75) rotateY(25deg);
  }

  .coverflow-img.left2 {
    transform: translate(-150%, -50%) scale(0.6) rotateY(45deg);
  }

  .coverflow-img.right1 {
    transform: translate(5%, -50%) scale(0.75) rotateY(-25deg);
  }

  .coverflow-img.right2 {
    transform: translate(55%, -50%) scale(0.6) rotateY(-45deg);
  }

  .coverflow-btn {
    font-size: 1.2rem;
    padding: 0.25rem 0.5rem;
    background: rgba(0, 0, 0, 0.4);
  }

  .coverflow-btn.prev { left: -15px; }
  .coverflow-btn.next { right: -15px; }
}

/* adaptacion a celular pequeño */

@media (max-width: 480px) {
  .coverflow-carousel {
    max-width: 100%;
    height: 200px;
    padding: 0 30px;
    margin: 1rem auto;
    perspective: 800px;
  }

  .coverflow-img {
    width: 150px;
    height: 150px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .coverflow-img.active {
    transform: translate(-50%, -50%) scale(1);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
  }

  .coverflow-img.left1 {
    transform: translate(-90%, -50%) scale(0.7) rotateY(20deg);
  }

  .coverflow-img.left2 {
    transform: translate(-140%, -50%) scale(0.55) rotateY(40deg);
  }

  .coverflow-img.right1 {
    transform: translate(10%, -50%) scale(0.7) rotateY(-20deg);
  }

  .coverflow-img.right2 {
    transform: translate(50%, -50%) scale(0.55) rotateY(-40deg);
  }

  .coverflow-btn {
    font-size: 1rem;
    padding: 0.2rem 0.4rem;
    background: rgba(0, 0, 0, 0.5);
  }

  .coverflow-btn:hover {
    transform: translateY(-50%) scale(1.05);
  }

  .coverflow-btn.prev { left: -10px; }
  .coverflow-btn.next { right: -10px; }
}

/* adaptacion a dispositivos irregulares  */

@media (max-width: 360px) {
  .coverflow-carousel {
    height: 180px;
    padding: 0 25px;
  }

  .coverflow-img {
    width: 130px;
    height: 130px;
    border-radius: 8px;
  }

  .coverflow-img.left1 {
    transform: translate(-85%, -50%) scale(0.65) rotateY(15deg);
  }

  .coverflow-img.left2 {
    transform: translate(-130%, -50%) scale(0.5) rotateY(35deg);
  }

  .coverflow-img.right1 {
    transform: translate(15%, -50%) scale(0.65) rotateY(-15deg);
  }

  .coverflow-img.right2 {
    transform: translate(45%, -50%) scale(0.5) rotateY(-35deg);
  }

  .coverflow-btn {
    font-size: 0.9rem;
    padding: 0.15rem 0.35rem;
  }

  .coverflow-btn.prev { left: -5px; }
  .coverflow-btn.next { right: -5px; }
}
 