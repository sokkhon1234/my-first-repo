<?php
session_start();
// ឆែកមើលថាតើអ្នកចូលប្រើជា Admin ឬអត់ (ការពារសុវត្ថិភាព)
// if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') { header("Location: login.php"); exit(); }
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Flight System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; display: flex; background-color: #f4f7f6; }

        /* Sidebar ផ្នែកខាងឆ្វេង */
        .sidebar {
            width: 250px;
            background-color: #3b5998; /* ពណ៌ខៀវដិត */
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            transition: 0.3s;
            font-size: 15px;
        }

        .sidebar a:hover {
            background-color: #4e69a2;
            padding-left: 35px;
        }

        .sidebar i { margin-right: 10px; width: 20px; }

        /* Content ផ្នែកខាងស្តាំ */
        .main-content {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 40px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .header h1 { margin: 0; color: #333; font-size: 28px; }

        .btn-logout {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }

        /* Card Grid */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        .card:hover { transform: translateY(-5px); }

        .card h4 {
            margin-top: 0;
            color: #555;
            font-size: 14px;
            text-transform: uppercase;
        }

        .card i {
            font-size: 40px;
            color: #3b5998;
            margin: 15px 0;
        }

        .btn-action {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            background-color: #55acee;
        }

        /* ព័ត៌មានបន្ថែមខាងក្រោម */
        .welcome-box {
            background-color: white;
            margin-top: 40px;
            padding: 30px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .welcome-text { flex: 1; }
        .welcome-text h2 { margin-top: 0; color: #3b5998; }
        .welcome-text p { color: #666; line-height: 1.6; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Flight Admin</h2>
        <a href="flight_schedules.php"><i class="fas fa-calendar-alt"></i> Flight Schedules</a>
        <a href="view_bookings.php"><i class="fas fa-book"></i> View Bookings</a>
        <a href="add_flight.php"><i class="fas fa-plus-circle"></i> Add Flight</a>
        <a href="delete_flight.php"><i class="fas fa-trash-alt"></i> Delete Flight</a>
        <a href="logout.php" style="margin-top: 50px; color: #ff9999;"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Admin Dashboard</h1>
            <a href="logout.php" class="btn-logout">Logout</a>
        </div>

        <div class="card-grid">
            <div class="card">
                <h4>Flight Schedules</h4>
                <i class="fas fa-calendar-day"></i>
                <a href="flight_schedules.php" class="btn-action">View Schedules</a>
            </div>

            <div class="card">
                <h4>All Bookings</h4>
                <i class="fas fa-ticket-alt"></i>
                <a href="view_bookings.php" class="btn-action">View Bookings</a>
            </div>

            <div class="card">
                <h4 style="color: #2ecc71;">Add Flight</h4>
                <i class="fas fa-plane-arrival" style="color: #2ecc71;"></i>
                <a href="add_flight.php" class="btn-action" style="background-color: #2ecc71;">Add New Flight</a>
            </div>

            <div class="card">
                <h4 style="color: #f1c40f;">Delete Flight</h4>
                <i class="fas fa-trash-restore" style="color: #f1c40f;"></i>
                <a href="delete_flight.php" class="btn-action" style="background-color: #f1c40f;">Manage Flights</a>
            </div>
        </div>

        <div class="welcome-box">
            <div class="welcome-text">
                <h2>Welcome to Flight Management System</h2>
                <p>ក្នុងនាមជាអ្នកគ្រប់គ្រង (Admin) អ្នកអាចធ្វើការត្រួតពិនិត្យលើរាល់ជើងហោះហើរ បន្ថែមជើងហោះហើរថ្មីៗ ឬលុបជើងហោះហើរដែលបានលុបចោល។ លើសពីនេះ អ្នកក៏អាចមើលបញ្ជីឈ្មោះអតិថិជនដែលបានកក់សំបុត្ររួចផងដែរ។</p>
            </div>
            <i class="fas fa-paper-plane" style="font-size: 60px; color: #3b5998; opacity: 0.2; margin-left: 20px;"></i>
        </div>
    </div>

</body>
</html>