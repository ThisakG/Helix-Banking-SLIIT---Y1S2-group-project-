<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helix_banking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = "";
$Name = "";
$Email = "";
$Subject = "";
$Message = "";
$Phone = "";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // GET method: show the data of the contact us form

    if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
        $id = intval($_GET["id"]); // Convert to integer for security

        $sql = "SELECT * FROM contactus WHERE id = $id";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $Name = $row["name"];
            $Email = $row["email"];
            $Subject = $row["subject"];
            $Message = $row["message"];
            $Phone = $row["phone"];
        } else {
            header("Location: ContactList.php");
            exit;
        }
    } else {
        header("Location: ContactList.php");
        exit;
    }
} else {
    // POST method: update the data of the contact us form
    if (isset($_POST["id"]) && is_numeric($_POST["id"])) {
        $id = intval($_POST["id"]);
        $Name = $_POST["name"];
        $Email = $_POST["email"];
        $Subject = $_POST["subject"];
        $Message = $_POST["message"];
        $Phone = $_POST["phone"];

        do {
            if (empty($Name)) {
                $error = "Name is required";
                break;
            }
            if (empty($Email)) {
                $error = "Email is required";
                break;
            }
            if (empty($Subject)) {
                $error = "Subject is required";
                break;
            }
            if (empty($Message)) {
                $error = "Message is required";
                break;
            }
            if (empty($Phone)) {
                $error = "Phone is required";
                break;
            }

            // Update the data of the contact us form
            $sql = "UPDATE contactus SET name = '$Name', email = '$Email', subject = '$Subject', message = '$Message', phone = '$Phone' WHERE id = $id";

            if ($conn->query($sql) === TRUE) {
                $success = "Data updated successfully";
            } else {
                $error = "Error: " . $sql . "<br>" . $conn->error;
            }

            header("Location: ContactList.php");
            exit();
        } while (false);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Styles/HomePageStyles.css">

    <title>Contact Us</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-form {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .alert {
            padding: 10px;
            margin-bottom: 20px;
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-outline-secondary {
            background-color: #f5f5f5;
            color: black;
            border: 1px solid #ccc;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
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
        <h2>Contact Us</h2>
        <div class="contact-form">
            <?php
            if (!empty($error)) {
                echo "<div class='alert'>$error</div>";
            }
            ?>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($Name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($Email); ?>" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" value="<?php echo htmlspecialchars($Subject); ?>" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4" required><?php echo htmlspecialchars($Message); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($Phone); ?>" required>
                </div>
                <?php
                if (!empty($success)) {
                    echo "<div class='alert alert-success'>$success</div>";
                }
                ?>
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="Location: ContactList.php" class="btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
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
