<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>AboutUs</title>

  <!-- CSS style use -->
    <style>
        /* Global Styles */
        * {
              box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            line-height: 1.6;
            background-color: #ffffff; /* White background */
            color: #333; /* Neutral text color */
            background-image: url(Images/pexels-anniroenkae-15578085 (1).jpg);
        }
        fieldset {
         /* Apply background image to fieldset */
            background-size: cover; /* Make sure the image covers the fieldset area */
            background-position: center; /* Center the background image */
            width: 99vw; /* Make the fieldset take up 100% of the viewport width */
            margin: 1px; /* Remove default margins */
            border: 2px solid black;
            border-radius: 2px; 
            color: #333; 
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1e40af;
            padding: 10px 20px;
        }
        .logo-box {
            width: 50px;
            height: 50px;
            background-color: #3b82f6;
            text-align: center;
            line-height: 50px;
            font-weight: bold;
        }
        h1 {
            margin: 0;
            color: white;
            font-size: 24px;
            transform: translateX(25px);
            text-align: center;
        }
        legend {
        font-size: 25px;
        font-weight: bold;
        }
         /* User Section */
        .user {
            display: flex;
            align-items: center;
        }
        .user-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #60a5fa; /* Light Sky Blue user image */
            margin-right: 10px; /* Space between the image and the text */
            overflow: hidden;
        }
        .user-image img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image covers the entire circular area */
        }
        .user-info {
            display: flex;
            flex-direction: column; /* Stacks Username and Log out vertically */
            color: white;
        }
        .logout {
            text-decoration: none;
            color: white;
            font-size: 12px; /* Adjust font size if needed */
            text-decoration: none;
        }
        .logout:hover {
            text-decoration: underline;
        }
         /* Navigation */
        nav {
            background-color: #e5e7eb;
            padding: 10px 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #1e40af;
            font-weight: bold;
            padding: 10px 20px; /* Adjust the padding for size */
            border-radius: 50px; /* This creates the oval shape */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
        }
        nav ul li a:hover, .dropdown-content a:hover {
            text-decoration: none; 
            background-color: #ff7979; /* Coral red on hover */
            color: white;
        }
        nav ul li a.active {
            background-color: #74b9ff; /* Sky blue for active link */
            padding: 10px 20px;
            border-radius: 50px; 
        }
        /*Dropdown shit*/
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #ff7979; /* Coral red on hover */
            color: white; 
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown:hover .dropbtn {
            background-color: #ff7979; /* Coral red on hover */
            color: white;
        }
        /* Main content */
        main {
            padding: 40px 20px;
            text-align: center;
        }
        .hero {
            margin-bottom: 40px;
        }
        .hero h1 {
            font-size: 2.5em;
            color: #1e40af;
        }
        .hero p {
            font-size: 1.2em;
            color: #6b7280;
        }
        /* Footer Styles */
        footer {
            padding: 20px; /* Add padding to the footer */
            background-color: #34495e; /* Dark blue-gray */
            color: white; 
         }
        .footer-container {
            display: flex; /* Use Flexbox to arrange items in a row */
            justify-content: space-between; /* Space out the footer elements */
            align-items: center; 
        }
        .footer-links, .copyright, .social-media {
            margin: 0 15px; /* Horizontal margin for spacing */
        }
        .footer-links {
            display: flex;
            gap: 15px;
            color: white;
        }
        .footer-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            text-decoration: none;
            
        }
        .social-media {
            display: flex; /* Use Flexbox for social media links */
            align-items: center; /* Align the social media links vertically */
            gap: 10px; /* Space between social media links */
            font-weight: bold;
        }
        .social-link {
            font-size: 14px; /* Set font size for links */
            text-decoration: none; /* Remove underline */
            color:white; /* Link color */
            font-weight: bold;
        }
        .social-link:hover {
            color: white; /* Change color on hover */
            font-weight: bold;
            text-decoration: underline;

        } 
        .social-media a:hover{
            text-decoration: none;
            color: #60a5fa;
            font-weight: bold;
            text-decoration: underline;
        }
        .footer-links {
            display: flex;
            gap: 15px;
            color: white;
        }
        .footer-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            text-decoration: none;
            
        }
        .footer-links a:hover {
            text-decoration: underline;
            color: #60a5fa;
        }
        .copyright{
            font-size: 16px;
            transform: translateX(25px);
            color: white;
        }

        /*Back to top button CSS-------------------------------------------------------------------------------------*/
        #backToTopBtn{
            display:none;
            position:fixed;
            bottom:20px;
            right:20px;
            padding:10px 20px;
            background-color:#1e40af;
            color:white;
            border:none;
            border-radius:50px;
            cursor:pointer;
        }

        .container {
    background-color: #f9f9f9; /* Light grey background */
    padding: 20px; /* Padding inside the container */
    margin: 20px auto; /* Center the container with some top and bottom margin */
    max-width: 900px; /* Limit the width */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
    border: 1px solid #ddd; /* Light border for a subtle outline */
}

    </style>

</head>
<body>
    <header>
    <div class="user-image">
            <img src="Images/logo_1.png" alt="LOGO">
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
    <!--about us page content-->
    <div class="container">
        
            <h1 style="color:darkblue;"><center>ABOUT US</center></h1>

            <h2>Welcome To Helix Bank, Your reliable Online banking Partner..</h2>
            <p class="paragraph">At Helix Bank, We offer distinctive and advanced financial solutions that meet the variety of needs that our wide-ranging clientele demands. When you look at us in the banking sector from years ago, you will see that we have come a long way and have redesigned ourselves to reduce the many layers of a traditional bank to a single, digitally-only core platform...</p>

            <h3><b>Our Mission</b></h3>
            <p class="paragraph">Our goal is to empower our clients by offering safe, practical, dependable, and effective online banking services. By providing our users with the tools, resources, and other essentials they require to manage their accounts efficiently from any location in the world, we hope to make their financial lives easier.</p>

            <h3>Our Values</h3>
                <ul>
                    <li>Customer - Centricity: We put our clients' needs first, working hard to provide them with unique experiences and top-notch support.</li>
                    <li>Security - Protecting our customers' financial information is our top priority. We employ the latest security measures to safeguard your data and transactions.</li>
                    <li>Integrity - We maintain the highest ethical standards possible to guarantee openness and confidence in all of our business dealings.</li>
                    <li>Innovation - We never stop innovating to provide cutting-edge financial solutions that stay up with the rapidly changing digital environment.</li>
                </ul>
           <h3>Our Services</h3>
                <ul>
                    <li>24/7 Online banking : Manage your accounts, transfer money, and pay bills with our round-the-clock online banking service.</li>
                    <li>Mobile Banking : Use our easy-to-use mobile app to access your banking services while on the go.</li>
                    <li>Secure Transactions : With our cutting-edge fraud protection systems and encryption technologies, you can transact with confidence.</li>
                    <li>Customer Support : If you have any banking issues, our friendly support staff is here to help you at all times.</li>
                </ul>
            <lh3>Join Us Today</h3>
                <p>Helix Bank can help you open a new account, apply for a loan or manage your current accounts. Join us now to explore the future of banking...</p>

                <p>Thank You!!!</p>

        
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
        <div class="footer-container">
        <div class="footer-links">
                    <a href="HomePage.php">Home</a>
                    <a href="ContactUs.php">Contact us</a>
                    <a href="term.php">Terms & Conditions</a>
                </div>
    
            <div class="copyright">
                <br><p style="font-size: 12px;">&copy; 2024 Helix Bank. All rights reserved.</p>
            </div>
    
            <div class="social-media">
                <span style="font-size: 16px;">Get in touch :</span>
                <a href="#" class="social-link">Facebook</a>
                <a href="#" class="social-link">Instagram</a>
                <a href="#" class="social-link">Twitter</a>
                <a href="#" class="social-link">LinkedIn</a>
            </div>
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