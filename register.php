<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        body { background: #d1d9ff; font-family: sans-serif; display: flex; justify-content: center; padding: 20px; }
        .form-box { background: white; padding: 30px; border-radius: 10px; width: 400px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #3f51b5; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="form-box">
        <h2 align="center">User Registration Form</h2>
        <form method="POST">
            <label>Username:</label><input type="text" name="user" placeholder="Nelson">
            <label>Password:</label><input type="password" name="pass" placeholder="*****">
            <label>First Name:</label><input type="text" name="fname" placeholder="Nelson">
            <label>Last Name:</label><input type="text" name="lname" placeholder="D">
            <label>Email:</label><input type="email" name="email" placeholder="nelson@gmail.com">
            <label>Date of Birth:</label><input type="date" name="dob">
            <label>Phone:</label><input type="text" name="phone">
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>