<?php
// Include the database configuration
include('config.php'); 

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: helixBanking_CustomerLogin.php"); // Redirect to login page if not logged in
    exit();
}

// Retrieve the logged-in username
$username = $_SESSION['username'];

// Prepare and execute the query to get user data from the customer table of the database
$stmt = $conn->prepare("SELECT * FROM customer WHERE Username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc(); // Fetch user data
} else {
    echo "No user found.";
    exit();
}

// If the form is submitted (Update button clicked)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update'])) {
        // Get the updated values from the form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $branch = $_POST['branch'];
        $contact = $_POST['contact'];

        // Update the customer data in the database
        $update_stmt = $conn->prepare("UPDATE customer SET Name=?, Email=?, Branch=?, Contact_Number=? WHERE Username=?");
        $update_stmt->bind_param("sssss", $name, $email, $branch, $contact, $username);

        if ($update_stmt->execute()) {
            echo "<script>alert('Account updated successfully!');</script>";
            // Refresh the page to display updated values
            header("Location: UserAccountPage.php");
            exit();
        } else {
            echo "<script>alert('Error updating account.');</script>";
        }

        // Close the statement
        $update_stmt->close();
    }

    // If the Delete button is clicked
    if (isset($_POST['delete'])) {
        // Prepare and execute the delete statement
        $delete_stmt = $conn->prepare("DELETE FROM customer WHERE Username=?");
        $delete_stmt->bind_param("s", $username);

        if ($delete_stmt->execute()) {
            echo "<script>alert('Account deleted successfully!'); window.location.href='RegistrationPage.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error deleting account.');</script>";
        }

        // Close the delete statement
        $delete_stmt->close();
    }
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Page</title>
    <link rel="stylesheet" href="Styles/HomePageStyles.css">
    <link rel="stylesheet" href="Styles/UserAccStyles.css">
    <style>
        .account-container {
            /*CSS for user account page form */
    width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2, h3 {
    font-family: Arial, sans-serif;
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="text"],
input[type="email"] {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

button {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.update-btn {
    background-color: #4CAF50;
    color: white;
}

.delete-btn {
    background-color: #f44336;
    color: white;
}

button:hover {
    opacity: 0.8;
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
                <!--php code to display the name of the user-->
                <span>Welcome <?php echo htmlspecialchars($user['Name']); ?> !</span>
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


    <div class="account-container">
        <h2>Welcome, <?php echo htmlspecialchars($user['Name']); ?> !</h2>

        <!-- php code to display current User Account data in the Form -->
         <center>
        <form action="UserAccountPage.php" method="POST">
            <h3>Account Type:</h3>
            <input type="text" value="<?php echo htmlspecialchars($user['Account_Type']); ?>" readonly>

            <h3>Account Number:</h3>
            <input type="text" value="<?php echo htmlspecialchars($user['Account_Number']); ?>" readonly>

            <h3>Name:</h3>
            <input type="text" name="name" value="<?php echo htmlspecialchars($user['Name']); ?>">

            <h3>Branch:</h3>
            <input type="text" name="branch" value="<?php echo htmlspecialchars($user['Branch']); ?>">

            <h3>Email:</h3>
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['Email']); ?>">

            <h3>Contact Number:</h3>
            <input type="text" name="contact" value="<?php echo htmlspecialchars($user['Contact_Number']); ?>"><br>

            <!-- Update Button -->
            <button type="submit" name="update" class="update-btn">Update</button>

            <!-- Delete Button -->
            <button type="submit" name="delete" class="delete-btn" onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">Delete</button>
        </form>
</center>
    </div>

     <!-- Back to Top Button -->
     <button id="backToTopBtn" >Top</button>

     

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

    <!--Javascript codes to implement a scroll to top button at the bottom-->        
<script>
const backToTopBtn = document.getElementById("backToTopBtn");

window.addEventListener('scroll', function() {
    if (window.scrollY > 200) {
        backToTopBtn.style.display = "block";  // Show button after scrolling down 200px
    } else {
        backToTopBtn.style.display = "none";  // Hide button when near the top
    }
});


</body>
</html>
