<?php
include('connection.php');

function companycount($id)
{
  include('connection.php');
  $sql=mysqli_query($con,"SELECT * FROM `patent_list_companies` where COMPANY='$id';
  ");
  $count=mysqli_num_rows($sql);
  return $count;
}

?>


<html>
<head>
    <title>OPEN SOURCE PATENTS</title>
    <link rel="stylesheet" type="text/css" href="companies.css">
     <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <link rel="stylesheet" href="samms.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navabar-fixed-top">
        <a class="navbar-brand text-warning font-weight-bold" href="#">PATENTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="home.php">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" href="home.php">ABOUT US</a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="#companies">COMPANIES</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#scriptinglanguages">AREAS</a>
                  
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home.php" href="#contactus">CONTACT US</a>
          </li>

       </ul>
       </div>
       </nav>

       <h1 class="text-left">COMPANIES</h1>
        <div class="container-fluid" id="service-container">
            <div class="row" id="banner-row">
           <?php
$sql=mysqli_query($con,"select * from company");
while($fetch=mysqli_fetch_array($sql))
{
           ?>
           
           
           
            <div class="col-md-4" id="about-clo1">
                  <img src="uploads/<?php echo $fetch['images']; ?> " class="img-fluid rounded mx-auto d-block  align-items-center" alt="..." />
                  <p> <?php echo companycount($fetch['company_name']); ?>
                  </div>


<?php } ?>

                  
                                                                          </body>
</html>
                              
                          
                    
                    






                 
                



        
       
   