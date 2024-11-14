<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank transfer</title>

    <link rel="stylesheet" href="Styles/HomePageStyles.css">
    <link rel="stylesheet" href="Styles/style.css">
    <style>
        input,select {
    width: 100%;
    padding: 5px;
    margin: 8px 0;
    border-radius: 4px;
    border: 1px solid #524e4e;
}
input[type="submit"]{
    width: 150px;  /* Set a fixed width for both buttons */
    background-color: #1069b1;
    color: white;
    cursor: pointer;
    padding: 10px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    transition: background-color 0.3s ease;
    text-decoration: none;
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
                <img src="Images/profile_icon5.png" alt="profile_icon">
            </div> 
            <div class="user-info">
                <span>Welcome!</span>
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
                <a href="contactUs.asp" class="dropbtn">Contact Us</a>
                <div class="dropdown-content">
                    <a href="ContactUs.php">Contact Us</a>
                    <a href="about.php">About Us</a>
                    <a href="Customer_Support.php">Customer Support</a>
                </div>
            </li>

            <li><a href="term.php">Terms & Conditions</a></li>
        </ul>
    </nav>

    <center>
    <div class="content">
    <section id="bank-transfer"></section>
        <br><br>
      <h2>Bank Transfer</h2>
        <br>
        <!--form to take information on customer bank transactions-->
      <form action="process_transfer.php" method="POST">
        <label for="amount">Amount (Rs.):</label>
        <input type="number" id="amount" step="0.01" name="amount" required><br><br>
        <label for="account-name">Account Name:</label>
        <input type="text" id="account-name" name="account_name"><br><br>

        <!--dropdown list of banks-->
        <label for="select-bank">Select Bank:</label>
        <select id="select-bank" name="bank">
          <option value="Bank 1">Sampath bank</option>
          <option value="Bank 2">NSB bank</option>
          <option value="Bank 3">Commercial Bank plc</option>
          <option value="Bank 4">BOC Bank</option>
          <option value="Bank 4">Helix Bank</option>
        </select><br><br>

        <label for="account-number">Account Number:</label>
        <input type="text" id="account-number" name="account_number"><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea><br><br>

        <input type="checkbox" id="save-payee" name="save_payee">
        <label for="save-payee">Save Payee</label><br>

        <input type="checkbox" id="recurring" name="recurring">
        <label for="recurring">Recurring</label><br><br>

        <input type="submit" value="Transfer">
      </form>
    </section>
    </div>
</center>   

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
