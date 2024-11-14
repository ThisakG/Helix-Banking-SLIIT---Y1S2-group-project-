<?php
//retrieving the values of the parameters from the query
$FD_Scheme_No = isset($_GET['FD_Scheme_No']) ? $_GET['FD_Scheme_No'] : '';
$Description = isset($_GET['Description']) ? $_GET['Description'] : '';
$FD_Amount = isset($_GET['FD_Amount']) ? $_GET['FD_Amount'] : '';
$Interest_Rates = isset($_GET['Interest_Rates']) ? $_GET['Interest_Rates'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editLoanPage</title>

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
            <h2>Manage FD Schemes</h2>
            <div class="button-container">
            
            </div>
        </section>

        <section>
            <!--form to display current data that can be updated-->
            <div class="productData" style ="border-color: #666;">
            <form action="submitUpdateFDPage.php" method="POST">
        <label >FD Scheme No: </label>
		<input type = "text" value="<?php echo "$FD_Scheme_No" ?>" name="FD_Scheme_No"  > <br>

		<label >Description: </label>
		<input type = "text" value="<?php echo "$Description" ?>" name="Description"> <br>

		<label >FD Amount: </label>
		<input type = "text" value="<?php echo "$FD_Amount" ?>" name="FD_Amount"> <br>-

		<label >Interest Rates: </label>
		<input type = "text" value="<?php echo "$Interest_Rates" ?>" name="Interest_Rates"> <br>

		
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