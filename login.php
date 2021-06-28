<?php include "./Components/Shared/header.php" 
?>
      <div class="col align-self-center register_buttons">
        <button class="register_button" onclick="window.location='index.php'">Home</button>
        <button class="register_button" onclick="window.location='registration.php'">Sign-Up</button>
      </div>
    </div>
  </section>

  <div class="container-fluid login-container">
    <div class="row align-items-center">
      <div class="col-md-4 align-self-center login-form-1">
        <h3>Login</h3>
        <form action="handle_login.php" method="post">
          <hr>
          <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />
          </div>
          <div class="form-group">
            <label for="psw"><b>Password</b></label>
            <input type="password" class="form-control" placeholder="Your Password *" value="" name="password" />
          </div>
          <hr>
          <div class="form-group">
            <input type="submit" class="btnSubmit" value="Login" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include "./Components/Shared/footer.php"
?>

</body>

</html>