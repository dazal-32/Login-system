<?php
require('require/connection.php');
$username=$_POST['name'];
$password=$_POST['pass'];
$check=$_POST['c'];
$query="select * from usertable where username='$username'";
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n>0 && $n<2){
    $row=mysqli_fetch_assoc($res);
    $h_p=$row['pass'];
    if(password_verify($password, $h_p)){
        $_SESSION['LOGIN']="YES";
        $_SESSION['NAME']=$row['username'];
        $_SESSION['PASS']=$password;
        if($check=='true'){
            $_SESSION['CHECK']="true";
            echo 0;
        }else{
            echo 1;
        }
    }else{
        echo 2;
    }
    
}else{
    echo 3;
}
?>