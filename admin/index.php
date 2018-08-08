<?php include "includes/header.php"; ?>

<?php include "includes/nav.php"; ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>admin</h1>


      <table class="table table-light table-sticky">
        <thead>
          <tr class="row">
            <th class="col-md-1">Id</th>
            <th class="col-md-4">Name</th>
            <th class="col-md-1">Console</th>
            <th class="col-md-1">Genre</th>
            <th class="col-md-1">Age</th>
            <th class="col-md-1">Quantity</th>
            <th class="col-md-1">Price</th>
            <th class="col-md-1">Delete</th>
            <th class="col-md-1">Update</th>
          </tr>
        </thead>
        <tbody>

      <!--  for each entry in database the following php and html will be created -->
      <?php

      $view_all_query = "SELECT * FROM products";
      $result = mysqli_query($connection, $view_all_query);
      while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_name = $row['product_name'];
        $product_console = $row['product_console'];
        $product_genre = $row['product_genre'];
        $product_age = $row['product_age'];
        $product_quantity = $row['product_quantity'];
        $product_price = $row['product_price'];
       ?>
      		<tr class="row">
            <td class="col-md-1"><?php echo $product_id; ?></td>
            <td class="col-md-4"><?php echo $product_name; ?></td>
            <td class="col-md-1"><?php echo $product_console; ?></td>
            <td class="col-md-1"><?php echo $product_genre; ?></td>
            <td class="col-md-1"><?php echo $product_age; ?></td>
            <td class="col-md-1"><?php echo $product_quantity; ?></td>
            <td class="col-md-1"><?php echo $product_price; ?></td>
            <td class="col-md-1"> <a href="#">Delete</a> </td>
            <td class="col-md-1"> <a href="#">Update</a> </td>
      		</tr>
     <?php
      }
      ?>
    </tbody>
  </table>


    </div>
  </div>
</div>



<?php include "includes/footer.php"; ?>
