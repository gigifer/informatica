<?php include ("clases/conexion.php")?>
<?php session_start();?>

<!DOCTYPE html>
  <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Righteous&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
      <title>Panel de control</title>
      <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
    </head>

    <body>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php include ("header.php") ?><br><br>

<?php
if(isset($_POST['actions'])){
    
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $id_marca = $_POST['id_marca'];
    $id_categoria = $_POST['id_categoria'];

    //Editar
    if($_POST['actions'] == 'edit'){
        $SQL = 'UPDATE productos SET
        nombre=:nombre,
        descripcion=:descripcion,
        pre_unitario=:precio,
        id_marca=:id_marca,
        id_categoria=:id_categoria
        WHERE id_producto = '.$_GET['id'].';';
    }

    //Agregar
    if($_POST['actions'] == 'add'){
        $SQL = 'INSERT INTO productos
        (nombre, descripcion, pre_unitario, id_marca, id_categoria) 
        VALUES
        (:nombre,:descripcion,:precio,:id_marca,:id_categoria);';
    }

    //Se ejecuta el edit/add (con bindValues).
    $query = $pdo->prepare($SQL);
    $query->bindValue(":nombre", $nombre);
    $query->bindValue(":descripcion", $descripcion);
    $query->bindValue(":precio", $precio);
    $query->bindValue(":id_marca", $id_marca);
    $query->bindValue(":id_categoria", $id_categoria);
    $query->execute();

    header('Location: ABM.php');
    exit;
}

//Listado de marcas
$query = $pdo->prepare('SELECT * FROM marcas');
$query->execute();
$marcas = $query->fetchAll(PDO::FETCH_ASSOC);

//Listado de categorias
$query = $pdo->prepare('SELECT * FROM categorias');
$query->execute();
$categorias = $query->fetchAll(PDO::FETCH_ASSOC);

//Listado de productos
$query = $pdo->prepare(
    'SELECT productos.id_producto as ID, productos.nombre as Nombre, productos.descripcion as Descripcion, productos.pre_unitario as Precio, marcas.descripcion as Marca, categorias.descripcion as Categoria
    FROM productos
    LEFT JOIN marcas ON productos.id_marca = marcas.id_marca
    LEFT JOIN categorias ON productos.id_categoria = categorias.id_categoria
    WHERE productos.borrado is null
    ORDER BY Categoria;');
$query->execute();
$productos = $query->fetchAll(PDO::FETCH_ASSOC);


$actions = 'list';
if(isset($_GET['actions'])){
    $actions = $_GET['actions'];
    if($actions =='edit' && $_GET['id'] != ''){
       $SQL = 'SELECT *
        FROM productos  
        WHERE id_producto = "'.$_GET['id'].'"';
        $query = $pdo->prepare($SQL);
        $query->execute();
        $producto = $query->fetch(PDO::FETCH_ASSOC);
    }
    if($actions =='delete' && $_GET['id'] != ''){
        $SQL = 'UPDATE productos
        SET borrado = 1
        WHERE id_producto = "'.$_GET['id'].'"';
        $query = $pdo->prepare($SQL);
        $query->execute();
        header('Location: ABM.php');
        exit;
    }
}
error_reporting(0);
ini_set('display_errors', 0);
?>

<div class="container">
    <?php if($actions == 'list') {?>
    <h1 class="text-center">Panel de control de productos</h1>
    <br>
    <a class="btn btn-success" href="abm.php?actions=add">Agregar producto</a>
    <br>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto) {?>
            <tr>
                <td><?php echo $producto['Nombre']?></td>
                <td><?php echo $producto['Descripcion']?></td>
                <td><?php echo number_format($producto['Precio'],2)?></td>
                <td><?php echo $producto['Marca']?></td>
                <td><?php echo $producto['Categoria']?></td>
                <td>
                    <a href="ABM.php?actions=edit&id=<?php echo $producto['ID']?>">Editar</a>
                </td><td>
                    <a href="ABM.php?actions=delete&id=<?php echo $producto['ID']?>" onclick="return confirm('¿Desea eliminar?');">Borrar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>


<?php if($actions != 'list') {?>

    <h1 class="text-center">Panel de control de productos</h1> <br>
    <div class="form-group">
      <form action="" method="POST" enctype="multipart/form-data">
      <input type="text" class="form-control" name="nombre" value="<?php echo $producto['nombre'];?>" placeholder="Nombre"><br>
      <textarea class="form-control" rows="3" name="descripcion" placeholder= "Descripción"><?php echo $producto['descripcion'];?></textarea><br>
      <input type="number" class="form-control" name="precio" min="0" step="any" value="<?php echo $producto['pre_unitario'];?>" placeholder="Precio" ><br>
      <select name="id_marca" class="form-control">
                <option value="">Marca</option>
                <?php 
                foreach ($marcas as $key => $fila) { 
                    $sel = '';
                    if($fila['id_marca'] == $producto['id_marca'])
                        $sel = 'selected';
                    ?>
                    <option value="<?php echo $fila['id_marca'];?>" <?php echo $sel;?>><?php echo $fila['descripcion'];?></option>
                <?php 
                }
                ?>
        </select><br>
      <select name="id_categoria" class="form-control">
                <option value="">Categoria</option>
                <?php 
                foreach ($categorias as $key => $fila) { 
                    $sel = '';
                    if($fila['id_categoria'] == $producto['id_categoria'])
                        $sel = 'selected';
                    ?>
                    <option value="<?php echo $fila['id_categoria'];?>" <?php echo $sel;?>><?php echo $fila['descripcion'];?></option>
                <?php 
                }
                ?>
        </select><br>
      <button type="submit" class="btn btn-success">Guardar cambios</button>
      <input type="hidden" name="actions" value="<?php echo $actions?>">
      </form>
      </div>

<?php } ?>
<br>
            </div>
<?php include ("footer.php") ?>
    </body>
</html>