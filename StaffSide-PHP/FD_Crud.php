<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FD_Crud Page</title>

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
        <section>
            <h2>Manage Fixed Deposit Schemes</h2>
            <div class="button-container">
            </div>
        </section>

        <section>
            <!--table to display data from the database table-->
            <div class="productData" style ="border-color: #666;">
                <table border="1" width="100%">
                    <tr>
	                    <th class="col">FD Scheme No</th>
	                    <th class="col">Description</th>
	                    <th class="col">FD Amount</th>
	                    <th class="col">Interest Rates(%)</th>
	                    <th class="col">Edit</th>
	                    <th class="col">Delete</th>
                    </tr>

                <?php
                    // SQL query to select all rows from the fd_information table
	                $SQL = "SELECT * FROM fd_information";
	                $result = $conn->query($SQL);
	
	                if($result -> num_rows > 0)
	                {
		                while($row = $result ->fetch_assoc())
		            {
                        // Display each row's data in table cells
			            echo "<tr><td>".$row["FD_Scheme_No"]."</td><td>"
				                .$row["Description"]."</td><td>"
				                .$row["FD_Amount"]."</td><td>"
				                .$row["Interest_Rates"]."</td>";
				
                                //edit link for each row
                                echo "<td><a href='editFDPage.php?
                                FD_Scheme_No=$row[FD_Scheme_No]&Description=$row[Description]
                                &FD_Amount=$row[FD_Amount]
                                &Interest_Rates=$row[Interest_Rates]'>edit</a></td>";
;
					    //delete link for each row
			            echo "<td><a href ='deleteFDScheme.php ? FD_Scheme_No=$row[FD_Scheme_No]'>delete</a></td>";
		            }
	                }else
                    {
		                echo "Empty rows" ;
	                }
	                
                    echo "</table>";
	
                    //closing database connection
	                mysqli_close($conn);
                ?>
        </section>
                
        <br>

        <section>
                <button class="styled-button"><a href="addNewFDScheme.php">Add new</a></button>
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

