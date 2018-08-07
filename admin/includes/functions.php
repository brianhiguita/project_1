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


    // check all fields are not empty
    if ($name == "" || $console == "" || $genre == "" || $age == "" || $quantity == "" || $price == "" || $image == "") {
    $admin_error_message = "all fields must be filled";
    } else {
    // check if game already exists in database
      $product_exists_query = $user_exist_query = "SELECT * FROM products WHERE product_name = '$name' AND product_console = '$console'";
      $product_exists = mysqli_query($connection, $product_exists_query);

      if (mysqli_num_rows($product_exists) > 0) {

      $admin_error_message = "this product already exists";

      } else {
        // insert product into database
        $query = "INSERT INTO products (product_name, product_console, product_genre, product_age, product_quantity, product_price, product_url) VALUES ('$name', '$console', '$genre', '$age', '$quantity', '$price', '$image')";
        $add_product = mysqli_query($connection, $query);

        if (!$add_product) {
        $admin_error_message = "Failed to add product to database please try again";
        }
      }
    }
  }
}


?>
