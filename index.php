<?php
require('assets/database/require/connection.php');
$name='User';
if(isset($_SESSION['DSC'])){
  setcookie('une',' ',10);
  setcookie('pwd',' ',10);
  session_destroy();
  $loginbtn="<span onclick='redirect_l()'> Login</span>";
}else{
if(isset($_COOKIE['une']) && isset($_COOKIE['pwd'])){
  $y=$_COOKIE['une'];
  $z=$_COOKIE['pwd'];
  $query="select * from usertable where username='$y'";
  $res=mysqli_query($con,$query);
  $n=mysqli_num_rows($res);
  if($n>0 && $n<2){
    $row=mysqli_fetch_assoc($res);
    $h_p=$row['pass'];
    if(password_verify($z, $h_p)){
      $loginbtn="<span onclick='logout()'>Logout</span>";
      $name=$_COOKIE['une'];
    }else{
      $loginbtn="<span onclick='redirect_l()'> Login</span>";
    }
  }
}else{
  if(isset($_SESSION['LOGIN'])){
    if(isset($_SESSION['CHECK'])){
      if($_SESSION['CHECK']=="true"){
        $username=$_SESSION['NAME'];
        $password=$_SESSION['PASS'];
        setcookie('une',$username,time()+60*60*24*20);
        setcookie('pwd',$password,time()+60*60*24*20);
      }
    }
    $name=$_SESSION['NAME'];
    $loginbtn="<span onclick='logout()'>Logout</span>";
   }else{
     setcookie('une',' ',10);
     setcookie('pwd',' ',10);
    $loginbtn="<span onclick='redirect_l()'> Login</span>";
   }
 }
}
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
    <script src="assets/js/sweetalert.min.js"></script>
  </head>
  <body>
    <section>
      <header>
        <div class="logo" onclick="redirect(window.location)">
        <img src="assets/images/logo.png" alt="">
        </div>
        <?php echo $loginbtn; ?>
      </header>
      <div class="row">
        <div class="side left">
          <h1 class="Left">Welcome<span> <?php echo $name; ?></span></h1>
          <p class="Up">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut sint
            aspernatur reiciendis ab iure commodi architecto facilis. Labore,
            commodi earum? Nisi, ex exercitationem illo ratione necessitatibus
            placeat quod nihil doloremque?
          </p>
          <button class="btn Up">Drive in</button>
        </div>
        <div class="side right">
          <img src="assets/images/thumb.png" alt="" class="Right" />
        </div>
      </div>
    </section>
    <script>
    </script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
