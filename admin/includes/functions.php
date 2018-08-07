<?php


function add_product() {

  global $connection;

  global $admin_error_message;

  $admin_error_message = "";

  if (isset($_POST['submit'])) {

    $name = $_POST['game_name'];
    $console = $_POST['console'];
    $genre = $_POST['genre'];
    $age = $_POST['age'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    if ($name == "" || $console == "" || $genre == "" || $age == "" || $quantity == "" || $price == "" || $image == "") {
      $admin_error_message = "all fields must be filled";
    } else {
      $admin_error_message = "all good";
    }







    // $query = "INSERT INTO products (product_name, product_console, product_genre, product_age, product_quantity, product_price, product_url) VALUES ('$name', '$console', '$genre', '$age', '$quantity', '$price', '$image')";
    // $add_product = mysqli_query($connection, $query);
    //
    // if (!$add_product) {
    //   echo "failed";
    // }

  }

}



?>
