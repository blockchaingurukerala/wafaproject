<?php
$str = $_REQUEST['str'];
insertNew($str);
function insertNew($str) {
  $conn = mysqli_connect("localhost","root","", "robodb");
  $query = "INSERT INTO rating (id,roboname,robopurpose,roboseller,customer,rating) VALUES ";
  $sql = $query.$str;
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn); 
  echo $result;
 }
?>


