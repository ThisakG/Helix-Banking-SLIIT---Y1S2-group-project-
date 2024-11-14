<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helix_banking";

// Create connection to MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Initialize variables for form fields
$Name = "";
$Email = "";
$Subject = "";
$Message = "";
$Phone = "";

// Initialize variables for error and success messages
$error = "";
$success = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $Name = trim($_POST["name"]);
    $Email = trim($_POST["email"]);
    $Subject = trim($_POST["subject"]);
    $Message = trim($_POST["message"]);
    $Phone = trim($_POST["phone"]);

    // Validate input fields
    if (empty($Name)) {
        $error = "Name is required";
    } elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format"; // Validate email format
    } elseif (empty($Subject)) {
        $error = "Subject is required";
    } elseif (empty($Message)) {
        $error = "Message is required";
    } elseif (empty($Phone)) {
        $error = "Phone is required";
    } elseif (strlen($Name) > 100) {
        $error = "Name is too long"; // Limit the length of Name
    } elseif (strlen($Subject) > 200) {
        $error = "Subject is too long"; // Limit the length of Subject
    } elseif (strlen($Message) > 1000) {
        $error = "Message is too long"; // Limit the length of Message
    } elseif (strlen($Phone) > 10) {
        $error = "Phone number is too long"; // Limit the length of Phone
    } else {
        // Prepare the SQL statement
        $sql = "INSERT INTO contactus (name, email, subject, message, phone) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $Name, $Email, $Subject, $Message, $Phone);

        // Execute the query and check for success
        if ($stmt->execute()) {
            $success = "Data added successfully";
            // Clear form data after successful submission
            $Name = "";
            $Email = "";
            $Subject = "";
            $Message = "";
            $Phone = "";
            // Redirect to the contact list with a success message in the session
            echo "<script>
                alert('Message sent successfully!');
                window.location.href = '/myphp/contactus/ContactList.php';
            </script>";
            exit();
        } else {
            $error = "Error: " . $stmt->error; // Error message if insertion fails
        }

        $stmt->close(); // Close the prepared statement
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            background-image: url(../Images/pexels-anniroenkae-15578085.jpg);
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f5f5dc, #add8e6);
            padding:0;
            margin:0;
        }
        .contact-form {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 50px;
            max-width: 500px;
            margin: 100px;
        }
        .contact-form h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }
        .btn-cancel {
            background-color: #f5f5f5;
            color: black;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .contact-info {
            margin-top: 20px;
            font-size: 14px;
        }
        .contact-info div {
            margin-bottom: 10px;
        }
        .contact-info i {
            margin-right: 10px;
        }
        .map-container {
            position: absolute; /* Allows for positioning */
            top: 60%; 
            right: 450px; /* Align it to the right */
            width:150px;
            transform: translateY(-25%);  
        }
        .map-container img {
            width:450px; /* Make the image take up the full width of its container */
            height: 250px;  
            right:100px;
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
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1e40af;
            padding: 10px;
            margin:0;
        }
        h1 {
            margin: 0;
            color: white;
            font-size: 24px;
            text-align: center;
            padding: 0px;
            margin:0px;
        }
        /* Footer Styles */
        footer {
            padding: 5px; /* Add padding to the footer */
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
            align-items: center; 
            gap: 10px; 
            font-weight: bold;
        }
        .social-link {
            font-size: 14px; 
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
        .p-3{

            font-size: 12px; /* Adjust icon size if needed */
            margin-top: 0px; /* Add a small gap between the text and icon, adjust as needed */
            text-align:left;
            length:50px;
        }
        .w-auto{
            text-align:center;
            font-size: 25px; 
        }
        .column {
            flex: 1;
            padding:5px;
            min-width: 200px;
            line-height: 10px; 
            text-align: 50;
            text-align:left;
            width: 80%; 
        }
        .column h2{
            text-align:left;
            font-size: 20px;
            margin: 10px 0;
        }
        .column p{
            font-size: 18px; margin: 5px 2;
        }
        .container {
            margin-bottom: 20px;
            padding: 0px!important;

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
        <!--contact form for customers-->
    <div class="container">
        <div class="contact-form">
            <h2>Contact Form</h2>
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($Name); ?>" required pattern="[A-Za-z\s]+" title="Please enter letters only.">
                </div> 
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($Email); ?>" required >
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" value="<?php echo htmlspecialchars($Subject); ?>" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4" required><?php echo htmlspecialchars($Message); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($Phone); ?>" required maxlength="10"
                     pattern="^\d{10}$" title="Please enter a 10-digit phone number, digits only" 
                     onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn-primary">Submit</button>
                    <a class="btn-cancel" href="/myphp/contactus/ContactList.php">Cancel</a>
                </div>

                <script>
                    document.getElementById('name').addEventListener('keypress', function (event) {
                        var char = String.fromCharCode(event.keyCode);
                        // Validate the character input to allow only letters and spaces
                        if (!/^[A-Za-z\s]+$/.test(char)) {
                            event.preventDefault();
                        }
                    });
                </script>
                <script>
                    document.getElementById('email').addEventListener('keypress', function (event) {
                        var char = String.fromCharCode(event.keyCode);
                        // Allow only lowercase letters, numbers, and the special characters for email
                        if (!/^[a-z0-9@._-]+$/.test(char)) {
                            event.preventDefault();
                        }
                    });
                </script>
            </form>
    </br>
    </br>
        <!--map-->
        <div class="map-container">
             <img src="Images/Colombo-map.jpg" alt="Colombo Map">

        <!--contact info box-->   
                <fieldset class="p-3" style="border: 3px solid black;">
                    <legend class="w-auto" style="font-weight:bold;">Contact Us</legend>
                    <div class="container" style="display: flex; flex-direction: column;">
                        <div class="column">
                            <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h2>
                            <p>Helix Bank Mawatha,</p>
                            <p>143A, Vajira Road,</p>
                            <p>Colombo 05,</p>
                            <p>Sri Lanka.</p>
                        </div>
                        <div class="column">
                            <h2><i class="fa fa-phone" aria-hidden="true"></i> Telephone</h2>
                            <p>+94 11 77566560</p>
                            <p>+94 11 25956340</p>
                            <p>+94 11 25956940</p>
                        </div>
                        <div class="column">
                            <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
                            <a href="helixbank@gmail.com">helixbank@gmail.com</a>
                        </div>
                    </div>
                </fieldset>

                    </div> 
                </div>
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
</body>
</html>