<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign Up Now</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="box-form">
    <div class="left">
      <div class="overlay">
        <h1>Welcome User</h1>
        <span>
          <p>Sign Up with social media</p>
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Sign Up with Twitter</a>
        </span>
      </div>
    </div>

    <div class="right">
      <h5>SignUp</h5>
      <p style="font-weight:bold;">Already have an account?<a href="/E-Commerce/User/index.php"
          style="text-decoration:none; font-weight:bold; font-size:large; cursor:pointer;">Login Now</a></p>

      <form action="Sql/userreg.php" class="form" method="post" onsubmit="return validatePassword()">

        <div class="inputs">
          <input type="text" name="name" placeholder="Customer Name" required>
          <br>
          <input type="email" name="umail" placeholder="Email" required>
          <br>
          <input type="tel" name="uphone" placeholder="Phone No." required>
          <br>
          <input type="text" name="uname" placeholder="User Name" required>
          <br>
          <input type="password" id="pass" name="pass" placeholder="Password" required>
          <br>
          <input type="password" id="confirm_pass" name="confirm_pass" placeholder="Confirm Password" required>

          <br><br>
          <div class="remember-me--forget-password">
            <label>
              <input type="checkbox" name="item" checked />
              <span class="text-checkbox">Remember me</span>
            </label>
          </div>

          <br>
          <button type="submit" name="ureg" value="ulog" style="cursor:pointer;">Sign Up</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function validatePassword() {
      const pass = document.getElementById("pass").value;
      const confirmPass = document.getElementById("confirm_pass").value;

      if (pass !== confirmPass) {
        alert("Passwords do not match. Please try again.");
        return false;
      }
      return true;
    }
  </script>
</body>

</html>
