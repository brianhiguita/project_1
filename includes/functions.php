<?php

function register() {

  global $connection;

  global $error_message;

  $error_message = "";

  if (isset($_POST['submit'])) {

    if ($_POST['username'] == "" || $_POST['password'] == "" || $_POST['confirmPassword'] == "") {
      $error_message = "Please fill all fields";
    } else {

      if ($_POST['password'] !== $_POST['confirmPassword']) {
        $error_message = "passwords do not match";
      } else {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user_exist_query = "SELECT * FROM users WHERE username = '$username'";

        $user_exists = mysqli_query($connection, $user_exist_query);

        if (mysqli_num_rows($user_exists) > 0) {
          $error_message = "User already exists";
        } else {
          $register_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

          $register_user = mysqli_query($connection, $register_query);

          if (!$register_user) {
            die('failed to register user');
          }

        }

      }

    }

  }

}


function login() {

  global $connection;

  global $error_message;

  $error_message = "";


  if (isset($_POST['submit'])) {

    if ($_POST['username'] !== "" || $_POST['password'] !== "") {

      $username = $_POST['username'];
      $password = $_POST['password'];

      $user_exists_query = $user_exist_query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $user_exists = mysqli_query($connection, $user_exists_query);

      if (mysqli_num_rows($user_exists) > 0 ) {
        $error_message = "login";
      } else {
        $error_message = "incorrect login";
      }

    } else {
      $error_message = "Must input both username and password";
    }

  }

}


?>
