<?php include "includes/header.php"; ?>

<?php include "includes/nav.php"; ?>



<?php

  register();

?>



<div class="container">
  <div class="row">
    <div class="col-md-6 register">

      <form class="" action="" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <div class="form-group">
          <label for="confirmPassworld">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassworld" name="confirmPassword" placeholder="Confirm Password">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Register</button>
      </form>

      <?php
        if ($error_message !== "") {
          echo "<div class=\"error\"> <p>" . $error_message . "</p> </div>";
        }
      ?>

    </div>
  </div>
</div>



<?php include "includes/footer.php"; ?>