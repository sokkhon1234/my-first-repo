<?php
session_start();
include 'db_config.php'; // ភ្ជាប់ទៅកាន់ Database sreyleak_flight_system

$error = "";

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // ស្វែងរកអ្នកប្រើប្រាស់ក្នុង Database
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        
        // រក្សាទុកព័ត៌មានក្នុង Session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // បែងចែកទំព័រទៅតាមតួនាទី (Role)
        if ($user['role'] == 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: dashboard_customer.php");
        }
        exit();
    } else {
        $error = "ឈ្មោះអ្នកប្រើប្រាស់ ឬលេខសម្ងាត់មិនត្រឹមត្រូវ!";
    }
}
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>Login - Flight System</title>
    <style>
        body {
            background: linear-gradient(135deg, #3b5998, #8b9dc3);
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        h2 { color: #3b5998; margin-bottom: 25px; }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
        }
        .btn-login {
            background-color: #3b5998;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }
        .btn-login:hover { background-color: #2d4373; }
        .error { color: #e74c3c; font-size: 14px; margin-bottom: 10px; }
        .footer-link { margin-top: 20px; font-size: 14px; color: #666; }
        .footer-link a { color: #3b5998; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Sign In</h2>
    
    <?php if($error != ""): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login" class="btn-login">Login</button>
    </form>

    <div class="footer-link">
        មិនទាន់មានគណនី? <a href="register.php">ចុះឈ្មោះនៅទីនេះ</a>
    </div>
</div>

</body>
</html>