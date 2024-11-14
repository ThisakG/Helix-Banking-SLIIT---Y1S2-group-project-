<!DOCTYPE html>
<html>
<head>
    
    <title>Loan Application Form</title>
    <link rel="stylesheet" href="loanStyle.css">
    <link rel="stylesheet" href="Header&Footer.css">
</head>
<body>
    <!--Header-->
<header>
        <div class="logo">
            <img src="logo.png" alt="LOGO">
        </div>
        <h1>HELIX BANKING</h1>
        <div class="user">
            <div class="user-image">
                <img src="../Helix Banking/Images/profile_icon.png" alt="profile_icon">
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
            <li ><a href="home.asp">Home</a></li>

            <li ><a href="MyAccount.asp">My Account</a></li>

            <!-- Services dropdown -->
            <li class="dropdown">
                <a href="services.asp" class="dropbtn">Services</a>
                <div class="dropdown-content">
                    <a href="fundTransfers.asp">Fund transfers</a>
                    <a href="Bill payments.asp">Bill Payments</a>
                    <a href="LoanSchemes.asp">Loan Schemes</a>
                    <a href="fixedDepositSchemes.asp">Fixed Deposit (FD) Schemes</a>
                </div>
            </li>

            <!-- Contact Us dropdown -->
            <li class="dropdown">
                <a href="contactUs.asp" class="dropbtn">Contact Us</a>
                <div class="dropdown-content">
                    <a href="contactUS.asp">Contact Us</a>
                    <a href="AboutUs.asp">About Us</a>
                    <a href="CustomerSupport.asp">Customer Support</a>
                </div>
            </li>

            <li><a href="T&C.asp">Terms & Conditions</a></li>
        </ul>
    </nav>
<!--Main Content-->
    <div class="container">
        <h2>Loan Application Form</h2>

        <form method="post" action="insertLoan.php">
            <label>Full Name:</label>
            <input type="text"  name="fullname" required>

            <label>Phone Number:</label>
            <input type="tel"  name="phone" required>

            <label >Email Address:</label>
            <input type="email"  name="email" required>

            <label >Loan Amount Requested:</label>
            <input type="number" name="loan-amount" required>

            <label >Loan Purpose:</label>
            <textarea  name="loan-purpose" rows="4" required></textarea>

            <label >NIC/Passport Number:</label>
            <input type="text" name="nic" required>

            <label >Date:</label>
            <input type="date" name="date" required>

            <button type="submit">Submit Application</button>
        </form>
    </div>

    <!--Footer-->
    <footer>
        <div class="footer-links">
            <a href="#">Home</a>
            <a href="#">Contact us</a>
            <a href="#">Terms & Conditions</a>
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