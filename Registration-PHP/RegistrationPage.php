<!DOCTYPE html>
<html>

<head>
    
    <title>Customer Registration Page</title>
    <link rel="stylesheet" href="Styles/Registration.css">
    <link rel="stylesheet" href="Styles/Header&Footer.css">
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
    <!--Main content -->
    <div class="container">
        <h2>Customer Registration</h2>
        <form id="registrationForm" method="post" action="insertReg.php">
            <!-- Account Details -->
            <label><h3>Account Details</h3></label>
            <div>
                Select Account Type:
                <select name="AccType" required>
                    <option>Select</option>
                    <option >Savings Account</option>
                    <option >Current Account</option>
                    <option >Business Account</option>
                    <option >Joint Account</option>
                </select><br>
                Account Number:
                <input type="text" name="AccNo" required><br>
                Branch:
                <select name="branch" required>
                    <option value="">Select</option>
                    <option >Colombo 7</option>
                    <option >Malabe</option>
                    <option >Galle</option>
                    <option >Kandy</option>
                </select><br>
            </div>

            <!-- Personal Details -->
            <label><h3>Personal Details</h3></label>
            Full Name:
            <input type="text" name="name" required><br>
            Name with initials:
            <input type="text"  required><br>
            Current Address:
            <input type="text" name="address"required><br>
            NIC / Passport Number:
            <input type="text" name="nic" required><br>

            <!-- Contact Details -->
            <label><h3>Contact Details</h3></label>
            Mobile Number:
            <input type="tel"  name="phone" placeholder="+94123456789" required><br>
            Email:
            <input type="email" name="email" required><br>

            <!-- Login Details -->
            <label><h3>Login Details</h3></label>
            Username:
            <input type="text" name="username" required><br>
            Password:
            <input type="password" name="password" required><br>
            Confirm Password:
            <input type="password" name="confirmPassword" required><br>
            

            <input type="submit" value="Register">
            <input type="reset"  value="Reset">
        </form>
    </div>
    
    <!--Footer-->
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

    <script>
       // Simple password validation with alert box
    document.getElementById('registrationForm').addEventListener('submit', function (e) {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            e.preventDefault();  // Prevent the form from submitting
        }
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
</body>

</html>

































