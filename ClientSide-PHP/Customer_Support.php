<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help and Support</title>

    <!-- CSS style use -->
    <style>
        /* Global Styles */
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #ffffff; /* White background */
            color: #333; /* text color */
            background-image: url(../Images/pexels-anniroenkae-15578085.jpg);
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1e40af;
            padding: 10px 20px;
        }
        /* Two column Layout */
        .container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .left-column, .right-column {
            width: 48%;
            margin: 10px;
            border-radius: 4px;
            border-color: black;
        }
        .accordion {
            border: 1px solid black;
            margin-top: 10px;
            border-radius: 5px;
        }
        .accordion-item {
            border-top: 1px solid #ddd;
        }
        .accordion-header {
            background-color: #f1f1f1;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
        }
        .accordion-body {
            display: none; /* Hide by faq */
            padding: 10px;
            border-top: 1px solid #ddd;
        }
        .feedback-area, .live-chat {
            margin-top: 20px;
            border: 1px solid black;
            padding: 10px;
            border-radius: 5px;
        }
        .pdf-logo {
            width: 20px;
            height: auto;
            margin-right: 5px;
        }
        h1 {
            margin: 0;
            color: white;
            font-size: 24px;
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
/* Footer Styles--------------------------------------------------------------------------------------------- */
footer {
    background-color: #34495e; /* Dark blue-gray */
    color: white; /* White text in footer */
    display: flex;
    justify-content: space-between;
    padding: 60px;
    margin-top: 120px;
    align-items: center;
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

.social-media {
    display: flex;
    align-items: center;
}

.social-media span {
    margin-right: 10px;
}

.social-media a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
.social-media a:hover{
    text-decoration: none;
    color: #60a5fa;
    font-weight: bold;
    text-decoration: underline;
}

.copyright{
    font-size: 12px;
    transform: translateX(25px);
    color: white;
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

    
       <!--faq box--> 
        <div class="container">
            <div class="left-column">
                <h2>FAQs</h2>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(event)">Question 1: How can I reset my password?</div>
                        <div class="accordion-body">
                            <p>To reset your password, click on 'Forgot Password' on the login page and follow the instructions.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(event)"> Question 2: Where can I find my order history?</div>
                        <div class="accordion-body">
                            <p>Your order history can be found in your account under 'Order History'.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(event)"> Question 3: How can I contact support?</div>
                        <div class="accordion-body">
                            <p> You can contact support via the 'Contact Us' section on our website.</p>
                        </div>
                    </div>
                </div>
                <!--guide-->
                <h2 class="mt-4">Guide Articles</h2>
                <ul>
                    <li>
                        <a href="guide1.pdf" download>
                            <img src="Images/document.png" alt="PDF" class="pdf-logo"> Guide Document 1
                        </a>
                    </li>
                    <li>
                        <a href="guide2.pdf" download>
                            <img src="Images/document.png" alt="PDF" class="pdf-logo"> Guide Document 2
                        </a>
                    </li>
                    <li>
                        <a href="guide3.pdf" download>
                            <img src="Images/document.png" alt="PDF" class="pdf-logo"> Guide Document 3
                        </a>
                    </li>
                </ul>
                <br>
                <h2>Bank Hotline</h2>
                <p>Call us at: <strong>+94 11 25956340</strong></p>
                </div>
                
            
            <!--feedback box-->
            <div class="right-column">
                <div class="feedback-area">
                    <h2>Feedback</h2>
                    <form id="feedback-form"> <!-- The form now has an ID for improved targeting. -->
                        <label for="feedback">Your Feedback:</label><br>
                        <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea><br>
                        <input type="submit" id="submit-feedback" value="Submit"> <!-- Updated ID for the submit button -->
                    </form>
                </div>
                
                <!-- JavaScript for feedback submission confirmation -->
                <script>
                    document.getElementById("submit-feedback").addEventListener("click", function(event) {
                        var confirmSubmission = confirm("Are you sure you want to submit your feedback?");
                        if (!confirmSubmission) {
                            event.preventDefault(); // Prevents submission if user clicks "Cancel"
                        }
                    });
                </script>
                
                
                <div class="search-branch">
                    <h2>Search Branch Locations</h2>
                    <input type="text" id="branch-search" placeholder="Enter city" style="width: 100%;">
                    <button id="search-btn" style="float: right;">Search</button>
                </div>
                
                <div class="live-chat">
                    <h2>Live Chat</h2>
                    <p>Need help? Chat with our support team!</p>
                    <a href="#" onclick="confirmChat()" style="color: #1e40af; text-decoration: none;">Start Live Chat</a>
                </div>
                
                <!-- JavaScript for displaying the live chat confirmation -->
                <script>
                    function confirmChat() {
                        if (confirm("Are you sure you want to start a chat with our support team?")) {
                            console.log("Chat started!");
                            // You can add functionality here to actually start the chat
                        } else {
                            console.log("Chat canceled.");
                        }
                    }
                </script>
                
            </div>
        </div>
    

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


    <script>
        function toggleAccordion(event) {
            const header = event.currentTarget;
            const body = header.nextElementSibling;

            // Toggle the accordion body's display attribute.
            if (body.style.display === "block") {
                body.style.display = "none";
            } else {
                body.style.display = "block";
            }
        }
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
    
</body>
</html>
