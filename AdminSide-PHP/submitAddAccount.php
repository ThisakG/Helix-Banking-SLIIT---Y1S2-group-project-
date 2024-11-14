<?php
	include_once 'config.php';
?>

<?php
// Retrieving form data from POST request and assigning to variables
    $Account_Type = $_POST["field1"];
    $Open_Date = $_POST["field2"];
    $Account_Balance = $_POST["field3"];
    $Account_HolderName= $_POST["field4"];
    $Account_HolderMail = $_POST["field5"];
    $Account_HolderNumber= $_POST["field6"];

    //accessing query
    $sql = "INSERT INTO account_Information(Account_Type, Open_Date, Account_Balance, Account_HolderName, Account_HolderMail, Account_HolderNumber)
            VALUES ( '$Account_Type', '$Open_Date', '$Account_Balance', '$Account_HolderName', '$Account_HolderMail', '$Account_HolderNumber')";

    // Execute the query and check if the record was successfully inserted
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Record added successfully!')</script>";
        header("Location:Manage_Acc_Page.php");
        exit();
    }
    else
    {
        echo "<script>alert('Error in insertion!')</script>";
    }

    //close the connection
    mysqli_close($conn);
?>
