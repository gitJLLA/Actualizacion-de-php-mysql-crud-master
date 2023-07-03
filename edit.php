<?php
include("db.php");
$titulo = '';
$genero= '';
$duracion= '';
$clasificacion= '';
$director= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $titulo = $row['titulo'];
    $genero = $row['genero'];
    $duracion = $row['duracion'];
    $clasificacion = $row['clasificacion'];
    $director = $row['director'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $titulo= $_POST['titulo'];
  $genero = $_POST['genero'];
  $duracion = $_POST['duracion'];
  $clasificacion = $_POST['clasificacion'];
  $director = $_POST['director'];

  $query = "UPDATE task set titulo = '$titulo', genero = '$genero', duracion = '$duracion', clasificacion = '$clasificacion', director = '$director' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea actualizada con éxito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="titulo" type="text" class="form-control" value="<?php echo $titulo; ?>" placeholder="Titulo">
        </div>
        <div class="form-group">
          <input name="genero" type="text" class="form-control" value="<?php echo $genero; ?>" placeholder="Genero">
        </div>
        <div class="form-group">
          <input name="duracion" type="text" class="form-control" value="<?php echo $duracion; ?>" placeholder="Duracion">
        </div>
        <div class="form-group">
        <input name="clasificacion" type="text" class="form-control" value="<?php echo $clasificacion; ?>" placeholder="Clasificacion">
        </div>
        <div class="form-group">
        <input name="director" type="text" class="form-control" value="<?php echo $director; ?>" placeholder="Director">
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
