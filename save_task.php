<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $titulo = $_POST['titulo'];
  $genero = $_POST['genero'];
  $duracion = $_POST['duracion'];
  $clasificacion = $_POST['clasificacion'];
  $director = $_POST['director'];
  $query = "INSERT INTO task(titulo, genero, duracion, clasificacion, director) VALUES ('$titulo', '$genero', '$duracion', '$clasificacion', '$director')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea guardada con éxito';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
