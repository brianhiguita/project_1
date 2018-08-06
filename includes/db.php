<?php

  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "root";
  $db_name = "new_app";

  $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (!$connection) {
    die("error connecting to database");
  }


 ?>
