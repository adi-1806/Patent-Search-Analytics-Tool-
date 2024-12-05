<?php
session_start();
include_once 'connection.php';
if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$result=mysqli_query($con,"SELECT * FROM login WHERE username='$username' AND password='$password'");
$row=mysqli_num_rows($result);
if($row==1){
$_SESSION['id']=$row[0];
$_SESSION['username']=$row[1];

header("Location: dashboard.php");
}else{
echo " Invalid login Try Again";
}
 } 
?>






<hmtl>
    <head>
      <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
      <br />
      <br />
      
      <div class="login-card">
      <div class="log_head">
      <h1>ADMIN LOGIN</h1>
      <img src="img/51.jpg" alt="lock" class="lock" />
      </div>
      
      <div class="log_body">
      <form action="#" method="post">
       <table width="200" border="0" align="center">
        <tr>
         
          <td><input type="text" placeholder="User Name" name="username"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><input type="password" placeholder="Password" name="password"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
        <td><a href="forgot.html" >Forgot Password?</a>
         </td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td> <input name="remember" type="checkbox" value="Remember Me"> Keep me logged in</td>
        </tr>
        <tr>
         <td><input type="submit" name="login" class="login-submit" value="login"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
         <td>create a account ? <a href="registration.php" rel="register">Sign Up</a></td>
        </tr>
      </table>
      
      </form> 
      </div>
      
      </div>
      </body>
      </html>