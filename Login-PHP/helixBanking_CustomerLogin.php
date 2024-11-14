<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helix Bank - Login</title>
    <link rel="stylesheet" href="Styles/helixTest_styles.css">

    <style>
        /*CSS styling for the logo */
       .logo-box {
    width: 50px;
    height: 50px;
    background-color: #3b82f6;
    text-align: center;
    line-height: 50px;
    font-weight: bold;
}
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

.logo img{
    width: 150px;
    height: 150px;
    
}
.user-image img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the entire circular area */
}

    </style>
</head>

<body>
    <header>
    <div class="user-image">
            <img src="Images/logo_2.png" alt="LOGO">
        </div>
        <h1>HELIX BANKING</h1>
        <nav>
            <a href="helixBanking_CustomerLogin.php">
                <button class="login-btn">Log in</button>
            </a>
            <a href="RegistrationPage.php">
                <button class="register-btn">Register</button>
            </a>
        </nav>
    </header>

    <div class="login-container">
         <!--form to obtain username and password from customer-->
        <form class="login-form" action="user_login_validation.php" method="post">
            <h2>Login</h2>

            <label for="username">UserName</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <div class="remember-forgot">
                <label for="rememberMe">Remember me<input type="checkbox" id="rememberMe"></label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="login-submit">Log in</button>

            <br><br>
            <div class="additional-links">
                <p>Don't have an account? <a href="RegistrationPage.php">Register now!</a></p>
                <br>
                <p><a href="helixBanking_StaffLogin.php">Log in as Staff</a> <a href="HelixBanking_AdminLogin.php">Log in as Admin</a></p>
            </div>
        </form>
    </div>

    <!--Javascript code to give an alert to input valid credentials-->
    <script>
        const loginForm = document.querySelector('.login-form');
        loginForm.addEventListener('submit', function(event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            if (username === '' || password === '') {
                event.preventDefault();  // Prevent form submission
                alert('Please fill out both the username and password fields!');
            }
        });
    </script>

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
