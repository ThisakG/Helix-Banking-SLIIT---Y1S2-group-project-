<?php

include_once 'config.php';

?>

<?php
// Check if 'id' is set in the GET request 
if (isset($_GET['Employee_ID'])) {
    // Get the Item_ID from the URL
    $Employee_ID = $_GET['Employee_ID'];

    // SQL DELETE query to remove the row with the matching Item_ID
    $query = "DELETE FROM manage_employee WHERE Employee_ID = '$Employee_ID'";

    // Execute the query
    $data = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($data) {
        echo "<script>alert('Record deleted successfully!');</script>";
        header("Location:Manage_Employee_Page.php");
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
