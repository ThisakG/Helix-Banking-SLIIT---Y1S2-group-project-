<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_Employee_page</title>

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

        </div>
    </header>

    <main>
        <section class="manage-loan-fd">
            <h2>Manage Employee</h2>
        </section>

        <section>
             <!--table to display data from the database table-->
            <div class="productData" style ="border-color: #666;">
                <table border="1" width="100%">
                    <tr>
	                    <th class="col">Employee ID</th>
	                    <th class="col">Employee Name</th>
	                    <th class="col">Date of birth</th>
	                    <th class="col">Address</th>
                        <th class="col">Employee email</th>
                        <th class="col">username</th>
                        <th class="col">password</th>
                        <th class="col">Edit</th>
                        <th class="col">Delete</th>
                    </tr>

                <?php
                    // SQL query to select all rows from the manage_employee table
	                $SQL = "SELECT * FROM manage_employee";
	                $result = $conn->query($SQL);
	
	                if($result -> num_rows > 0)
	                {
		                while($row = $result ->fetch_assoc())
		            {
                        // Display each row's data in table cells
			            echo "<tr><td>".$row["Employee_ID"]."</td><td>"
				                .$row["Employee_name"]."</td><td>"
				                .$row["Date_of_birth"]."</td><td>"
                                .$row["Address"]."</td><td>"
                                .$row["Employee_Email"]."</td><td>"
                                .$row["username"]."</td><td>"
				                .$row["password"]."</td>";
				
                                //edit link for each row
                                echo "<td><a href='editAccountEmp.php?
					            Employee_ID=$row[Employee_ID] &Employee_name=$row[Employee_name] 
					            &Date_of_birth=$row[Date_of_birth] &Address=$row[Address] 
					            &Employee_Email=$row[Employee_Email]
                                &username=$row[username]
                                &password=$row[password]'>edit</a></td>";
					
                         //delete link for each row
			            echo "<td><a href ='deleteAccountEmp.php ? Employee_ID=$row[Employee_ID]'>delete</a></td>";
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
                <button class="styled-button"><a href="addNewAccountEmp.php">Add new</a></button>
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

    <<footer>
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
