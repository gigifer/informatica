<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Righteous&display=swap" rel="stylesheet">
        <title>Autenticacion</title>
        <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
      </head>
      <body class="container-fluid">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <?php include ("header.php") ?>
  <section id="inicio-uss">
<div class="columns-container">
				<div id="columns" class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 fondo">
			<form action="index.php" method="post" id="autenticacion-form" class="box">
				<h3 class="crea-cuenta">Crear una cuenta</h3>
				<div class="form_content clearfix">
					<p>Escriba su correo electrónico para crear su cuenta</p>
					<div class="form-group">
						<label for="email_create">Correo electrónico</label>
						<input type="email" id="email_create" name="email_create" value="">
					</div>
          <div class="form-check">
       <input type="checkbox" class="form-check-input check" id="dropdownCheck">
       <label class="form-check-label" for="dropdownCheck">
         Suscribirme a las novedades </label>
     </div>

					<div class="submit">
            <button type="submit" class="btn btn-primary">Crear cuenta</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-xs-12 col-sm-6 fondo">
			<form action="home.php" method="post" id="login_form" class="box">
				<h3 class="page-subheading">¿Ya está registrado?</h3>
				<div class="form_content clearfix">
					<div class="form-group">
						<label for="email">Correo electrónico</label>
						<input type="email" id="email" name="email" value="">
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password"  id="password" name="password" value="">
					</div>
					<p class="lost_password form-group"><a href="home.php" title="Recuperar la contraseña" rel="nofollow">¿Olvidó su contraseña?</a></p>
					<p class="submit">
					<button type="submit" class="btn btn-primary">Iniciar sesión</button>
					</button>
					</p>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</section>
    <!-- /*footer*/ -->
      <?php include ("footer.php") ?>
  </body>
</html>
