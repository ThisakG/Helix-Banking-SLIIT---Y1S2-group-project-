<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loan_page</title>

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
                <span><h2>Welcome!</h2></span>
                <br>
                <a href="#" class="logout">Log out</a>
            </div>

        </div>
    </header>

    <main>
        <section class="manage-loan-fd">
            <h2>Manage Loan Schemes</h2>
            <div class="button-container">
            </div>
        </section>

        <section>
            <!--table to display data from the database table-->
            <div class="productData" style ="border-color: #666;">
                <table border="1" width="100%">
                    <tr>
	                    <th class="col">Loan Scheme No</th>
	                    <th class="col">Description</th>
	                    <th class="col">Loan Amount</th>
	                    <th class="col">Installement Rates</th>
	                    <th class="col">Edit</th>
	                    <th class="col">Delete</th>
                    </tr>

                <?php
                     // SQL query to select all rows from the 'loan_schemes' table
	                $SQL = "SELECT * FROM loan_schemes";
	                $result = $conn->query($SQL);
	
	                if($result -> num_rows > 0)
	                {
		                while($row = $result ->fetch_assoc())
		            {
                        // Display each row's data in table cells
			            echo "<tr><td>".$row["loanSch_No"]."</td><td>"
				                .$row["Description"]."</td><td>"
				                .$row["Loan_Amount"]."</td><td>"
				                .$row["Installement_Rates"]."</td>";
				            
                        //edit link for each row
			            echo "<td><a href='editLoanPage.php?
                                loanSch_No=$row[loanSch_No]&Description=$row[Description]
                                &Loan_Amount=$row[Loan_Amount]
                                &Installement_Rates=$row[Installement_Rates]'>edit</a></td>";
;
                        //edit link for each row
			            echo "<td><a href ='deleteLoanScheme.php ? loanSch_No=$row[loanSch_No]'>delete</a></td>";
		            }
	                }else
                    {
		                echo "Empty rows" ;
	                }
	                
                    echo "</table>";
	
	                mysqli_close($conn);
                ?>
        </section>
                
        <br>

        <section>
                <button class="styled-button"><a href="addNewLoanScheme.php">Add new</a></button>
        </section>
<br>

    </main>

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


</body>

</html>