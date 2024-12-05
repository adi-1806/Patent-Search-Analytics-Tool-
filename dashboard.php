<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    $upload=move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);

    $sql=mysqli_query($con,"insert into company (company_name, images) values ('$_POST[company]', '$fileName')");

if($sql)
{
        echo '<script> alert("Company Added"); </script>';
}
else
{
    echo '<script> alert("Something Went Wrong"); </script>';
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
              Create Company
            </div>
            <div class="registration_options">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="rleft_body">
                        <label for="">
                            Company Name
                        </label>
                        <br>
                        <label for="">
                          Upload Image
                        </label>
                        <br>
                      
                    </div>
                    <div class="rright_body">
                        <input type="text" name="company" >
                        <br><br>
                        <input type="file" name="file" >
                   
                    </div>
                    <div class="registration_submit">
                        <input type="submit" value="Save" id="save" name="submit">
                     <a  href="view-contact.php">
                    <button type="button" class="btn btn-dark" >Viewcontact

                    
                    </button></a>
                    <a href="logout.php">
                    <input type="button" value="logout" id="logout" name="logout"></a>
</div>
                </form>
            </div>
        </div>
    </div>
</body> 