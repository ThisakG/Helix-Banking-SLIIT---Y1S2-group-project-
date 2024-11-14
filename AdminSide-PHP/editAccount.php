<?php
    //retrieving the values of the parameters from the query
	$Account_No = $_GET['Account_No'];
	$Account_Type = $_GET['Account_Type'];
	$Open_Date = $_GET['Open_Date'];
	$Account_Balance = $_GET['Account_Balance'];
	$Account_HolderName = $_GET['Account_HolderName'];
    $Account_HolderMail = $_GET['Account_HolderMail'];
    $Account_HolderNumber = $_GET['Account_HolderNumber'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_Acc_page</title>

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
            <form action="SubmitUpdateAccount.php" method="POST">
                
        <label >Account No: </label>
		<input type = "text" value="<?php echo "$Account_No" ?>" name="Account_No"  > <br>

		<label >Account Type: </label>
		<input type = "text" value="<?php echo "$Account_Type" ?>" name="Account_Type"> <br>

		<label >Open Date </label>
		<input type = "text" value="<?php echo "$Open_Date" ?>" name="Open_Date"> <br> 

		<label >Account Balance: </label>
		<input type = "text" value="<?php echo "$Account_Balance" ?>" name="Account_Balance"> <br>

		<label >Account Holder Name: </label>
		<input type = "text" value="<?php echo "$Account_HolderName" ?>" name="Account_HolderName"> <br>

        <label >Account Holder Email: </label>
		<input type = "text" value="<?php echo "$Account_HolderMail" ?>" name="Account_HolderMail"> <br>

        <label >Account Holder Number: </label>
		<input type = "text" value="<?php echo "$Account_HolderNumber" ?>" name="Account_HolderNumber"> <br>

		
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