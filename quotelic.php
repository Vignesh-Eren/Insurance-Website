<?php

$con = mysqli_connect('localhost','root');

if($con){
	   echo"connection successful";
}else{
	echo"no onnection";
}

mysqli_select_db($con,'insurance');

$name=$_POST['name'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$occupation=$_POST['occupation'];
$plan=$_POST['plan'];
$income=$_POST['income'];
$comment=$_POST['comment'];

$query="insert into licquotedata (name,age,mobile,occupation,plan,income,comment)
values('$name','$age','$mobile','$occupation','$plan','$income','$comment')";

echo"$query";

mysqli_query($con,$query);

header('location:lic.php');


?>