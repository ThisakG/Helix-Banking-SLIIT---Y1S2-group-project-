<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill payments</title>

    <link rel="stylesheet" href="Styles/Bill payment.css">
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

    <main>

<!--heading and intro-->
        <section class="hero">
            <h1>Bill Payments</h1>
            <p>The bill payment section on our banking website offers a
                convenient and secure way to manage all your
                payment in one place. You can easily pay utility bills,
                credit card bills, and loans, with options to schedule
                automatic or one-time payments.</p>
        </section>
<!--bill options-->
        <section class="features">
            <div class="feature-box">
                <a href="Electricity_bill.php">
                    <h2>Electricity Bill</h2>
                </a>
            </div>

            <div class="feature-box">
                <a href="Water_bill.php">
                    <h2>Water Bill</h2>
                </a>

            </div>

            <div class="feature-box">
                <a href="Telephone_bill.php">
                    <h2>Telephone Bill</h2>
                </a>
            </div>

            <div class="feature-box">
                <a href="Health_care.php">
                    <h2>Health Care </h2>
                </a>

            </div>

            <div class="feature-box">
                <a href="Payment_history.php">
                    <h2>Payment History</h2>
                </a>
            </div>

            <div class="feature-box">
                <a href="Other.php">
                    <h2>Other</h2>
                </a>
            </div>

            <!-- Back to Top Button -->
            <button id="backToTopBtn">Top</button>


            <!--Javascript codes to implement a scroll to top button at the bottom-->
            <script>
                const backToTopBtn = document.getElementById("backToTopBtn");

                window.addEventListener('scroll', function () {
                    if (window.scrollY > 200) {
                        backToTopBtn.style.display = "block";  // Show button after scrolling down 200px
                    } else {
                        backToTopBtn.style.display = "none";  // Hide button when near the top
                    }
                });

                backToTopBtn.addEventListener('click', function () {
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
                            window.location.href = 'helixBanking_CustomerLogin.html'; // Redirect after logout
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