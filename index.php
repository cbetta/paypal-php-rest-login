<?php
require_once 'bootstrap.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <?php if($_SESSION['name']) { ?>
      Hi <?php echo $_SESSION['name'] ?> <br>
      <a href="/logout.php">Logout</a>
    <?php } else { ?>
        <span id="myContainer"></span>
        <script src="https://www.paypalobjects.com/js/external/api.js"></script>
        <script>
        paypal.use( ["login"], function(login) {
          login.render ({
            "appid": "ATaIxhBBRK_7ufNny0euc1nzXvGU56ClU-FE73vtNefqkrxy7bNQQ7tg2aeB",
            "authend": "sandbox",
            "scopes": "openid profile",
            "containerid": "myContainer",
            "locale": "en-us",
            "returnurl": "http://127.0.0.1:9292/return.php"
          });
        });
        </script>
    <?php } ?>
  </body>
</html>
