<?php
  session_start();

  $conn = mysqli_connect(
    'localhost',
    'id20708902_calculator_php_bootstrap',
    'Agua55.5',
    'id20708902_php_mysql_crud_aristides'
  ) or die(mysqli_error($mysqli));
?>