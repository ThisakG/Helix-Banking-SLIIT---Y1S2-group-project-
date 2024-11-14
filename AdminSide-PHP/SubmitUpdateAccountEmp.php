<?php
include_once 'config.php';

// Check if the form has been submitted 
if ($_GET['Update']) 
{   
    // Retrieve form data from POST request and assign to variables
    $Employee_ID = $_GET['Employee_ID'];
    $Employee_name = $_GET['Employee_name'];
    $Date_of_birth = $_GET['Date_of_birth'];
    $Address = $_GET['Address'];
    $Employee_Email = $_GET["Employee_Email"];
    $user_name = $_GET["username"];
    $pwd = $_GET["password"];
   
    // SQL query to update account information in the account_information
    $query = "UPDATE manage_employee SET  
                Employee_name = '$Employee_name',
                Date_of_birth = '$Date_of_birth', 
                Address = '$Address',
                Employee_Email = '$Employee_Email',
                username = '$user_name',
                password = '$pwd'
                WHERE Employee_ID = '$Employee_ID'";

    // Execute the query and check if the update was successful
    $data = mysqli_query($conn, $query);

    if ($data) {
        // If update is successful
        echo "<script>alert('Record Updated!');</script>";
        header("Location: Manage_Employee_Page.php"); 
    } else {
         // If update is unsuccessful
        echo "<script>alert('Error in update!');</script>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
