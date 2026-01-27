<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .coverflow-carousel {
  position: relative;
  width: 100%;
  max-width: 520px;
  height: 320px;
  margin: 2rem auto;
  perspective: 1200px;
}

.coverflow-track {
  position: relative;
  width: 100%;
  height: 100%;
}

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
  transition: transform 0.7s, opacity 0.5s;
  z-index: 1;
}

.coverflow-img.active {
  transform: translate(-50%, -50%) scale(1.05);
  opacity: 1;
  z-index: 5;
}

.coverflow-img.left1 {
  transform: translate(-110%, -50%) scale(0.85) rotateY(35deg);
  z-index: 4;
}

.coverflow-img.left2 {
  transform: translate(-180%, -50%) scale(0.7) rotateY(55deg);
  z-index: 3;
}

.coverflow-img.right1 {
  transform: translate(10%, -50%) scale(0.85) rotateY(-35deg);
  z-index: 4;
}

.coverflow-img.right2 {
  transform: translate(80%, -50%) scale(0.7) rotateY(-55deg);
  z-index: 3;
}

.coverflow-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 2rem;
  background: rgba(0,0,0,0.3);
  color: #fff;
  border: none;
  border-radius: 50%;
  padding: 0.3rem 0.8rem;
  cursor: pointer;
}

.coverflow-btn.prev { left: -30px; }
.coverflow-btn.next { right: -30px; }

    </style>
</head>
<body>
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
</body>
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
</html>
