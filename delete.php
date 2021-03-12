<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
</head>
<body>
  
</body>
</html>
<?php
  include ("connect.php");
  $dltId = $_GET['dmId'];
  $query = "DELETE FROM dummy_table WHERE id= '$dltId'";

  $data = mysqli_query($conn, $query);

  if($data){
      echo "<font color='green'>record deleted from table"; 
  }
  else{
      echo "<font color='red'>record not deleted from table";
  }
?>