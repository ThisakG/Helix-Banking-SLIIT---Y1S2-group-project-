<!DOCTYPE html>
<html>

<head>
    <title>Loan Schemas</title>
    <link rel="stylesheet" href="Styles/HomepageStyles.css">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="stylesheet" href="Styles/ManageAccountStyles.css">
    <link rel="stylesheet" href="Styles/loanStyle.css">

    <?php
    include_once 'config.php';
    ?>

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

    <br>

    
<!--info about loan schemes
    <div class="contentfund">
    <h2>Loan Schemes & Interest Rates</h2>
    <div class="loan-list">
        <div class="loan-item"><b>Personal Loan : Flexible payment terms, low interest rates, and no hidden fees.</b></div>
        <div class="loan-item"><b>Home Loan : Get up to 90% financing with competitive interest rates.</b></div>
        <div class="loan-item"><b>Vehicle Loan : Easy approval process and low rates for new and used cars.</b></div>
        <div class="loan-item"><b>Business Loan : Tailored packages to grow your business with convenient repayment terms.</b></div>
    </div>-->

    <div class="container">
    <center><h2>Our Loan Schemes</h2></center>
    <section>
        <!--table to display current loan schemes-->
            <div class="productData" style ="border-color: #666;">
                <table border="1" width="100%">
                    <tr>
	                    
	                    <th class="col">Description</th>
	                    <th class="col">Loan Amount</th>
	                    <th class="col">Installement Rates</th>
	                  
                    </tr>

                <?php
	                $SQL = "SELECT * FROM loan_schemes";
	                $result = $conn->query($SQL);
	
	                if($result -> num_rows > 0)
	                {
		                while($row = $result ->fetch_assoc())
		            {
			            echo "<tr><td>"
				                .$row["Description"]."</td><td>"
				                .$row["Loan_Amount"]."</td><td>"
				                .$row["Installement_Rates"]."</td>";
				            
				
			            
		            }
	                }else
                    {
		                echo "Empty rows" ;
	                }
	                
                    echo "</table>";
	
	                mysqli_close($conn);
                ?>
        </section>
    </div>

    <!--Loan application form-->
    <center><h2>Fill our Form to apply!</h2></center>
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