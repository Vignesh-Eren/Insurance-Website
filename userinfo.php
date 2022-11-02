<?php

$con = mysqli_connect('localhost','root');

if($con){
	   echo"connection successful";
}else{
	echo"no onnection";
}

mysqli_select_db($con,'insurance');

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$vrn=$_POST['vrn'];
$comment=$_POST['comment'];

$query="insert into userinfodata (name,mobile,vrn,comment)
values('$name','$mobile','$vrn','$comment')";

echo"$query";

mysqli_query($con,$query);

header('location:index.php');


?>