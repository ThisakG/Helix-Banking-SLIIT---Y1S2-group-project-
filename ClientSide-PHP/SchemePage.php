<?php
//database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helix_banking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve all records from the 'fd_schemes' table
$sql = "SELECT * FROM fd_schemes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FD Schemes | Helix Bank</title>
    <link rel="stylesheet" href="HomePageStyles.css">
    <style>
        /*CSS for styling the body content */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .fd-list {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .fd-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .fd-item:last-child {
            border-bottom: none;
        }
        .fd-item b {
            color: #007BFF;
        }
    </style>
</head>
<body>

<header>
<div class="user-image">
            <img src="Images/logo_2.png" alt="LOGO">
        </div>
    <h1>HELIX BANKING</h1>
    <div class="user">
    <div class="user-image">
            <img src="Images/profile_icon5.png" alt="LOGO">
        </div>
        <div class="user-info">
            <span>Welcome User!</span><br>
            <a href="#" class="logout">Log out</a>
        </div>
    </div>
</header>

<main>
    <h1>Fixed Deposit (FD) Schemes</h1>

    <div class="fd-list">
        <?php
         // Check if there are any results in the query
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='fd-item'><b>Scheme Name:</b> " . $row["scheme_name"] . " | <b>Interest Rate:</b> " . $row["interest_rate"] . "% | <b>Duration:</b> " . $row["duration"] . " months</div>";
            }
        } else {
            echo "<div class='fd-item'>No FD schemes available.</div>";
        }
        ?>
    </div>
</main>

<footer>
    <div class="footer-links">
        <a href="#">Home</a>
        <a href="#">Contact us</a>
        <a href="#">Terms & Conditions</a>
    </div>
    <div class="copyright">
        <p>&copy; 2024 Helix Bank. All rights reserved.</p>
    </div>
</footer>
<?php
$conn->close();
?>
</body>
</html>