<?php
$server = "localhost";
$database = "studentform";
$username = "root";
$password = "";

$conn = mysqli_connect($server,$username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO details (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <style>
    body { font-family: Arial; background-color: #f0f0f0; }
    .form-container {
        max-width: 350px;
        margin: 100px auto;
        padding: 25px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
    input { width: 100%; padding: 10px; margin-top: 10px; }

    button { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; margin-top: 15px; }

    a { text-align: center; display: block; margin-top: 10px; }  
    </style>
</head>
<body>
    <div, class="form-container">
        <h2>Sign Up</h2>
        <form method="POST" action="signup.php">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="submit" value="Register">
        </form>
            <a href="login.php">Already have an account? Login</a>
  </div>
</body>
</html>
