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
  <a class="navbar-brand" href="#">INSURANCE SERVICE</a>
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

 <section class="my-5">
   <div class="py-5">
     <h2 class="text-center">Request Quotation</h2>
       </div>
	   <div class="w-50 m-auto">
	    <form action="quotationdata.php" method="post">
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
		
		 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">INSURANCE TYPE</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="comment" id="gridRadios1" value="FULL INSURANCE" checked>
          <label class="form-check-label" for="gridRadios1">
            FULL INSURANCE
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="comment" id="gridRadios2" value="THIRD PARTY INSURANCE">
          <label class="form-check-label" for="gridRadios2">
            THIRD PARTY INSURANCE
          </label>
        </div>
		<div class="form-check">
          <input class="form-check-input" type="radio" name="comment" id="gridRadios3" value="OWN DAMAGE COVER">
          <label class="form-check-label" for="gridRadios3">
            OWN DAMAGE COVER ( if you already have third party insurance )
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>
		<button type="submit" class="btn btn-success">SUBMIT</ button>
		</form>
		</div>
		</section>




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
  <h2 class="text-center">ABOUT US </h2>
  </div>
  <div class="container-fluid">
  <div class="row">
  <div class="col-lg-6 col-lg-6 col-12">
     <img src="images/business.jpg" class="img-fluid aboutimg">
       </div>
	   <div class="col-lg-6 col-lg-6 col-12">
	   <h2 class="display-4"> I am NEW INDIA ASSURANCE agent </h2>
	      <p class="py-3">we provide you all type of insurance at best price . NEW INDIA ASSURANCE is 100 Years old TRUSTED
		     GOVERNMENT COMPANY. INDIA NUMBER 1 INSURANCE COMPANY.
			 </p>
             <a href="https://www.newindia.co.in/" class="btn btn-success"> CLICK HERE FOR OFFICIAL NEW INDIA ASSURANCE WEBSITE </a>    
        </div>
	</div>
 </div>  
</section>
         <section>
		 <img src="images/Nia1.png" class="img-fluid" alt="Responsive image">
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