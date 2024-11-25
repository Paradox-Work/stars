<?php
// Database credentials
$host = 'localhost'; // Server name or IP
$username = 'root';  // Database username
$password = '';      // Database password
$dbname = 'stars';    // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$results = $conn->query("SELECT * FROM users");
$row = $results->fetch_assoc();
var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insert.php" method="POST">
        <label for="userid">User ID:</label><br>
        <input type="number" name="userid" required><br>

        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
