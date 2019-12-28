<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name=viewport>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
  <link href="css/login-page.css" rel="stylesheet">
  <link href="images/favicon.png" rel="shortcut icon" type="image/png">
  <script src="https://use.fontawesome.com/06b9bfb57d.js"></script>
  <title>Daniel Mark</title>
</head>
<body>
  <div class="container login-form-container">
    <form action="login.php" method="post">
      <div class="invalidUserPass"></div>
      <input class="input-box" name="username" id="username" type="text" placeholder="Username"><br>
      <input class="input-box" name="password" id="password" type="password" placeholder="Password"><br>
      <input class="submit-button" name="submit" onclick="return sanitizeLogin()" type="submit" value="Login">

      <script type="text/javascript">
      function sanitizeLogin () {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if(username == "" || password == "") {
          document.getElementById("username").placeholder = "Please enter a valid username.";
          document.getElementById("password").placeholder = "Please enter a valid password.";
          return false;
        }
      }
      </script>
    </form>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"></script>
</body>
</html>
