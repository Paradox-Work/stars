<?php
// Database credentials
$host = 'localhost'; // Server name or IP
$username = 'root';  // Database username
$password = '';      // Database password
$dbname = 'stars';   // Database name

// Create connection and check for errors
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Fetch data from database
$results = $conn->query("SELECT * FROM users");
$row = $results->fetch_assoc(); // Get the first row as an associative array
var_dump($row); // Display fetched data for debugging

// Handle form submission (POST request)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent XSS attacks
    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['password']);
    $sql = "INSERT INTO users 
    (Username, Pass) 
    VALUES (?, ?)";
    // Display sanitized user input
    echo "<br> User: $user<br>";
    
    // Hash the password
    $hashed_password = password_hash($pass, PASSWORD_BCRYPT);
    echo "Hashed Password: $hashed_password<br>";
    
    // Verify the password
    if (password_verify($pass, $hashed_password)) {
        echo "Password is correct!";
    } else {
        echo "Invalid password.";
    }
    
    echo "<br>";
}

// Display associative array for debugging
$assoc_masivs = ["age" => 6, "grade" => 8, "ids" => 10];
echo "<pre>";
print_r($assoc_masivs);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <!-- Simple form for username and password -->
    <form method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>