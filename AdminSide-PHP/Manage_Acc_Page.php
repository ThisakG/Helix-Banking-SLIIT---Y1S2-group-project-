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
        </section>

        <section>
            <!--table to display data from the database table-->
            <div class="productData" style ="border-color: #666;">
                <table border="1" width="100%">
                    <tr>
	                    <th class="col">Account No</th>
	                    <th class="col">Account Type</th>
	                    <th class="col">Open Date</th>
	                    <th class="col">Balance</th>
	                    <th class="col">Holder Name</th>
                        <th class="col">Holder Email</th>
                        <th class="col">Holder Number</th>
	                    <th class="col">Edit</th>
	                    <th class="col">Delete</th>
                    </tr>

                <?php
                // SQL query to select all rows from the account_information table
	                $SQL = "SELECT * FROM account_information";
	                $result = $conn->query($SQL);
	
	                if($result -> num_rows > 0)
	                {
		                while($row = $result ->fetch_assoc())
		            {
                        // Display each row's data in table cells
			            echo "<tr><td>".$row["Account_No"]."</td><td>"
				                .$row["Account_Type"]."</td><td>"
				                .$row["Open_Date"]."</td><td>"
				                .$row["Account_Balance"]."</td><td>"
				                .$row["Account_HolderName"]."</td><td>"
                                .$row["Account_HolderMail"]."</td><td>"
                                .$row["Account_HolderNumber"]."</td>";
				
                        //edit link for each row
			            echo "<td><a href='editAccount.php?
					            Account_No=$row[Account_No] &Account_Type=$row[Account_Type] 
					            &Open_Date=$row[Open_Date] &Account_Balance=$row[Account_Balance] 
					            &Account_HolderName=$row[Account_HolderName]
                                &Account_HolderMail=$row[Account_HolderMail]
                                &Account_HolderNumber=$row[Account_HolderNumber]'>edit</a></td>";
					
                        //delete link for each row
			            echo "<td><a href ='deleteAccount.php ? Account_No=$row[Account_No]'>delete</a></td>";
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
                <button class="styled-button"><a href="addNewAccount.php">Add new</a></button>
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
