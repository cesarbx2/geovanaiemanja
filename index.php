<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Geovanne de Iemanjá</title>
  <?php include('style.php');?>
  <script src="https://kit.fontawesome.com/e130b18810.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <h1>Geovanne de Iemanjá</h1>
    <p>Consultas e trabalhos espirituais para transformar sua vida</p>
  </header>

  <section>
    <h2>&emsp;Encontre sua paz e conquiste seus desejos</h2>
    <p>
      Com mais de 5 anos de experiência, Geovanne de Iemanjá oferece orientação espiritual com seriedade, amor e firmeza. Caminhos abertos, proteção e soluções para o amor e vida financeira.
    </p>
  </section>

  <section class="services">
    <h2>&emsp;Especialidades espirituais</h2>
    <ul>
      <li>Trabalhos de amor e reconciliação</li>
      <li>Limpeza e proteção espiritual</li>
      <li>União de casais e abertura de caminhos</li>
      <li>Cartas ciganas e revelações com Iemanjá</li>
      <li>Encantamentos para prosperidade</li>
    </ul>
  </section>

  <section class="whatsapp">
    <p>Agende agora pelo WhatsApp:</p>
    <a href="https://wa.me/5561981945686" target="_blank">(61) 9.8194-5686</a>
  </section>

  <section class="testimonials">
    <h2>Depoimentos reais</h2>
    <p>“Geovanne é maravilhosa, me ajudou a reconquistar minha autoestima e seguir em frente.”</p>
    <p>“Não acreditei quando vi meu amor voltar. Gratidão eterna por tudo!”</p>
    <p>“Meu negócio começou a prosperar depois da limpeza espiritual.”</p>
    <p>“Geovanne acalmou meu coração. Senti uma paz que não sentia há anos.”</p>
    <p>“O trabalho foi certeiro e honesto. Recomendo a todos que buscam ajuda verdadeira.”</p>
  </section>

  <section class="gallery">
    <h2>Galeria dos trabalhos</h2>
    <div class="gallery-grid">
      <?php
      for ($i=1; $i <= 15; $i++) { 
      ?>
      <img src="giovanny (<?php echo $i?>).png" alt="Trabalho espiritual <?php echo $i?>">
      <?php } ?>
    </div>
  </section>

  <div class="lightbox" id="lightbox">
    <img src="" alt="Imagem ampliada" id="lightbox-img">
  </div>

  <a class="whatsapp-fixed" href="https://wa.me/5585992449386" target="_blank" title="Fale conosco pelo WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <footer>
    <p>© 2025 Geovanne de Iemanjá – Trabalhos espirituais com fé e respeito</p>
  </footer>

  <script>
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    document.querySelectorAll('.gallery-grid img').forEach(img => {
      img.addEventListener('click', () => {
        lightboxImg.src = img.src;
        lightbox.style.display = 'flex';
      });
    });

    lightbox.addEventListener('click', () => {
      lightbox.style.display = 'none';
    });
  </script>
</body>
</html>
