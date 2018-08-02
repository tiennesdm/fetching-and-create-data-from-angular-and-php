



<?php

$con=mysqli_connect('localhost','root','') or die(mysql_error());
 $db =  mysqli_select_db($con,'joblister') or die(mysql_error());
$data = json_decode(file_get_contents("php://input"));
$fname = mysqli_real_escape_string($con,$data->first_name);
$lname = mysqli_real_escape_string($con,$data->last_name);
$username = mysqli_real_escape_string($con,$data->username);


mysqli_query($con,"INSERT INTO users(fname,lname,username)VALUES ('$fname', '$lname','$username')");
?>