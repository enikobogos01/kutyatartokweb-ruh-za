<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kutyatartokwebaruhaza";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Database connection error: " . mysqli_connect_error());
}

// Process the data from the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["loginEmail"]) ? $_POST["loginEmail"] : '';
    $password = isset($_POST["loginPassword"]) ? $_POST["loginPassword"] : '';
    
    // Check if a registered user exists with the given email address
    if (!empty($email) && !empty($password)) {
        $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $checkEmailQuery);

        if (mysqli_num_rows($result) > 0) {
            // If the user exists, check the password
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row["password"];

            if (password_verify($password, $hashedPassword)) {
                // Successful login
                $data = array(
                    'success' => true,
                    'msg' => 'Successful login!'
                );
            } else {
                // Incorrect password
                $data = array(
                    'success' => false,
                    'msg' => 'Incorrect password. Please try again!'
                );
            }
        } else {
            // No such user
            $data = array(
                'success' => false,
                'msg' => 'No such user. Register now!'
            );
        }
    } else {
        // Missing email or password
        $data = array(
            'success' => false,
            'msg' => 'Missing email or password.'
        );
    }

    echo json_encode($data);
} else {
    // Invalid request method
    $data = array(
        'success' => false,
        'msg' => 'Invalid request method.'
    );
    echo json_encode($data);
}

// Close the database connection
$conn->close();

?>