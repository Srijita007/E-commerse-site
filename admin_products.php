<?php
include 'db_connect.php';
session_start();
$sql = "SELECT * FROM products ORDER BY status, category, price";
$result = mysqli_query($connection, $sql);
include "./Components/Shared/header.php"
?>


      <div class="col align-self-center register_buttons">
        <button class="register_button" onclick="window.location='logout.php'">Logout</button>
      </div>
    </div>
  </section>

  <section id="admin_products" class="container-fluid">
    <div class="row align-items-center" style="margin: 1% 0%;">
      <div class="col-4">
        <div class="electronics_header">
          Electronic Products
        </div>
      </div>
      <div class="col-auto offset-lg-6">
        <button type="button" class="btn btn-success" onclick="window.location='add_product.php'">Add Product</button>
      </div>
    </div>

    <div id="existing_products" class="row">
      <div class="table_container">
        <table id="products_table" class="table table-hover table-striped">
          <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
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
                <form id="status_form" action="status_toggle.php" method="post">
                  <input type="hidden" name="product_id" id="product_id" value="<?php echo $fetch->p_id; ?>">
                  <button type="submit" name="status" id="status" value="<?php echo $fetch->status; ?>"><?php echo $fetch->status; ?></button>
                </form>
              </td>
              <td>
                <form action="edit_product.php" method="post">
                  <button class="action_edit" type="submit" name="edit" value="<?php echo $fetch->p_id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </form>
                <form action="delete_product.php" method="post">
                  <button class="action_delete" type="submit" name="delete" value="<?php echo $fetch->p_id; ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </section>
  <?php include "./Components/Shared/footer.php"
?>

  </body>

</html>

<?php mysqli_close($connection); ?>