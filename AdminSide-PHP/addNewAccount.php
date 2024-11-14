<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_Acc_page</title>

    <link rel="stylesheet" href="Styles/HomePageStyles.css">
    <link rel="stylesheet" href="Styles/ManageAccountStyles.css">

    <?php
    // Include the database configuration
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
            <h2>Create Banking Account</h2>
            
        </section>

        <section>

            <!--creating a form to enter data to add a new banking account to the database-->
            <form action="submitAddAccount.php" method="POST">

            <label for="field1">Account Type (Savings / Joint / Business / Other): </label>
            <input type="text" name="field1" required>
            <br><br>

            <label for="field2">Opening Date: </label>
            <input type="text" name="field2" required>
            <br><br>

            <label for="field3">Account Balance: </label>
            <input type="text" name="field3" required>
            <br><br>

            <label for="field4">Account Holder Name: </label>
            <input type="text" name="field4" required>
            <br><br>

            <label for="field5">Account Holder Mail: </label>
            <input type="text" name="field5" required>
            <br><br>

            <label for="field6">Account Holder Contact Number: </label>
            <input type="text" name="field6" required>
            <br><br>

        <input type="submit" value="Add Account" class="styled-button">

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