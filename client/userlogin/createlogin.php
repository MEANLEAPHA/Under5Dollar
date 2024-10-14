<?php
include '../connection/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Registration Logic
    if (isset($_POST['btnDissave'])) {
        $Email = $_POST['emails'];
        $Password = $_POST['passwords'];
        $fullname = $_POST['username'];

        // Validate email format
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
            exit();
        }

        // Hash the password
        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

        // Use prepared statements to prevent SQL injection
        $stmt = $con->prepare("INSERT INTO `tbl_user` (`USER-ID`, `USER_FULLNAME`, `USER_EMAIL`, `USER-PASSWORD`) VALUES (NULL, ?, ?, ?)");
        $stmt->bind_param("sss", $fullname, $Email, $hashedPassword);

        if ($stmt->execute()) {
            // Automatically log in the user
            $_SESSION['user_id'] = $stmt->insert_id; // Store the user ID in the session
            $_SESSION['user_fullname'] = $fullname;  // Store the user's fullname
            $_SESSION['user_email'] = $Email;        // Store the user's email

            // Redirect to the client area after registration
            header('Location: http://localhost/PHP/shop/client/index.php');
            exit();
        } else {
            // Handle error
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    // Login Logic
    if (isset($_POST['btnDislogin'])) {
        // Check if the user is already logged in
        if (isset($_SESSION['user_id'])) {
            // Redirect to the client area if already logged in
            header('Location: http://localhost/PHP/shop/client/index.php');
            exit();
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare an SQL query to fetch the user
        $sql = "SELECT * FROM tbl_user WHERE USER_EMAIL = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a user with the provided email exists
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['USER-PASSWORD'])) {
                // Successful login, set session variables
                $_SESSION['user_id'] = $user['USER-ID'];
                $_SESSION['user_email'] = $user['USER_EMAIL'];

                // Redirect to the client area
                header('Location: http://localhost/PHP/shop/client/index.php');
                exit();
            } else {
                // Incorrect password
                echo "Invalid password. Please try again.";
            }
        } else {
            // User not found
            echo "No account found with that email.";
        }
    }
}
?>
