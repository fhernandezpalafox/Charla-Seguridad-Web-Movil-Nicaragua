<?php
if (isset($_GET['Descargar'])) { 
  $file = $_GET['Descargar'];
  if (is_file($file)) {
    header("Content-Type: application/force-download");
    header("Content-Disposition: attachment; filename=\"$file\"");
    readfile($file);
  } else {
    die("Error: no se encontró el archivo '$file'");
  }
}
?>