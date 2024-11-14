<!DOCTYPE html>
<head>
  <title>Helix Bank | Fund Transfer</title>
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


  <div class="contentfund">
  <main>
    <section id="fund-transfer">
      <h2>Fund Transfer</h2><br>
      <table border="1" width="100%">
        <tr>
          <td>Here, you can easily and quickly transfer money from your account to another account within the same bank or between different banks.</td>
        </tr>
      </table>
      
      <br><br>

      <!--section containing links to go to other pages with labelled functions-->
      <div class="feature-container">
      <div class="feature-box">
        <a href="bank_transfer.php"><b>Bank Transfer</b></a>
      </div>
      <div class="feature-box h2">
       <a href="scheduled_transfer.php"><b>Scheduled Transfers</b></a>
      </div>
      </div>
        
      <br>

      <div class="feature-container">
      <div class="feature-box p">
      <a href="mobile_wallet_integration.php"><b>Mobile Wallet Integration</b></a>
      </div>
      <div class="feature-box b">
      <a href="transaction_history.php"><b>Transaction History</b></a>
      </div>
      </div>
        

    </section>
  </main>
  </div>


      <!-- Back to Top Button -->
      <button id="backToTopBtn" >Top</button>

            
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

backToTopBtn.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scroll to top
    });
});
</script>


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
