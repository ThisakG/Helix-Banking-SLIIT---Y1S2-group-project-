<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <link rel="stylesheet" href="Styles/HomePageStyles.css">
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

    <!--main section containing feature boxes with homepage information-->
    <main>
        <section class="hero">
            <h1>Welcome to Helix Bank</h1>
            <p>Your trusted financial partner, offering a range of banking services tailored to your needs.</p>
        </section>

        <section class="features">
            <div class="feature-box">
                <h2>Online Banking</h2>
                <p>Manage your accounts, check balances, and pay bills with ease using our online banking platform.</p>
            </div>

            <div class="feature-box">
                <h2>Secure Transactions</h2>
                <p>We prioritize security to ensure all your transactions are safe and protected 24/7.</p>
            </div>

            <div class="feature-box">
                <h2>24/7 Support</h2>
                <p>Need help? Our customer support team is available around the clock to assist you.</p>
            </div>

            <div class="feature-box">
                <h2>Bill Payments</h2>
                <p>Pay off any type of billing that you have with our virtual banking platform !</p>
            </div>

            <div class="feature-box">
                <h2>Interest Rates</h2>
                <p>The best avaliable rates for Loan Schemes and Fixed Deposit accounts are ours !</p>
            </div>

            <div class="feature-box">
                <h2>Exchange Rates</h2>
                <p>Accurate currency exchange rates can be found within our site !</p>
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

    </main>

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


