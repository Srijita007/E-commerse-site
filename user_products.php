<?php
include 'db_connect.php';
session_start();

if (!isset($_SESSION["sql"])) {
  $_SESSION['sql'] = "SELECT * FROM `products` WHERE status = 'Active' ORDER BY category, price";
}

$result = mysqli_query($connection, $_SESSION['sql']);
include "./Components/Shared/header.php"
?>


      <div class="col align-self-center register_buttons">
        <button class="register_button" onclick="window.location='index.php'">Home</button>
        <button class="register_button" onclick="window.location='logout.php'">Logout</button>
      </div>
    </div>
  </section>

  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-4">
        <div class="electronics_header">
          Electronic Products
        </div>
      </div>
      <div class="col-auto offset-lg-3">
        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select Category
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="./Filter/all_products.php">All Products</a>
            <a class="dropdown-item" href="./Filter/smartphone.php">Smartphones</a>
            <a class="dropdown-item" href="./Filter/laptop.php">Laptops</a>
          </div>
        </div>
      </div>
      <div class="col-auto">
        <?php
        $email = $_SESSION["email"];
        $sql = "SELECT COUNT(p_id) AS itemCount FROM `$email`";
        $result2 = mysqli_query($connection, $sql);
        ?>
        <button type="button" class="btn btn-warning" onclick="window.location='purchase_product.php'"><b>View Cart:&nbsp;
            <?php $_SESSION['items'] = mysqli_fetch_object($result2)->itemCount;
            echo $_SESSION['items'];
            ?></b>
        </button>
      </div>
    </div>

    <div id="user_product_table" class="table_container">
      <table id="products_table" class="table table-hover table-striped">
        <tr>
          <th scope="col">Product ID</th>
          <th scope="col">Product</th>
          <th scope="col">Image</th>
          <th scope="col">Category</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
        <?php while ($fetch = mysqli_fetch_object($result)) { ?>
          <tr>
            <td>
              <?php echo $fetch->p_id; ?>
            </td>
            <td>
              <?php echo $fetch->product_name; ?>
            </td>
            <td>
              <img src="Images/Product_Images/<?php echo $fetch->P_Image; ?>" alt="Product Picture" style="max-width: 50px; max-height: 50px;" />
            </td>
            <td>
              <?php echo $fetch->category; ?>
            </td>
            <td>
              <?php echo $fetch->description; ?>
            </td>
            <td>
              Rs.&nbsp;<?php echo $fetch->price; ?>
            </td>
            <td>
              <form action="add_to_cart.php" method="post">
                <button class="action_purchase" type="submit" name="purchase" value="<?php echo $fetch->p_id; ?>"><i class="fa fa-shopping-cart"></i></button>
              </form>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <?php include "./Components/Shared/footer.php"
?>


</body>

</html>