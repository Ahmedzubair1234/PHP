<?php 

$connection = mysqli_connect('localhost','root','','users');

  if (!$connection) {
    die("Not Connected.". mysqli_error());
  }


  $query = "DELETE FROM user_info WHERE id = 23"



?>