<?php
   $linksFooter = ["Preguntas frecuentes", "Contacto"];
   ?>
<footer>
      <div class="row pieDePagina">
          <ul class="nav container-fluid" id="redes">
            <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
            <a class="nav-link active iconoRedes" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
            </li>
          <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
            <a class="nav-link active iconoRedes" href="https://twitter.com/login?lang=es"><i class="fab fa-twitter-square"></i></a>
          </li>
          <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
            <a class="nav-link active iconoRedes" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          </li>
          <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
            <a class="nav-link active iconoRedes" href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></i></a>
          </li>
        </ul>

      <ul class="nav container-fluid" id="linksAyuda">
        <li class="nav-item text-center text-white col-sm-3 col-md-3 col-lg-3">
          <i class="fas text-white fa-phone-alt"></i>
          Teléfono <br>
          0800-158-846123
        </li>
        <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
          <a class="nav-link active text-white" href="faq.php"><?php echo "$linksFooter[0]"?></a>
        </li>
        <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
          <a class="nav-link active text-white" href="contacto.php"><?php echo "$linksFooter[1]"?></a>
        </li>
        <li class= "nav-item text-center text-white col-sm-3 col-md-3 col-lg-3">
          Medios de pago
          <p><img class="logoPago2" src="img/mercado-pago.png">
             <img class="logoPago2" src="img/todo-pago.png">
             <img class="logoPago2" src="img/pagofacil.svg"></p>
          <p><img class="logoPago2" src="img/visa.svg">
            <img class="logoPago2" src="img/mastercard.svg">
            <img class="logoPago2" src="img/naranja.svg">
            <img class="logoPago2" src="img/visadebito.svg"></p>
    </li>
      </ul>


      </div>

    </footer>
