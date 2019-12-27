<header>
  <div class="container-fluid sinMargen">
    <div class="row" id="buscador">
      <div class="nombre text-white col-sm-12 col-md-5 col-lg-5 ">
        <a href="index.php">
        <img id="logodepagina" src="img/Logo-Mapache.png" alt="logo">
        <h1 id= "titulodepagina">Mapache</h1></a>
      </div>

      <div class="buscar col-sm-12 col-md-5 col-lg-5">
        <form class="form-inline d-flex justify-content-center" >
          <input class="rounded-pill" type="search" aria-label="Search" id="inputBuscador">
          <button id= "botBuscar" class="btn btn-outline-success rounded-pill" type="submit">Buscar</button>
        </form>
      </div>

      <div class="col-sm-12 col-md-2 col-lg-2">
        <div class="carrito">
            <a href="carrito.php"><i class="fas fa-cart-arrow-down"></i></a>
        </div>
        <div id="misCompras">
          <a class="text-white" href="carrito.php">Mis compras</a>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-sm" id=barraNav>
      <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#opciones">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse row" id="opciones">
        <ul class="navbar-nav largoBarra" id=barraNav>
          <li class="nav-item col-sm-12 col-md-3 col-lg-3">
            <a class="nav-link text-center text-white" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown col-sm-12 col-md-3 col-lg-3">
            <a class="nav-link dropdown-toggle text-center text-white" href="index.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Productos
            </a>
            <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item " href="index.php#categorianotebooks">Notebooks</a>
              <a class="dropdown-item" href="index.php#categoriapcdeescritorio">PC de Escritorio</a>
              <a class="dropdown-item" href="index.php#categoriateclados">Teclados</a>
            </div>
          </li>
          <li class="nav-item col-sm-12 col-md-3 col-lg-3">
            <a class="nav-link text-center text-white" href="registro.php">Registrate</a>
          </li>
          <li class="nav-item col-sm-12 col-md-3 col-lg-3">
            <a class="nav-link text-center text-white" href="login.php">Ingresá</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

</header>
