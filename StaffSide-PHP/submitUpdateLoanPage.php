<?php
	include_once 'config.php';
?>

<?php
// Check if the form has been submitted 
	if ($_POST['Update'])
    {   
        // Retrieve form data from POST request and assign to variables
        $loanSch_No = $_POST['loanSch_No'];
	    $Description = $_POST['Description'];
        $Loan_Amount = $_POST['Loan_Amount'];
	    $Installement_Rates = $_POST['Installement_Rates'];
        $Loan_Status = $_POST['Loan_Status'];
	   
        // SQL query to update account information in the account_information
        $query = "UPDATE loan_schemes SET 
                    Description = '$Description', 
                    Loan_Amount = '$Loan_Amount',
                    Installement_Rates = '$Installement_Rates', 
                    Loan_Status = '$Loan_Status'
                    WHERE loanSch_No  = '$loanSch_No'";

        // Execute the query and check if the update was successful
        $data = mysqli_query($conn, $query);

        if ($data)
        {
            // If update is successful
            echo "<script> alert('Insert successful')</script>";
            header("Location:loan_page.php");
        }
        else{
             // If update is unsuccessful
            echo "<script>alert('Error in update!')</script>";
        }
    }

    // Close the database connection
    mysqli_close($conn);
?>