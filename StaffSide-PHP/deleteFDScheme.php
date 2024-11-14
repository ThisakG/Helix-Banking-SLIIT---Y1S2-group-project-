<?php

include_once 'config.php';

?>

<?php
// Check if 'id' is set in the GET request 
if (isset($_GET['FD_Scheme_No'])) {
    // Get the Item_ID from the URL
    $FD_Scheme_No = $_GET['FD_Scheme_No'];

    // SQL DELETE query to remove the row with the matching Item_ID
    $query = "DELETE FROM fd_information WHERE FD_Scheme_No = '$FD_Scheme_No'";

    // Execute the query
    $data = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($data) {
        echo "<script>alert('Record deleted successfully!');</script>";
        header("Location:FD_Crud.php");
        exit();
    } 
    else 
    {
        echo "<script>alert('Error in deletion!')</script>";
    }  
}
// Close the database connection
mysqli_close($conn);
?>
