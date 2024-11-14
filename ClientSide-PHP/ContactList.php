<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact List</title>

   <link rel="stylesheet" href="Styles/HomePageStyles.css">


<style>
      /* Header styles */
      h2 {
         margin-bottom: 20px;
         text-align: center;
      }

      /* Button styling */
      .btn {
         display: inline-block;
         background-color: #007bff;
         color: white;
         padding: 10px 20px;
         text-decoration: none;
         border-radius: 5px;
         margin-bottom: 20px;
      }

      /* Button hover effect */
      .btn:hover {
         background-color: #0056b3;
      }

      /* Table styles */
      table {
         width: 100%;
         border-collapse: collapse;
         margin-bottom: 20px;
         background-color: white;
      }

      th, td {
         padding: 10px;
         text-align: left;
         border-bottom: 1px solid #ddd;
      }

      th {
         background-color: #f4f4f4;
      }

      tr:hover {
         background-color: #f1f1f1;
      }

      /* Action button styles */
      .action-btn {
         padding: 5px 10px;
         border: none;
         color: white;
         text-decoration: none;
         border-radius: 5px;
         margin-right: 5px;
      }

      .edit-btn {
         background-color: #007bff;
      }

      .edit-btn:hover {
         background-color: #0056b3;
      }

      .delete-btn {
         background-color: #dc3545;
      }

      .delete-btn:hover {
         background-color: #c82333;
      }
   
      .container {
   background-color: #ffffff; /* White background for the container */
   border-radius: 10px; /* Rounded corners for the container */
   padding: 20px; /* Padding inside the container */
   box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for some depth */
   width: 80%; /* Set a width for the container */
   max-width: 1000px; /* Maximum width for the container */
   margin: 40px auto; /* Center the container horizontally and add margin to the top and bottom */
   text-align: left; /* Align text to the left */
}

   </style>
</head>
<body>

<header>
        <div class="user-image">
            <img src="Images/logo_2.png" alt="LOGO">
        </div>
        <h1>HELIX BANKING</h1>
        <div class="user">
            <div class="user-image">
                <img src="Images/profile_icon5.png" alt="profile_icon">
            </div> 
            <div class="user-info">
                <span>Welcome!</span>
                <br>
                <a href="#" class="logout">Log out</a>
            </div>
        </div>

        </div>
    </header>

   <div class="container"> 
      <h2>List of Contacts</h2>
      <!-- Button to contact -->
      <center><a class="btn" href="ContactUs.php" role="button">
         Contact Us
      </a></center>
      <br>
      <!--table to display customer contact information-->
      <table> 
         <thead>
            <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Subject</th>
               <th>Message</th>
               <th>Phone</th>
               <th>Created At</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "helix_banking";
            
            // Create connection 
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection 
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error); // Handle connection error
            }

            // Read all data from the database table
            $sql = "SELECT * FROM contactus";
            $result = $conn->query($sql);

            // Check for errors in query execution
            if (!$result) {
               die("Invalid Query: " . $conn->error); // Handle query execution error
            }

            // Read data of each row
            while ($row = $result->fetch_assoc()) {
               echo "
               <tr>
                  <td>$row[id]</td>
                  <td>$row[name]</td>
                  <td>$row[email]</td>
                  <td>$row[subject]</td>
                  <td>$row[message]</td>
                  <td>$row[phone]</td>
                  <td>$row[created_at]</td>
                  <td>
                     <a class='action-btn edit-btn' href='edit_contact.php?id=$row[id]'>
                        Edit
                     </a><br>
                     <a class='action-btn delete-btn' href='delete_contact.php?id=$row[id]'>
                        Delete
                     </a>
                  </td>
               </tr>
               ";
            }
            ?>
         </tbody>
      </table>
   </div>
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
