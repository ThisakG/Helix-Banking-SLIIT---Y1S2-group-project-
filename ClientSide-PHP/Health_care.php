<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care</title>

    <link rel="stylesheet" href="Styles/Electricity bill.css">
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
                <span>Username</span>
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

    <section></section>
        <!-- Health care payment form-->
        <div class="container">
            <h2>Health Care Payment</h2>
            <form class="fd-form">
                <label for="hospital">Hospital name:</label>
                <input type="text" id="hospital" name="hospital" required>

                <label for="billNo">Bill no:</label>
                <input type="text" id="billNo" name="billNo" required>

                <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount" required>

                <label for="payment">Payment method:</label>
                <select id="payment" name="payment" required>
                    <option value="credit">Credit Card</option>
                    <option value="debit">Debit card</option>
                </select>

                <button type="submit">Pay the bill</button>
            </form>
        </div>
    </section>

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


</body>

</html>