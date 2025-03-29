<?php
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');
$db_name = getenv('DB_NAME');

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $message = "Login successful! Welcome " . htmlspecialchars($username);
        } else {
            $message = "Invalid username or password";
        }
    } else {
        $message = "Error in query: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SQL Injection Lab - Login</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        input { padding: 5px; width: 200px; }
        button { padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer; }
        .message { margin-top: 20px; padding: 10px; background: #f8f9fa; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>SQL Injection Lab</h1>
    <form method="POST">
        <div class="form-group">
            <label>Username:</label><br>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <?php if ($message): ?>
        <div class="message <?php echo strpos($message, 'Error') !== false ? 'error' : ''; ?>"><?php echo $message; ?></div>
    <?php endif; ?>
    
    <!-- Debug information -->
    <?php if (isset($query)): ?>
        <div style="margin-top: 20px; font-family: monospace; background: #f0f0f0; padding: 10px;">
            Last SQL Query: <?php echo htmlspecialchars($query); ?>
        </div>
    <?php endif; ?>
</body>
</html> 