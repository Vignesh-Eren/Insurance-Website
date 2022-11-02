<?php
include_once 'connection09.php';
$result = mysqli_query($conn,"SELECT * FROM starquotedata");
?>
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
  <a class="navbar-brand" href="admin.php">INSURANCE SERVICE ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Home<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="quotationadmin.php">Vehicle Quote</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="licadmin.php">LIC Quote</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="staradmin.php">Star Health Quote</a>
      </li>
	  
    </ul>
  </div>
</nav>


<?php
if (mysqli_num_rows($result) > 0) {
?>

<div class="container">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1><b><CENTER>REQUESTED QUOTATION FOR STAR HEALTH POLICY</b></h1>
<p>&nbsp;</p>
<div class="panel panel-default">
<div class="panel-body"> </div>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
	  <th scope="col">AGE</th>
      <th scope="col">MOBILE</th>
	  <th scope="col">OCCUPATION</th>
      <th scope="col">PLAN</th>
	  <th scope="col">INCOME</th>
	  <th scope="col">COMMENT</th>
    </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["mobile"]; ?></td>
	<td><?php echo $row["occupation"]; ?></td>
    <td><?php echo $row["plan"]; ?></td>
	<td><?php echo $row["income"]; ?></td>
    <td><?php echo $row["comment"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



<footer>
		<p class="p-3 bg-dark text-white text-center">
		'Insurance Is The Subject Matter Of Solicitation' |  © 2020 InsuranceService All Rights Reserved</p>
		</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
</html>