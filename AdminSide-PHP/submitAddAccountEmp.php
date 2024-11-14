<?php
	include_once 'config.php';
?>

<?php
// Retrieving form data from POST request and assigning to variables
    $Employee_ID = $_POST["field1"];
    $Employee_name= $_POST["field2"];
    $Date_of_birth = $_POST["field3"];
    $Address= $_POST["field4"];
    $Employee_Email = $_POST["field5"];
    $username = $_POST["field6"];
    $password = $_POST["field7"];

    //accessing query
    $sql = "INSERT INTO manage_employee(Employee_ID, Employee_name, Date_of_birth, Address, Employee_Email, username, password )
            VALUES ('$Employee_ID', '$Employee_name', '$Date_of_birth', '$Address', '$Employee_Email', '$username', '$password')";

    // Execute the query and check if the record was successfully inserted
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Record added successfully!')</script>";
        header("Location:Manage_Employee_Page.php");
        exit();
    }
    else
    {
        echo "<script>alert('Error in insertion!')</script>";
    }

    //close the connection
    mysqli_close($conn);
?>
