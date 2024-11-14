<?php
	include_once 'config.php';
?>

<?php
// Check if the form has been submitted 
	if ($_POST['Update'])
    {   
        // Retrieve form data from POST request and assign to variables
        $FD_Scheme_No = $_POST['FD_Scheme_No'];
	    $Description = $_POST['Description'];
        $FD_Amount = $_POST['FD_Amount'];
	    $Interest_Rates = $_POST['Interest_Rates'];
	   
          // SQL query to update account information in the account_information
        $query = "UPDATE fd_information SET 
                    Description = '$Description', 
                    FD_Amount = '$FD_Amount',
                    Interest_Rates = '$Interest_Rates'
                    WHERE FD_Scheme_No  = '$FD_Scheme_No'";

        // Execute the query and check if the update was successful
        $data = mysqli_query($conn, $query);

        if ($data)
        {
            // If update is successful
            echo "<script> alert('Insert successful')</script>";
            header("Location:FD_Crud.php");
        }
        else{
             // If update is unsuccessful
            echo "<script>alert('Error in update!')</script>";
        }
    }

    // Close the database connection
    mysqli_close($conn);
?>