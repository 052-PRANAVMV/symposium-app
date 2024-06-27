
<!DOCTYPE html>
<body>
    
<?php
// Database connection
$servername = "localhost";
$username = "miniproject";
$password = "12345";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Register user
if (isset($_POST['fullname'], $_POST['email'], $_POST['password'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (UserName, email, User_Password) VALUES ('$fullname', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: log.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

</body>