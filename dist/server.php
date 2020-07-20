<?php
  include __DIR__ .'/database.php';
  $cds_json = json_encode($database);
  header('Content-Type: application/json');
  echo $cds_json;
 ?>
