<?php
    include 'include/header.php';
    include 'include/navbar.php';
?>
    <main class="login-bg">
      <div class="login-form-area">
        <div class="login-form">
          <div class="login-heading">
            <span>Login</span>
            <p>Enter Login details to get access</p>
          </div>
          <div class="input-box">
            <div class="single-input-fields">
              <label>Username or Email Address</label>
              <input type="text" placeholder="Username / Email address">
            </div>
            <div class="single-input-fields">
              <label>Password</label>
              <input type="password" placeholder="Enter Password">
            </div>
            <div class="single-input-fields login-check">
              <input type="checkbox" id="fruit1" name="keep-log">
              <label for="fruit1">Keep me logged in</label>
              <a href="#" class="f-right">Forgot Password?</a>
            </div>
          </div>
          <div class="login-footer">
            <p>Don’t have an account? <a href="register.php">Sign Up</a> here </p>
            <button class="submit-btn3">Login</button>
          </div>
        </div>
      </div>
    </main>
    <?php include('include/footer.php'); 
        include('include/script.php');
    ?>