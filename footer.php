<?php
   $linksFooter = ["Preguntas frecuentes", "Contacto"];
   ?>
<footer>
      <div class="row pieDePagina">
      <ul class="nav container-fluid" id=linksAyuda>
        <li class="nav-item text-center text-white col-sm-4 col-md-4 col-lg-4">
          <i class="fas text-white fa-phone-alt"></i>
          Teléfono <br>
          0800-158-846
        </li>
        <li class="nav-item text-center col-sm-4 col-md-4 col-lg-4">
          <a class="nav-link active text-white" href="#"><?php echo "$linksFooter[0]"?></a>
        </li>
        <li class="nav-item text-center col-sm-4 col-md-4 col-lg-4">
          <a class="nav-link active text-white" href="#"><?php echo "$linksFooter[1]"?></a>
        </li>
      </ul>
      <ul class="nav container-fluid" id="redes">
        <li class="nav-item text-center col-sm-4 col-md-4 col-lg-4">
          <a class="nav-link active iconoRedes" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
        </li>
        <li class="nav-item text-center col-sm-4 col-md-4 col-lg-4">
          <a class="nav-link active iconoRedes" href="https://twitter.com/login?lang=es"><i class="fab fa-twitter-square"></i></a>
        </li>
        <li class="nav-item text-center col-sm-4 col-md-4 col-lg-4">
          <a class="nav-link active iconoRedes" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
      </div>

    </footer>
