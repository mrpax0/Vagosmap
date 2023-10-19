$servername = "DA PMA Signon:3306"; // Your MySQL server address
$username = "your_username"; // Your MySQL username
$password = "your_password"; // Your MySQL password
$dbname = "accounts"; // Your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
