<?php
  $connect=mysqli_connect('localhost','root');
  mysqli_select_db($connect,'test');
  $name=$_POST['nm'];
  $email=$_POST['em'];
  $num=$_POST['nr'];
  $textarea=$_POST['tx'];
  $query="INSERT INTO `collectData`(`name`,`number`,`email`,`textarea`) VALUES ('$name','$num','$email','$textarea')";
  mysqli_query($connect,$query);
  echo "Data has been sent";
?>