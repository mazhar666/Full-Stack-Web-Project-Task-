<?php
      $host = "localhost";
      $user = "root";
      $pass = "";
      $dbname = "test";
  
      $con = mysqli_connect($host,$user,$pass,$dbname);
      if($con)
      {
      echo "Connected";
      }
      else
      {
      echo "Not Connected";
      }


    if (isset($_POST['submit'])) {
 
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];

 
        $insertquery = "INSERT INTO users(fname,lname,email) VALUES('$firstName','$lastName','$email')";
        mysqli_query($con, $insertquery);
        
        
    }
?>