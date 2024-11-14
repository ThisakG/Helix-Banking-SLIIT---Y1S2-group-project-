<?php
include('config.php');

// Check if the form was submitted using the POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form input values
    $amount = $_POST['amount'];
    $receiver_name = $_POST['receiver_name'];
    $receiver_account = $_POST['receiver_account'];
    $bank = $_POST['bank'];
    $schedule_date = $_POST['schedule_date'];
    $description = $_POST['description'];
    $recurring = isset($_POST['recurring']) ? 1 : 0;// Check if the recurring checkbox is checked

      // SQL query to insert scheduled transfer data into the database
    $sql = "INSERT INTO scheduled_transfers (amount, receiver_name, receiver_account, bank, schedule_date, description, recurring) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
     // Execute the query and check for success
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("dsssssi", $amount, $receiver_name, $receiver_account, $bank, $schedule_date, $description, $recurring);
    
    if ($stmt->execute()) {
        echo "Scheduled transfer added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

       // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<head>
    <title>Scheduled Transfers</title>
    <link rel="stylesheet" href="Styles/HomepageStyles.css">
    <link rel="stylesheet" href="Styles/style.css">
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

    <div class="content">
    <h2>Schedule a Transfer</h2><br>
    <!-- section with a form for scheduling transfers -->
    <form action="scheduled_transfer.php" method="POST">
        <label for="amount">Amount (Rs.):   </label>
        <input type="number" step="0.01" name="amount" id="amount" required><br>
        <br>
        <label for="receiver_name">Receiver Name:</label>
        <input type="text" name="receiver_name" id="receiver_name" required><br>
        <br>
        <label for="receiver_account">Receiver Account:</label>
        <input type="text" name="receiver_account" id="receiver_account" required><br>
        <br>
        <label for="bank">Select Bank:</label>
        <select id="select-bank" name="bank">
          <option value="Bank 1">Sampath bank</option>
          <option value="Bank 2">NSB bank</option>
          <option value="Bank 3">Commercial Bank plc</option>
          <option value="Bank 4">BOC Bank</option>
          <option value="Bank 4">Helix Bank</option>
        </select><br><br>
        <label for="schedule_date">Schedule Date:</label>
        <input type="date" name="schedule_date" id="schedule_date" required><br><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea><br><br>
        <label for="recurring">Make this a recurring transfer:</label>
        <input type="checkbox" name="recurring" id="recurring"><br><br>
        <button type="submit">Submit</button>
    </form>
    </div>
    
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
</body>
</html>
