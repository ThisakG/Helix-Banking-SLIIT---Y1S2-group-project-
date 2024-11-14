<?php
  
  require 'config.php';
  
  // Retrieve and store form data from the POST method
  $AccType = $_POST["AccType"];
  $AccNumber = $_POST["AccNo"];
  $Branch = $_POST["branch"];
  $Name = $_POST["name"];
  $Address = $_POST["address"];
  $NIC = $_POST["nic"];
  $PhoneNo = $_POST["phone"];
  $Email = $_POST["email"];
  $Username = $_POST["username"];

  // Retrieving and storing password confirmation
  $confirmPassword = isset($_POST["confirmPassword"]) ? $_POST["confirmPassword"] : '';

// SQL query to insert data into the customer table
  $sql = "INSERT INTO customer VALUES ('$AccType','$AccNumber','$Branch','$Name','$Address','$NIC','$PhoneNo','$Email','$Username','$confirmPassword') ";

    // Execute the SQL query
  if($conn->query($sql))
  {
    echo "Insert Successful";
    header('Location: helixBanking_CustomerLogin.php');
    exit; 
  }
  else
  {
    echo "Error".$conn->error;
  }

  //closing database connection
 $conn->close();

?>