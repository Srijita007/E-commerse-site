<?php include "./Components/Shared/header.php"
?>
      <div class="col align-self-center register_buttons">
        <button class="register_button" onclick="window.location='admin_products.php'">Back</button>
        <button class="register_button" onclick="window.location='logout.php'">Logout</button>
      </div>
    </div>
  </section>

  <section id="admin_products" class="container-fluid">
    <div id="add_product" class="row">
      <h3>Add New Product</h3>
      <form action="handle_add_product.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="ProductID"><b>Product ID</b></label>
              <input type="text" class="form-control" placeholder="Enter Product ID" value="" name="product_id" required />
            </div>
            <div class="form-group">
              <label for="ProductName"><b>Product Name</b></label>
              <input type="text" class="form-control" placeholder="Enter Product Name" value="" name="product_name" required />
            </div>
            <div class="form-group">
              <label for="ProductImage"><b>Product Image</b></label>
              <input type="file" class="form-control" placeholder="" value="" name="P_Image" required />
            </div>
            <div class="form-group">
              <label for="ProductCost"><b>Cost</b></label>
              <input type="number" min="1" class="form-control" placeholder="Enter Product Cost" value="" name="product_cost" required />
            </div>
          </div>
          <div class="col">
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
              <textarea rows="5" id="description" class="form-control" placeholder="Enter Product Description" value="" name="product_desc" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="product_add_button" value="">Add Product</button>
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