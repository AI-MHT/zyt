<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["code"];
    $password = $_POST["password"];

    // Check the code and password against your database
    // Replace the database connection code with your own database configuration
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "phprappel";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Perform a query to check the login credentials
    $query = "SELECT id FROM users WHERE code = '$code' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful, store the user's ID in the session
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $row["id"];

        // Redirect to a protected page or perform any other desired actions
        header("Location: welcome.php");
    } else {
        // Login failed, you can display an error message here
        echo "Login failed. Please try again.";
    }

    mysqli_close($conn);
}
?>
