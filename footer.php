<?php
   $linksFooter = ["Preguntas frecuentes", "Contacto"];
   ?>
<footer>
      <div class="container-fluid row pieDePagina">
      <ul class="nav ">
        <li class="nav-item text-center col-sm-12 col-md-4 col-lg-4">
          <i class="fas fa-phone-alt"></i>
          Teléfono <br>
          0800-158-846
        </li>
        <li class="nav-item text-center col-sm-12 col-md-4 col-lg-4">
          <a class="nav-link active" href="#"><?php echo "$linksFooter[0]"?></a>
        </li>
        <li class="nav-item text-center col-sm-12 col-md-4 col-lg-4">
          <a class="nav-link active" href="#"><?php echo "$linksFooter[1]"?></a>
        </li>
      </ul>
      <ul class="nav">
        <li class="nav-item text-center col-sm-12 col-md-4 col-lg-4">
          <a class="nav-link active" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
        </li>
        <li class="nav-item text-center col-sm-12 col-md-4 col-lg-4">
          <a class="nav-link active" href="https://twitter.com/login?lang=es"><i class="fab fa-twitter-square"></i></a>
        </li>
        <li class="nav-item text-center col-sm-12 col-md-4 col-lg-4">
          <a class="nav-link active" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </li>
      </ul>
      </div>

    </footer>

    <?php
    for ($i=0; $i < 2; $i++) {
      echo '<li class="nav-item text-center col-sm-12 col-md-4 col-lg-4">';
      echo '<a class="nav-link active" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>';
      echo '</li>';
    } ?>
