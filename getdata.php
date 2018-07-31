<?php
$con=mysqli_connect('localhost','root','') or die(mysql_error());
 $db =  mysqli_select_db($con,'joblister') or die(mysql_error());
 $sel = mysqli_query($con,"select * from users");
 $data = array();

 while ($row = mysqli_fetch_array($sel)) {
  $data[] = array("id"=>$row['id'],"fname"=>$row['fname'],"lname"=>$row['lname'],"username"=>$row['username']);
 }
 echo json_encode($data);




 ?>
