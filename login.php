<?php
require('assets/database/require/connection.php');
if(isset($_SESSION['LOGIN'])){
    ?>
    <script>
        window.location.href='index.php';
    </script>
    <?php
}else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Project</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/js/sweetalert.min.js"></script>
  </head>
  <body>
    <div class="modelcont" id="glass">
      <div class="info">
        <h2>User 1</h2> 
        <br>
        <h4>Username: <span id="u1">userone</span> </h4>
        <br>
        <h4>Password:  <span id="p1">userone@</span></h4>
        <button class="use" onclick="pass('u1','p1')">Use</button>
        <br>
        <h2>User 2</h2> 
        <br>
        <h4>Username: <span id="u2">usertwo</span></h4>
        <br>
        <h4>Password: <span id="p2">usertwo@</span></h4>
        <button class="use" onclick="pass('u2','p2')">Use</button>
        <br>
        <h2>User 3</h2> 
        <br>
        <h4>Username: <span id="u3">userthree</span> </h4>
        <br>
        <h4>Password: <span id="p3">userthree@</span> </h4>
        <button class="use" onclick="pass('u3','p3')">Use</button>
        <button onclick="clse()">Close</button>
      </div>
    </div>
    <div class="section">
      <header>
        <div class="logo Left" onclick="redirect('index.php')"></div>
      </header>
      <h2 class="Right">Login</h2>
      <div class="container Up">
        <label for="username">Username <span>*</span></label>
        <br>
        <input class="input" type="text" placeholder="Enter Username" id="username">
        <br>
        <label for="password">Password <span>*</span></label>
        <br>
        <input class="input" type="password" placeholder="Enter Password" id="password">
        <br>
        <input type="checkbox" id="check"><label class="label" for="remenber">Remember me</label>
        <button onclick="login()">Login</button>
      </div>
      <div class="credentials Up" onclick="showcred()">
        Credentials
      </div>
    </div>
    <form action="" method="post"></form>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
<?php 
}
?>