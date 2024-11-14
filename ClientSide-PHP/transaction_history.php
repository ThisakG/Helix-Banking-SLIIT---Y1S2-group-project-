<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "helix_banking";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM transfers";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<head>
  <title>Transaction History</title>
  <link rel="stylesheet" href="Styles/style.css">
  <link rel="stylesheet" href="Styles/HomepageStyles.css">

  <style>
        /*CSS styling for the logo */
       .logo-box {
    width: 50px;
    height: 50px;
    background-color: #3b82f6;
    text-align: center;
    line-height: 50px;
    font-weight: bold;
}
.user {
    display: flex;
    align-items: center;
}

.user-image {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #60a5fa; 
    margin-right: 10px; /* Space between the image and the text */
    overflow: hidden;
}

.logo img{
    width: 150px;
    height: 150px;
    
}
.user-image img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the entire circular area */
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
            <<div class="user-image">
                <img src="Images/profile_icon5.png" alt="profile_icon">
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

  <main>

    <!--php code to display data of transactions that are stored in the database to the user-->
    <div class="content-2">
    <section id="transaction-history">
      <h2>Transaction History</h2><br>

      <?php
        if ($result->num_rows > 0) {
          echo "<table border=1 >
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Account_Name</th>
                <th>Bank</th>
                <th>Account Number</th>
                <th>Description</th>
            </tr>";

          while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["account_name"] . "</td><td>" . $row["bank"] . "</td><td>" . $row["account_number"] . "</td><td>" . $row["description"] . "</td></tr>";
          }
          echo "</table>";
        } else {
          echo "No transactions found.";
        }
        
        $conn->close();
      ?>
    </section>
    </div>
    
  </main>

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