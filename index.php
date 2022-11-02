<!DOCTYPE html>
<html>
<head>
  <title>INSURANCE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">INSURANCE SERVICE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Vehicle Insurance
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="typesofvehicle.php">Types of Vehicle Insurance</a>
          <a class="dropdown-item" href="quote.php">Request Quotation</a>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          RC and Insurance Detail
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://www.uiic.in/vahan/iib_query.jsp" target="_blank" rel="noopener noreferrer">Insurance Detail</a>
          <a class="dropdown-item" href="https://vahan.nic.in/nrservices/faces/user/searchstatus.xhtml" target="_blank" rel="noopener noreferrer">RC Detail</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="lic.php">LIC</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="star.php">STAR HEALTH</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
	  
    </ul>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/motor-insurance.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/protection.png" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/car-insurance.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
   <div class="py-5">
     <h2 class="text-center">OUR SERVICES</h2>
       </div>
          <div class="container-fluid">
             <div class="row">
               <div class="col-lg-4 col-md-4 col-12">
                  <div class="card" ">
                     <img class="card-img-top" src="images/NIA logo.jpg" alt="Card image" height="200">
                        <div class="card-body">
                          <h4 class="card-title">NEW INDIA ASSURANCE CO LTD</h4>
                            <p class="card-text"> INDIA'S BEST MOTOR INSURACE</p>
                              <a href="https://www.newindia.co.in/" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Visit Site</a>
                        </div>
                   </div>
               </div>
			   
			    <div class="col-lg-4 col-md-4 col-12">
                  <div class="card" ">
                     <img class="card-img-top" src="images/LIC_Logo.jpg" alt="Card image" height="200">
                        <div class="card-body">
                          <h4 class="card-title">LIFE INSURACE CORPORATION OF INDIA</h4>
                            <p class="card-text"> INDIA'S BEST LIFE INSURANCE</p>
                              <a href="https://www.licindia.in/" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Visit Site</a>
                        </div>
                   </div>
               </div>
			   
			    <div class="col-lg-4 col-md-4 col-12">
                  <div class="card" ">
                     <img class="card-img-top" src="images/STAR INSURACE LOGO.jpg" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">STAR HEALTH INSURANCE CO LTD</h4>
                            <p class="card-text"> INDIA'S BEST HEALTH INSURACE</p>
                              <a href="https://www.starhealth.in/" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Visit Site</a>
                        </div>
                   </div>
               </div>
			</div>
        </div>
  </section>
  
 
			  
			  <section class="my-5">
   <div class="py-5">
     <h2 class="text-center">FORM</h2>
	 <h4 class="text-center">FILL THE FORM AND YOU WILL BE CONTACTED DURING EXPIRY OF YOUR CURRENT POLICY</h4>
       </div>
	   <div class="w-50 m-auto">
	    <form action="userinfo.php" method="post">
		<div class="form-group">
		<label>NAME</label>
		<input type="text" name="name" autocomplete="off" class="form-control" required>
		</div>
		
		<div class="form-group">
		<label>MOBILE NUMBER</label>
		<input type="text" name="mobile" autocomplete="off" class="form-control" required>
		</div>
		
		<div class="form-group">
		<label>VEHICLE REGISTRATION NUMBER</label>
		<input type="text" name="vrn" autocomplete="off" class="form-control" required>
		</div>
		
		<div class="form-group">
		<label>COMMENT</label>
		<textarea class="form-control" name="comment">
		</textarea>
		</div>
		<button type="submit" class="btn btn-success">SUBMIT</ button>
		</form>
		</div>
		</section>
		
		<section class="my-5">
 <div class="py-5">
  <h2 class="text-center">ABOUT US </h2>
  </div>
  <div class="container-fluid">
  <div class="row">
  <div class="col-lg-6 col-lg-6 col-12">
     <img src="images/business.jpg" class="img-fluid aboutimg">
       </div>
	   <div class="col-lg-6 col-lg-6 col-12">
	   <h2 class="display-4" style="font-size:30px;"> I am NEW INDIA ASSURANCE agent </h2> 
	      <p class="py-3" style="font-size:15px;">WE PROVIDE ALL TYPE OF INSURANCE AT BEST PRICE. NEW INDIA ASSURANCE is 100 Years old TRUSTED
		     GOVERNMENT COMPANY. INDIA NUMBER 1 INSURANCE COMPANY. You have spent lakhs on the vehicle and to ensure it is protected against any kind of damage [accident or calamities] would be your number one priority.
			 This will ensure you do away with those sleepless nights and anxiety attacks. Understanding the importance of having a good protection plan in place, We offers comprehensive vehicle Insurance packages.
			 What is more we have gone one step further with our Car Shield options whereby customers can pick up add on covers as well.
			 </p>
			  <h2 class="display-4" style="font-size:30px;">Call : 7639653965 ; 9442750083</h2>
             <a href="https://www.newindia.co.in/" target="_blank" rel="noopener noreferrer" class="btn btn-success"> CLICK HERE FOR OFFICIAL NEW INDIA ASSURANCE WEBSITE </a>    
        </div>
	</div>
 </div>  
</section>

<p>&nbsp;</p>
<section>
<div class="container-fluid">
 <h2 class="text-center">OFFICE LOCATION</h2>
  <h3 class="text-center">SRI SAI INSURANCE SERVICE</h3>
 <div class="center">
<div class="mapouter"><div class="gmap_canvas"><iframe width="1330" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=sri%20sai%20insurance%20service%20madurai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/maps/31"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1330px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1330px;}</style></div></div>
</div>
</div>
</section>
<p>&nbsp;</p>

<p>&nbsp;</p>
         <section>
		 <img src="images/new india world18.png" class="img-fluid" alt="Responsive image">
		 </section>
		<footer>
		<p class="p-3 bg-dark text-white text-center">
		'Insurance Is The Subject Matter Of Solicitation' |  © 2020 InsuranceService All Rights Reserved</p>
		</footer>
	   
			  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>