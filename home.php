<html>
<head>
    <title>patent & acquisation search application </title>
    <link rel="stylesheet" type="text/css" href="home.css">
      
    
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
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readPatent.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>

<script>
$(document).ready(function(){
	$("#aqua").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readAqua.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box-aqua").show();
			$("#suggesstion-box-aqua").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box-aqua").hide();
}
</script>

<style>
  .frmSearch {background-image: src("img/a.jpeg");
    border-radius:4px;
  overflow: auto; height: 100px;}
  </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
        <a class="navbar-brand text-warning font-weight-bold" href="#">PATENTS</a>
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">ABOUT US</a>
            </li>
            <li class="nav-item dropdown" href="r1.html">
              <a class="nav-link dropdown-toggle" href="companies.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                COMPANIES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="companies.php">TECH MAHENDRA</a>
                <a class="dropdown-item" href="companies.php">MICROSOFT</a>
                <a class="dropdown-item" href="companies.php">INFOSYS</a>
                <a class="dropdown-item" href="companies.php">TCS</a>
                <a class="dropdown-item" href="companies.php">HCL TECHNOLOGIES</a>
                <a class="dropdown-item" href="companies.php">WIPRO</a>
                <a class="dropdown-item" href="companies.php">MPHASIS</a>
                <a class="dropdown-item" href="companies.php">MINDTREE</a>
                <a class="dropdown-item" href="companies.php">L&T INFOTECH</a>
                <a class="dropdown-item" href="companies.php">COGNIZANT</a>
                <a class="dropdown-item" href="companies.php">ACCENTURE</a>
                <a class="dropdown-item" href="companies.php">DELL</a>
                <a class="dropdown-item" href="companies.php">MORE</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                AREAS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">AI/ML</a>
                <a class="dropdown-item" href="#">METAVERSE</a>
                <a class="dropdown-item" href="#">CYBER SECURITY</a>
                <a class="dropdown-item" href="#">AR/VR</a>
                <a class="dropdown-item" href="#">5G</a>
                <a class="dropdown-item" href="#">BLOCK CHAIN</a>
                <a class="dropdown-item" href="#">AUTONOMOUS VECHILE</a>
                <a class="dropdown-item" href="#">DIGITAL TWIN</a>
                <a class="dropdown-item" href="#">DRONE</a>
                <a class="dropdown-item" href="#">ROBOTICS</a>
                <a class="dropdown-item" href="#">STORAGE AREA NETWORK</a>
                <!---<a class="dropdown-item" href="#">PERL</a>
                <a class="dropdown-item" href="#">GROOVY</a>
                <a class="dropdown-item" href="#">LUA</a>
                <a class="dropdown-item" href="#">BASH</a>
                <a class="dropdown-item" href="#">POWERSHELL</a>
                <a class="dropdown-item" href="#">R</a>
                <a class="dropdown-item" href="#">VBA</a>
                <a class="dropdown-item" href="#">EMACS LISP</a>
                <a class="dropdown-item" href="#">GML</a>--->
              

              </div>
 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">CONTACT US</a>
            </li>
           
          </ul>
          
           
  </div>
  <div class="login-container">
            <button type="submit" class="btn btn-outline-secondary my-2 my-sm-0 bg-primary text-white" onclick="window.location.href='login.php'">Login</button>

        </div>
  </div>
      </nav>

    <div class="bgimg">
        <div class="academy-content text-center">
          <br><br>
            <p class="first-data">PATENT & ACQUISITION SEARCH APPLICATION </p>
            <h1 class="second-data" >A patent is an exclusive right granted for an invention,which  is given to a product or a process that  offers a new technical solution to a technical problem</h1>
         <!---<a class="btn btn-primary" href="login.php" role="button">Login</a>--->
        </div>
        </div>
    </div>
  <!---  <br>    --->
    </section>
    <!--form-->
    <section id="form">
    <div class="row" id="banner1-row">
        <div class="col-md-6">
        <form class="form-inline my-2 my-lg-0" action="pat.php" method="get">
          <p>&emsp;&emsp;&emsp;</p>
  <input class="form-control mr-sm-2" name="keyword" placeholder="TechnologyArea/CompanyName" arial-label="Search">
  <button class="btn btn-outline-sucess my-2 my-sm-0 bg-warning text-white" type="submit">Search</button>
</form>
      </div>
     <!--- <div class="col-md-4">
     <p>
        &nbsp;
     </p>
      </div> --->
       <div class="col-md-6">
      <form class="form-inline my-2 my-lg-0" autocomplete="off" action="aquv.php" method="get">
        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
        <input class="form-control mr-sm-2" type="search" placeholder="CompanyName" aria-label="Search" id="aqua" 
        style="overflow:scroll" name="keyword">
        <button class="btn btn-outline-sucess my-2 my-sm-0 bg-warning text-white" type="submit">Search</button>
      
      


        
      </form>
      </div>
      <br>
    </div>
      </section>
     
<!---form
    <form class="form-inline my-2 my-lg-0" action="/action_page.php" >
        <p>&emsp;&emsp;&emsp;</p>
        <div class="form-group">
        <input class="form-control mr-sm-2" type="search" placeholder="Seach for patents" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
       
        </div>
        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
        <div class="form-group">
            <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
            <input class="form-control mr-sm-2" type="search" placeholder="Search for acquisitions" aria-label="Search" >
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
      </form>  --->
     <!----
    <section id="Events">
        <h1 class="text-center">TEAM MEMBERS</h1>
        <div class="container-fluid" id="about-container">
            <div class="row" id="banner-row">
                    <div class="items_list mx-auto">
                    
                    <ul>
                        <li>SRIYA.K(19281A0504)</li>
                        <li>PRANAY.V(19281A0540)</li>
                        <li>ROHITH.G(19281A0550)</li>
                        <li>RASHMIKA.K(19281A0547)</li>
                    </ul>
                    <h2>GUIDE</h2>
                    <li>BHARATHI.R</li>
                </div>
        </div>
        </div>
    </section>  --->
<!--<form method="POST" action="showpatent.php">
  <input type="text" name="keyword2">
  <input type="submit">
</form>-->
    <h1 class="text-left">COMPANIES</h1>
        <div class="container-fluid" id="service-container">
            <div class="row" id="banner-row">
                <div class="col-md-4" id="about-clo1">
                    <img src="img/5.jpg" class="img-fluid rounded mx-auto d-block" alt="..." />
                    <h3>TECH MAHENDRA</h3>
                    <p>IT Company is a leading Company providing IT Services and solutions 
                      that provide a range of 
                      customer-centric services working best for your online business.</p>
                </div>
                <div class="col-md-4" id="about-col2">
                    <img src="img/37.jpg" class="img-fluid rounded mx-auto d-block" alt="..." />
                    <h3>MICROSOFT</h3>
                    <p>A multinational corporation (MNC) is one that has business operations in two or more countries. 
                      These companies are often managed from and have a central 
                      office headquartered in their home country, but with offices worldwide.</p>
                </div>
                <div class="col-md-4" id="aboout-col3">
                    <img src="img/13.jpg" class="img-fluid rounded mx-auto d-block" alt="..." />
                    <h3>CAPGEMINI </h3>
                    <p>Capgemini is a global leader in consulting, digital transformation, technology and engineering services.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- about Us -->
  <section id="about">
    <h1 class="text-center">ABOUT US</h1>
    
    
<div class="academy-content text-center">
<h4 style="font-family:Times New Roman" class="second-data"><p>For any organization to be ahead of competitors in a fast moving digital transformation environment, it is important to protect unique features associated with their products / platforms by filing patents. This will help the organization to set them apart from other competitors and protect their long term revenue streams. Additionally, organizations that are looking to capture new markets / gain competitive edge are also involved in acquiring established companies / start-ups in order to reduce time-to-market.<br></p>
 
<p>Generally, to devise a business strategy, it is important for any organization to know the patents filed by their competitors and acquisitions made in the last few years to get a sense of business / technology areas and markets in which the competitors are focussing. In this context, applications that provide such information at one place will be of much importance for the organizations and have potential to generate high revenues. Keeping this in mind, we have developed a first-of-its-kind “Patent & Acquisition Search Application” that can be leveraged by different organizations to get a sense of patents filed and companies acquired by top 50 Information Technology (IT) companies through our easy-to-use interface.<br></p>
  
<p>We are seasoned professionals with a computer science background with an additional skill-set of Machine Learning (ML) and Artificial Intelligence (AI).<br></p>
  
Want to know more about this application, please reach out to patent search & analytics tool.
</h4>
  </div>
  </section>
 <!--- <hr /> for a horizontal line  --->

    </div>
</div> 
</section>


</body>
</html>