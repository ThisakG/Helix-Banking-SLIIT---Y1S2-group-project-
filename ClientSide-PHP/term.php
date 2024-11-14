<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Term & Conditions</title>
  
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
            background-color: #ffffff; 
            color: #333; /* Neutral text color */
            background-image: url(img/term.jpg);;
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
        h2{
            margin: 0;
            color: black;
            font-size: 30px;
            transform: translateX(25px);
            text-align: center;
        }
        h3{
            margin:15px;
            font-size: 25px;
        }
        p{
           
            margin-top: 5px;
            font-size: 20px ;
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
            background-color: #60a5fa; 
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
            padding: 20px; 
            background-color: #34495e; 
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
            gap: 10px;
            font-weight: bold;
        }
        .social-link {
            font-size: 14px; /* Set font size for links */
            text-decoration: none; /* Remove underline */
            color:white; 
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

        <div class="container">
            <h2>Terms and Conditions</h2>
            <!--terms and conditions content-->
            <section>
                <h3>1.Introduction</h3>
                <p>
                    <ul>
                        <li>
                        Greetings from the internet banking system. You accept and agree to be bound by the following terms and conditions by using our services.
                        Before using our services, please carefully read these terms.
                        </li>
                    </ul>
                </p>
            </section>
    
            <section>
                <h3>2.Account Usage</h3>
                <p>
                   <ul>
                      <li>You are responsible for making sure your account information is safe at all times. Any actions that take place using your account are your responsibility.
                         Any unauthorised use of your account needs to be reported right away to us.
                      </li>
                    </ul> 
                </p>
            </section>
    
            <section>
                <h3>3.Privacy and Data Protection</h3>
                <p>
                    <ul>
                        <li>
                            We are devoted to safeguarding your personal information because we respect your right to privacy. You accept our <a href="#privacy-policy">Privacy Policy</a> by using our services.
                            We will manage your data in accordance with the relevant legal requirements.
                        </li>
                </ul>
                </p>
            </section>
    
            <section>
                <h3>4.responsibility</h3>
                <p>
                    <ul>
                        <li>
                            If you allow someone else to gain unauthorised access to your account by not keeping your login information secure, we will not be held responsible for any losses or damages.
                            Moreover, any indirect, particular, or consequential losses resulting from your use of the online banking system are not covered by us.
                        </li>
                    </ul>
                </p>
            </section>
    
            <section>
                <h3>5.Transaction Limits and Fees</h3>
                <p>
                    <ul>
                        <li>
                         Transaction limits can apply to your account. Certain transaction types may incur fees. Information about costs and restrictions is available on the <a href="#fees-schedule">Fee Schedule</a> page.
                        </li>
                    </ul>
                </p>
            </section>
    
            <section>
                <h3>6.Changes to Terms and Conditions</h3>
                <p>
                    <ul>
                        <li>
                        These terms are subject to change at any time, at our discretion. You agree to frequently examine the terms as any modifications will be announced on this website.
                        Your continued use of the service following the posting of revisions will signify your agreement to the updated terms.
                        </li>
                    </ul>
                </p>
            </section>
    
            <section>
                <h3>7.Governing Law</h3>
                <p>
                    <ul>
                        <li>
                    The laws of the nation or territory where the banking service is provided apply to these terms and conditions. The courts in that area will have jurisdiction over any disputes resulting from these agreements.
                        </li>
                    <ul>

                </p>
            </section>
    
            <section>
                <h3>8.Contact Us</h3>
                <p>
                    <ul>
                        <li>
                            Feel free to get in touch with us using the if you have any issues concerning these terms.
                            <a href="#" id="help-and-support-link">Help & Support</a> Section on our website.
                        </li>
                    </ul>
                </p>
                <!--use js for diplay customer click Help & Support link -->
                <script>
                const helpAndSupportLink = document.getElementById('help-and-support-link');

                helpAndSupportLink.addEventListener('click', function(event) {
                  event.preventDefault(); 
                
                  const confirmation = confirm('Do you want to open Help & Support?');
                  if (confirmation) {
                    // Open a new tab or window with your desired Help & Support URL
                    window.open('https://your-website.com/help-and-support', '_blank'); 
                  }
                });
            </script>
            </section>
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


         <!-- footer set -->
        <footer>
        
            <div class="footer-container">
                <div class="footer-links">
                    <a href="HomePage.php">Home</a>
                    <a href="ContactUs.php">Contact us</a>
                    <a href="term.php">Terms & Conditions</a>
                </div>
        
                <div class="copyright">
                    <br><p style="font-size:12px;">&copy; 2024 Helix Bank. All rights reserved.</p>
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