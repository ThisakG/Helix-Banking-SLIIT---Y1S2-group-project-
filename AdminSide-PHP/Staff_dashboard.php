<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>

    <link rel="stylesheet" href="Styles/StaffAdminStyles.css">
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
                <span><h2>Welcome!</h2></span>
                <br>
                <a href="#" class="logout">Log out</a>
            </div>
        </div>

        </div>
    </header>

     <!--introductory section-->
    <main>
        <section class="hero">
            <h1>Helix Bank - Staff Portal</h1>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your recent tasks and updates will appear here</p>
        </section>

        <section class="features">
            <div class="feature-box">
                 <!--manage Loan and FD section-->
                <h2>Loan and FD applications</h2>
                <div class="button-container">
                    <button class="styled-button"><a href="loan_page.php">View Loan scheme plans</a></button><br>
                    <button class="styled-button"><a href="FD_Crud.php">View FD scheme plans</a></button><br>
                </div>
            </div>

            <div class="feature-box">
                 <!--manage Customer inquiries section-->
                <h2>Customer Support</h2>
                <div class="button-container">
                    <button class="styled-button"><a href="ContactList.php">View customer Inquiries</a></button><br>
                   
                </div>
            </div>

            <div class="feature-box">
                 <!--Notices section-->
                <h2>Staff Notices</h2>
                <div class="update-box">
                    <p><strong>Notice 1:</strong><br>Executive board meeting at 3.00pm, October 31, 2024.</p><br>
                </div>
                <div class="update-box">
                    <p><strong>Notice 2:</strong><br> New employee portal features coming soon. January 10, 2025.</p>
                    <br>
                </div>
        </section>

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


</body>

</html>