<?php
//retrieving the values of the parameters from the query
	$Employee_ID = $_GET['Employee_ID'];
	$Employee_name = $_GET['Employee_name'];
	$Date_of_birth = $_GET['Date_of_birth'];
	$Address = $_GET['Address'];
    $Employee_Email = $_GET['Employee_Email'];
    $user_name = $_GET['username'];
    $pwd = $_GET['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_Employee_Page</title>

    <link rel="stylesheet" href="Styles/HomePageStyles.css">
    <link rel="stylesheet" href="Styles/ManageAccountStyles.css">

    <?php
    include_once 'config.php';
    ?>
    
</head>

<body>


    <header>
    <div class="user-image">
            <img src="Images/logo_2.png" alt="LOGO">
        </div>
        <h1>Helix Banking</h1>
        <div class="user">
        <div class="user-image">
            <img src="Images/profile_icon5.png" alt="LOGO">
        </div>
            <div class="user-info">
                <span>Username</span>
                <br>
                <a href="#" class="logout">Log out</a>
            </div>
        </div>

        </div>
    </header>


    <main>
        <section class="manage-loan-fd">
            <h2>Manage Employee</h2>
            <div class="button-container">
            
            </div>
        </section>

        <section>
            <!--form to display current data that can be updated-->
            <div class="productData" style ="border-color: #666;">
            <form action="SubmitUpdateAccountEmp.php" method="GET">
        <label >Employee ID : </label>
		<input type = "text" value="<?php echo "$Employee_ID " ?>" name="Employee_ID"  > <br>

		<label >Employee Name: </label>
		<input type = "text" value="<?php echo "$Employee_name" ?>" name="Employee_name"> <br>

		<label >Date of birth: </label>
		<input type = "text" value="<?php echo "$Date_of_birth" ?>" name="Date_of_birth"> <br>-

		<label >Address: </label>
		<input type = "text" value="<?php echo "$Address" ?>" name="Address"> <br>

        <label >Employee Email: </label>
		<input type = "text" value="<?php echo "$Employee_Email" ?>" name="Employee_Email"> <br>
		
        <label >Username: </label>
		<input type = "text" value="<?php echo "$user_name" ?>" name="username"> <br>
		
        <label >Password: </label>
		<input type = "text" value="<?php echo "$pwd" ?>" name="password"> <br>
		
		
		<input type = "submit" value="Update" name="Update" class="styled-button"> <br>

</form>
        </section>
                
<br>

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
            <a href="#">
                <p>Facebook</p>
            </a>&nbsp;&nbsp;
            <a href="#">
                <p>Instagram</p>
            </a>&nbsp;&nbsp;
            <a href="#">
                <p>Twitter</p>
            </a>&nbsp;&nbsp;
            <a href="#">
                <p>LinkedIn</p>
            </a>&nbsp;&nbsp;
        </div>

    </footer>
</body>

</html>


</body>

</html>