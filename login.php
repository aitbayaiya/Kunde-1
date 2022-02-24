<?php
  require_once 'inc/header.php';
  require_once 'config/functions.php';
  login_user();
?>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <?php
              if(isset($_SESSION['MESSAGE'])){
                display_message();
              }
            ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username or Email" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" value="Login" name="btn_login" class="btn solid" />
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Then hurry up to enjoy all features of all at once Daily web.
              Join us Today and have fun!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              <a href="index.php" style="text-decoration: none;color: white;">Sign Up</a>
            </button>
          </div>
          <img src="img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            Welcome back!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              <a href="index.php" style="text-decoration: none;color: white;">Sign Up</a>
            </button>
          </div>
          <img src="img/signup.svg" class="image" alt="" />
        </div>
      </div>
    </div>
<?php require_once 'inc/footer.php';?>
