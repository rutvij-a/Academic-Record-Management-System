<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
  </style>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo URL; ?>/assets/css/signup.css" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Login Form</div>
      <div class="title signup">Signup Form</div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>
        <div class="slider-tab"> </div>
      </div>
      <div class="form-inner">
        <form class="login" id="login">
          <div class="field">
            <input name="Email" type="text" placeholder="Email Address" required>
          </div>
          <div class="field">
            <input name="PASSWORD" type="password" placeholder="Password" required>
          </div>
          <div class="pass-link">
            <a href="forgot password.html">Forgot password?</a>
          </div>
          <div class="field btn">
            <div class="btn-layer">
            </div>
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">
            Not a member? <a href="home.html">Signup now</a></div>
        </form>
        <form class="signup" id="signup">
          <div class="field">
            <input name="Reg_id" type="text" placeholder="Registeration ID" required>
          </div>
          <div class="field">
            <input name="Email" type="text" placeholder="Email Address" required>
          </div>
          <div class="field">
            <input name="PASSWORD" type="password" placeholder="Password" required>
          </div>
          <div class="field">
            <input name="CPASSWORD" type="password" placeholder="Confirm password" required>
          </div>
          <div class="field">
            <input name="Branch" type="text" placeholder="Branch" required>
          </div>
          <div class="field">
            <input name="Address" type="text" placeholder="Address" required>
          </div>
          <div class="field">
            <input name="Name" type="text" placeholder="Name" required>
          </div>
          <div class="field">
            <input name="phn_no" type="text" placeholder="Phone No" required>
          </div>
          <div class="field btn">
            <div class="btn-layer">
            </div>
            <input type="submit" value="Signup">
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  require "scripts.php";
  ?>
  <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    const URL = "<?php echo URL; ?>";
    signupBtn.onclick = (() => {
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (() => {
      signupBtn.click();
      return false;
    });
    $(document).on('submit', '#login', function(e) {
      e.preventDefault();
      var data = $(this).serializeArray();
      data.push({
        name: "method",
        value: 'login'
      });
      $.ajax({
        url: URL + '/api/user',
        type: 'POST',
        data: data,
        dataType: 'JSON',
        success: function(response) {
          var status = response.status;
          if (response.status == "success") {
            window.location = URL + '/dashboard';
          }
        },
        error: function(response) {
          console.log(response);
        }
      });
    });
    $(document).on('submit', '#signup', function(e) {
      e.preventDefault();
      var data = $(this).serializeArray();
      data.push({
        name: "method",
        value: 'signup'
      });
      $.ajax({
        url: URL + '/api/user',
        type: 'POST',
        data: data,
        dataType: 'JSON',
        success: function(response) {
          var status = response.status;
          if (response.status == "success") {
            alert("Pls Login In.");
          }
        },
        error: function(response) {
          console.log(response);
        }
      });
    });
  </script>
</body>

</html>