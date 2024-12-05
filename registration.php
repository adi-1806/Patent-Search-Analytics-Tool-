<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $check=mysqli_query($con,"select * from login where email='$_POST[email]'");
    $count=mysqli_num_rows($check);
    if($count==0)
{
    $sql=mysqli_query($con,"insert into login (username, password, email) values ('$_POST[username]', '$_POST[password]', '$_POST[email]')");


        echo '<script> alert("Registration Done"); </script>';
    }
    else
    {
        echo '<script> alert("Email Already exist"); </script>';
}

}

?>

<html >
<head>
        <link rel="stylesheet" type="text/css" href="registration.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="main">
        <div class="inner">
            <div class="welcome">
                CREATE ACCOUNT
            </div>
            <div class="registration_options">
                <form action="" method="post">
                    <div class="rleft_body">
                        <label for="">
                            Enter your username
                        </label>
                        <br>
                        <label for="">
                            Enter your email 
                        </label>
                        <br>
                        <label for="">
                            Enter your password 
                        </label>
                        <br>
                        <label for="">
                            Enter password again
                        </label>
                    </div>
                    <div class="rright_body">
                        <input type="text" name="username" >
                        <br><br>
                        <input type="email" name="email" id="">
                        <br><br>
                        <input type="password" name="password" id="">
                        <br><br>
                        <input type="text" name="cpassword" id="">
                    </div>
                    <div class="registration_submit">
                        <input type="submit" value="Save" id="save" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body> 