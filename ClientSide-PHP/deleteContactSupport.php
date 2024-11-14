<?php

if (isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "helix_banking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "DELETE FROM contactus WHERE id = $id";
    $conn->query($sql);
}

header("Location:ContactList.php");
exit;


?>