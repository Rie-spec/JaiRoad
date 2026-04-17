<?php
session_start();

// Hardcoded credentials (for demo only)
$valid_username = "admin";
$valid_password = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center; /* horizontal center */
            align-items: center;     /* vertical center */
            font-family: Arial, sans-serif;
            background-color: #EFF1F4;
        }

        .box {
            background: #FEFEFE;
            padding: 30px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        button:hover {
            background-color: #5C5FED;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border-radius: 10px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="box">
    <h2>Login Form</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST" action="">
            <label>Username:</label><br>
            <input type="text" name="username" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>