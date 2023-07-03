<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'cinecabo_peliculas'
) or die(mysqli_erro($mysqli));

?>
