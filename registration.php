<?php 
  include "./Components/Shared/header.php"
  ?>
      <div class="col align-self-center register_buttons">
        <button class="register_button" onclick="window.location='login.php'">Login</button>
        <button class="register_button" onclick="window.location='index.php'">Home</button>
      </div>
    </div>
  </section>

  <div class="container-fluid register-container ">
    <br><br>
    <div class="row align-self-center register-form-1">
      <form action="handle_registration.php" method="post">
        <h3>Registration</h3>
        <div class="row justify-content-evenly">
          <hr>
          <div class="col-5">
            <div class="form-group">
              <label for="Name"><b>Full Name</b></label>
              <input type="text" class="form-control" placeholder="Your Name *" value="" name="name" required />
            </div>
            <div class="form-group">
              <label for="Address"><b>Address</b></label>
              <input type="text" class="form-control" placeholder="Your Address *" value="" name="address" required />
            </div>
            <div class="form-group">
              <label for="Pincode"><b>Pincode</b></label>
              <input type="tel" pattern="{0-9}[6]" class="form-control" placeholder="Your Pincode *" value="" name="pincode" required />
            </div>
            <div class="form-group">
              <label for="Contact"><b>Contact No</b></label>
              <input type="tel" pattern="[0-9]{10}" class="form-control" placeholder="Your Mobile No. *" value="" name="contact" required />
            </div>
          </div>

          <div class="col-5">
            <div class="form-group">
              <label for="email"><b>Email</b></label>
              <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" required />
            </div>
            <div class="form-group">
              <label for="password"><b>Password</b></label>
              <input type="password" class="form-control" placeholder="Your Password *" value="" name="password" required />
            </div>
            <div class="form-group">
              <label for="confirm-password"><b>Confirm Password</b></label>
              <input type="password" class="form-control" placeholder="Your Password again *" value="" name="confirm_password" required />
            </div>
            <hr>
            <div class="form-group">
              <input type="submit" class="btnSubmit" value="Register" />
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include "./Components/Shared/footer.php"
?>
</body>

</html>