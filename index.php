<?php
include 'db_connect.php';
session_start();
include "./Components/Shared/header.php"
?>

      <div class="col align-self-center register_buttons">
        <?php if (!isset($_SESSION['loggedin'])) { ?>
          <button class="register_button" onclick="window.location='login.php'">Login</button>
        <?php } else { ?>
          <button class="register_button" onclick="window.location='user_products.php'">Products</button>
        <?php } ?>
        <button class="register_button" onclick="window.location='registration.php'">Sign-Up</button>
      </div>
    </div>
  </section>

  <section id="Home_Body">
  <div>
    <img src="./Images/Home_Store.jpg" alt="">
    </div>
  </section>
  <?php include "./Components/Shared/footer.php"
?>
</body>

</html>