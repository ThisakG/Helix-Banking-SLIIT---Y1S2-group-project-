<?php
	include_once 'config.php';
?>

<?php
// Retrieving form data from POST request and assigning to variables
   $FD_Scheme_No = $_POST['field1'];
   $Description =$_POST['field2'];
   $FD_Amount = $_POST['field3'];
   $Interest_rates =$_POST['field4'];
   
   
    //accessing query
    $sql = "INSERT INTO fd_information(`FD_Scheme_No`, `Description`,  `FD_Amount`, `Interest_rates` )
            VALUES ('$FD_Scheme_No', '$Description', '$FD_Amount', '$Interest_rates')";

    // Execute the query and check if the record was successfully inserted
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Record added successfully!')</script>";
        header("Location:FD_Crud.php");
        exit();
    }
    else
    {
        echo "<script>alert('Error in insertion!')</script>";
    }

    //close the connection
    mysqli_close($conn);
?>
