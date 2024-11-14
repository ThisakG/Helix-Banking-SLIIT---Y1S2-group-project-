<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "helix_banking";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if the form was submitted using POST method
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from the form fields
    $amount = $_POST['amount'];
    $account_name = $_POST['account_name'];
    $bank = $_POST['bank'];
    $account_number = $_POST['account_number'];
    $description = $_POST['description'];

    //sql queries to insert entered data through the form to the tables in the database
    $sql = "INSERT INTO transfers (amount, account_name, bank, account_number, description)
            VALUES ('$amount', '$account_name', '$bank', '$account_number', '$description')";

    if ($conn->query($sql) === TRUE) {
      echo "Transfer successfully completed."; //when successfully completed
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error; //if there are any errors
    }
  }

  $conn->close();
?>