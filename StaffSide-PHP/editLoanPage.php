<?php
    // Check if the GET parameters are set before using them
    $loanSch_No = isset($_GET['loanSch_No']) ? $_GET['loanSch_No'] : '';
    $Description = isset($_GET['Description']) ? $_GET['Description'] : '';
    $Loan_Amount = isset($_GET['Loan_Amount']) ? $_GET['Loan_Amount'] : '';
    $Installement_Rates = isset($_GET['Installement_Rates']) ? $_GET['Installement_Rates'] : '';
    $Loan_Status = isset($_GET['Loan_Status']) ? $_GET['Loan_Status'] : '';
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
            <h2>Manage Accounts</h2>
            <div class="button-container">
            
            </div>
        </section>

        <section>
            <!--form to display current data that can be updated-->
            <div class="productData" style ="border-color: #666;">
            <form action="submitUpdateLoanPage.php" method="POST">
        <label >Loan Scheme No: </label>
		<input type = "text" value="<?php echo "$loanSch_No" ?>" name="loanSch_No"  > <br>

		<label >Description: </label>
		<input type = "text" value="<?php echo "$Description" ?>" name="Description"> <br>

		<label >Loan Amount: </label>
		<input type = "text" value="<?php echo "$Loan_Amount" ?>" name="Loan_Amount"> <br>-

		<label >Installement Rates: </label>
		<input type = "text" value="<?php echo "$Installement_Rates" ?>" name="Installement_Rates"> <br>


		
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