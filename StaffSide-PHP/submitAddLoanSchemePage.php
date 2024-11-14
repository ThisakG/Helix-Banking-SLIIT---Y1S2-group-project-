<?php
	include_once 'config.php';
?>

<?php
// Retrieving form data from POST request and assigning to variables
   $loanSch_No = $_POST['field1'];
   $Description =$_POST['field2'];
   $Loan_Amount = $_POST['field3'];
   $Installement_Rates =$_POST['field4'];
   $Loan_Status =$_POST['field5'];
   
    //accessing query
    $sql = "INSERT INTO loan_schemes(`loanSch_No`, `Description`, `Loan_Amount`, `Installement_Rates`, `Loan_Status`)
            VALUES ('', '$Description', '$Loan_Amount', '$Installement_Rate', '$Loan_Status')";

  // Execute the query and check if the record was successfully inserted
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Record added successfully!')</script>";
        header("Location:loan_page.php");
        exit();
    }
    else
    {
        echo "<script>alert('Error in insertion!')</script>";
    }

    //close the connection
    mysqli_close($conn);
?>
