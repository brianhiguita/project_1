<?php include "includes/header.php"; ?>

<?php include "includes/nav.php"; ?>

<?php

  login();

?>

<div class="container">
  <div class="row">
    <div class="col-md-6 register">

      <?php include "includes/login_form.php"; ?>

      <?php
        if ($error_message !== "") {
          echo "<div class=\"error\"> <p>" . $error_message . "</p> </div>";
        }
      ?>

    </div>
  </div>
</div>



<?php include "includes/footer.php"; ?>
