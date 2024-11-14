<?php
include('config.php');

// Check if the request method is POST to handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     // Retrieve form data and store it in variable
    $wallet_type = $_POST['wallet_type'];
    echo "<br>";
    $wallet_number = $_POST['wallet_number'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

     // Prepare SQL statement with placeholders for inserting data into the databas
    $sql = "INSERT INTO mobile_wallet_transactions (wallet_type, wallet_number, amount, description) 
            VALUES (?, ?, ?, ?)";
    
    // Bind the form data to the prepared statement 
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssds", $wallet_type, $wallet_number, $amount, $description);
    
    if ($stmt->execute()) {
        echo "Mobile Wallet Transaction Successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mobile Wallet Integration</title>
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/HomepageStyles.css">
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
                <span>Welcome User!</span>
                <br>
                <a href="#" class="logout">Log out</a>
            </div>
        </div>

        </div>
    </header>

    <nav>
        <ul>
            <li ><a href="HomePage.php">Home</a></li>

            <li ><a href="UserAccountPage.php">My Account</a></li>

            <!-- Services dropdown -->
            <li class="dropdown">
                <a href="services.asp" class="dropbtn">Services</a>
                <div class="dropdown-content">
                    <a href="Fund_Transfer.php">Fund transfers</a>
                    <a href="Bill payment.php">Bill Payments</a>
                    <a href="Loan Schemas.php">Loan Schemes</a>
                    <a href="FD.php">Fixed Deposit (FD) Schemes</a>
                </div>
            </li>

            <!-- Contact Us dropdown -->
            <li class="dropdown">
                <a href="ContactUs.php" class="dropbtn">Contact Us</a>
                <div class="dropdown-content">
                    <a href="ContactUs.php">Contact Us</a>
                    <a href="about.php">About Us</a>
                    <a href="Customer_Support.php">Customer Support</a>
                </div>
            </li>

            <li><a href="term.php">Terms & Conditions</a></li>
        </ul>
    </nav>

     <!-- Form for mobile wallet transfer -->
    <div class="cont-1">
    <h2>Mobile Wallet Transfer</h2><br>
    <form action="mobile_wallet_integration.php" method="POST">
        <label for="wallet_type">Wallet Type:</label>
        <select name="wallet_type" id="wallet_type" required>
            <option value="eZ Cash">eZ Cash</option>
            <option value="mCash">mCash</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="wallet_number">Mobile Wallet Number:</label>
        <input type="text" name="wallet_number" id="wallet_number" required><br><br>

        <label for="amount">Amount (Rs.):</label>
        <input type="number" step="0.01" name="amount" id="amount" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
    </div>

        <!--Javascript codes to implement log out function to the log out button-->
        <script>
        // Get the logout link
        const logoutLink = document.querySelector('.logout');

    if (logoutLink) {
        logoutLink.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default link behavior
            const confirmed = confirm('Are you sure you want to log out?');
            if (confirmed) {
                // Redirect to logout or perform logout action
                window.location.href = 'helixBanking_CustomerLogin.php'; // Redirect after logout
            }
        });
    }
    </script>

<footer>
        <div class="footer-links">
            <a href="Homepage.php">Home</a>
            <a href="ContactUs.php">Contact us</a>
            <a href="term.php">Terms & Conditions</a>
        </div>

        <div class="copyright">
            <p>&copy; 2024 Helix Bank. All rights reserved.</p>
        </div>

        <div class="social-media">
            <span style="font-size: 16px;">Get in touch :</span>
            <a href="#"><p>Facebook</p></a>&nbsp;&nbsp;
            <a href="#"><p>Instagram</p></a>&nbsp;&nbsp;
            <a href="#"><p>Twitter</p></a>&nbsp;&nbsp;
            <a href="#"><p>LinkedIn</p></a>&nbsp;&nbsp;
        </div>

    </footer>

</body>
</html>
