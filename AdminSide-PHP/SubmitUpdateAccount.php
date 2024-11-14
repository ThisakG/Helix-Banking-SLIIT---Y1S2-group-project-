<?php
	include_once 'config.php';
?>

<?php
 // Check if the form has been submitted 
	if (isset($_POST['Update']))
    {   
        // Retrieve form data from POST request and assign to variables
        $Account_No = $_POST['Account_No'];
	    $Account_Type =$_POST['Account_Type'];
        $Open_date = $_POST['Open_Date'];
	    $Account_Balance = $_POST['Account_Balance'];
        $Account_HolderName = $_POST['Account_HolderName'];
        $Account_HolderMail = $_POST['Account_HolderMail'];
        $Account_HolderNumber = $_POST['Account_HolderNumber'];
	   
        // SQL query to update account information in the account_information
        $query = "UPDATE account_information SET 
                    Account_Type = '$Account_Type',
                    Open_Date = '$Open_date',
                    Account_Balance = '$Account_Balance', 
                    Account_HolderName = '$Account_HolderName',
                    Account_HolderMail = '$Account_HolderMail',
                    Account_HolderNumber = '$Account_HolderNumber'
                    WHERE Account_No  = '$Account_No'";

         // Execute the query and check if the update was successful
        $data = mysqli_query($conn, $query);

        if ($data)
        {
            // If update is successful
            echo "<script> alert('Insert successful') </script>";
            Header ('Location:Manage_Acc_Page.php'); 
        }
        else{
            // If update is unsuccessful
            echo "<script>alert('Error in update!')</script>";
        }
    }

     // Close the database connection
    mysqli_close($conn);
?>