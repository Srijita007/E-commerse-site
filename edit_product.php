<?php
include 'db_connect.php';
session_start();
$selected_product = $_POST['edit'];
include "./Components/Shared/header.php"
?>



      <div class="col align-self-center register_buttons">
        <button class="register_button" onclick="window.location='admin_products.php'">Back</button>
        <button class="register_button" onclick="window.location='logout.php'">Logout</button>
      </div>
    </div>
  </section>

  <section id="edit_product_container" class="container-fluid">
    <div id="edit_product" class="row">
      <h3>Edit Product</h3>
      <form action="handle_edit_product.php" method="post" enctype="multipart/form-data">
        <div class="row justify-content-around">
          <div class="col-sm-4">
            <div class="form-group">
              <label for="SelectedProduct"><b>Selected Product</b></label>
              <input type="text" class="form-control" placeholder="" value="<?php echo $selected_product; ?>" name="selected_product" readonly />
            </div>
            <div class="form-group">
              <label for="Change_ID"><b>Change ID</b></label>
              <input type="text" class="form-control" placeholder="" value="<?php echo $selected_product; ?>" name="change_id" />
            </div>
            <div class="form-group">
              <label for="ProductName"><b>Change Name</b></label>
              <input type="text" class="form-control" placeholder="Enter Product Name" value="" name="product_name" required />
            </div>
            <div class="form-group">
              <label for="ProductImage"><b>Product Image</b></label>
              <input type="file" class="form-control" placeholder="" value="" name="P_Image" required />
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
                <label for="ProductCost"><b>Cost</b></label>
                <input type="number" min="1" max="999999" class="form-control" placeholder="Enter Product Cost" value="" name="product_cost" required />
            </div>
            <div class="form-group">
              <label for="ProductType"><b>Product Type:&ensp;&ensp;&ensp;&ensp;&ensp;</b></label>
              <label for="smartphone_product">Smartphone</label>
              <input type="radio" id="smartphone_product" name="product_type" value="smartphone">&ensp;&ensp;
              <label for="laptop_product">Laptop</label>
              <input type="radio" id="laptop_product" name="product_type" value="laptop">
            </div>
            <div class="form-group">
              <label for="ProductStatus"><b>Product Status:&ensp;&ensp;&ensp;&ensp;</b></label>
              <label for="active_product">Active</label>
              <input type="radio" id="active_product" name="product_status" value="Active">&ensp;&ensp;
              <label for="inactive_product">Inactive</label>
              <input type="radio" id="inactive_product" name="product_status" value="Inactive">
            </div>
            <div class="form-group">
              <label for="ProductDescription"><b>Description</b></label>
              <textarea rows="3" id="description" class="form-control" placeholder="Enter Product Description" value="" name="product_desc" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="product_edit_button" value="">Edit Product</button>
              <button type="reset" class="product_reset_button">Reset</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <?php include "./Components/Shared/footer.php"
?>

</body>

</html>

<?php mysqli_close($connection); ?>