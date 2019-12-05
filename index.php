<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Righteous&display=swap" rel="stylesheet">
      <title>Mapache</title>
      <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
    </head>
    <body class="container-fluid">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <header>
        <div class="row" id="buscador">
          <div class="nombre text-white col-lg-5">
            MAPACHE <br>
            <img src="logo.jpg" alt="logo">
        </div>

          <nav class="navbar col-lg-5"  >
            <form class="form-inline" >
              <input class="form-control mr-sm-2" type="search" aria-label="Search">
              <button id= "botBuscar" class="btn btn-outline-success my-2 my-sm-0 " type="submit">Buscar</button>
            </form>
          </nav>
          <div class="carrito col-lg-2">
            <i class="fas fa-cart-arrow-down"></i>
            <div>
              <a id="misCompras" class="text-white" href="#">Mis compras</a>
            </div>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg row navbar-light" id="barraNav">
          <div class="collapse navbar-collapse col-lg-12" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active itemMenu">
                <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown itemMenu">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Productos
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item " href="#">Monitores</a>
                  <a class="dropdown-item" href="#">Notebooks</a>
                  <a class="dropdown-item" href="#">Gabinetes</a>
                  <a class="dropdown-item" href="#">Accesorios</a>
                </div>
              </li>
              <li class="nav-item itemMenu">
                <a class="nav-link text-white" href="#">Registrate</a>
              </li>
              <li class="nav-item itemMenu">
                <a class="nav-link text-white" href="#">Ingresá</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

<!-- CARRUSEL DE OFERTAS -->
<div id="carrusel" class="carousel slide container-fluid" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carrusel" data-slide-to="0" class="active"></li>
    <li data-target="#carrusel" data-slide-to="1"></li>
    <li data-target="#carrusel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Ofertas1.jpg" class="d-block w-100" alt="Oferta1">
    </div>
    <div class="carousel-item">
      <img src="img/Ofertas2.jpg"" class="d-block w-100" alt="Oferta2">
    </div>
    <div class="carousel-item">
      <img src="img/Ofertas3.jpg"" class="d-block w-100" alt="Oferta3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carrusel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carrusel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </body>
  </html>
