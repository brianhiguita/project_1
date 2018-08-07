<?php include "includes/header.php"; ?>

<?php include "includes/nav.php"; ?>


<?php
add_product();
?>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1>Add Product</h1>

      <form class="" action="" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="game_name" value="">
        </div>

        <div class="form-group">
          <label for="console">Console</label>
          <select class="form-control" name="console">
            <option value="ps4">Playstation 4</option>
            <option value="xbox">Xbox One</option>
            <option value="switch">Nintendo Switch</option>
          </select>
        </div>

        <div class="form-group">
          <label for="genre">Genre</label>
          <select class="form-control" name="genre">
            <option value="fps">First Person Shooter</option>
            <option value="racing">racing</option>
            <option value="simulator">simulator</option>
            <option value="sports">sports</option>
          </select>
        </div>

        <div class="form-group">
          <label for="age">Age</label>
          <select class="form-control" name="age">
            <option value="3">3+</option>
            <option value="7">7+</option>
            <option value="12">12+</option>
            <option value="18">18+</option>
          </select>
        </div>

        <div class="form-group">
          <label for="quantity">Product Quantity</label>
          <input type="number" class="form-control" name="quantity" value="">
        </div>

        <div class="form-group">
          <label for="price">Product Price</label>
          <input type="float" class="form-control" name="price" value="">
        </div>

        <div class="form-group">
          <label for="url">Image Url</label>
          <input type="text" class="form-control" name="image" value="http://via.placeholder.com/350x150">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
      </form>

      <?php
        if ($admin_error_message !== "") {
          echo "<div class=\"error\"> <p>" . $admin_error_message . "</p> </div>";
        }
      ?>


    </div>
  </div>
</div>



<?php include "includes/footer.php"; ?>
