<?php
session_start();
// ប្រសិនបើអ្នកចង់ការពារទំព័រនេះ កុំឱ្យអ្នកមិនទាន់ Login ចូលមើលបាន៖
// if (!isset($_SESSION['user_id'])) { header("Location: login.php"); exit(); }
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f7;
            margin: 0;
            padding: 0;
        }

        /* Navbar ផ្នែកខាងលើ */
        .navbar {
            background-color: #3f51b5; /* ពណ៌ខៀវដិត */
            color: white;
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .navbar h2 { margin: 0; font-size: 22px; }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
            transition: 0.3s;
        }
        .nav-links a:hover { opacity: 0.8; }

        /* Container សម្រាប់ដាក់ Cards */
        .container {
            max-width: 1100px;
            margin: 50px auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* បែងចែកជា ៣ ជួរដេក */
            gap: 25px;
            padding: 0 20px;
        }

        /* រចនាប័ទ្ម Card នីមួយៗ */
        .card {
            background: white;
            padding: 35px 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card i {
            font-size: 45px;
            color: #3f51b5;
            margin-bottom: 20px;
        }

        .card h3 {
            margin: 10px 0;
            color: #333;
            font-size: 20px;
        }

        .card p {
            color: #777;
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 25px;
            height: 45px; /* កំណត់កម្ពស់អក្សរឱ្យស្មើគ្នា */
        }

        /* ប៊ូតុងក្នុង Card */
        .btn {
            display: inline-block;
            width: 100%;
            padding: 10px 0;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-blue { background-color: #3f51b5; color: white; }
        .btn-green { background-color: #4caf50; color: white; }
        .btn-red { background-color: #f44336; color: white; }

        .btn:hover { opacity: 0.9; }

        /* Responsive សម្រាប់ទូរស័ព្ទ */
        @media (max-width: 768px) {
            .container { grid-template-columns: repeat(1, 1fr); }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <h2><i class="fas fa-plane"></i> Flight Booking</h2>
        <div class="nav-links">
            <a href="book_flight.php"><i class="fas fa-book"></i> Book Flight</a>
            <a href="#"><i class="fas fa-search"></i> Search Flights</a>
            <a href="#"><i class="fas fa-briefcase"></i> My Bookings</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </nav>

    <div class="container">
        
        <div class="card">
            <i class="fas fa-ticket-alt"></i>
            <h3>Book a Flight</h3>
            <p>Find and book your perfect flight to any destination with our system.</p>
            <a href="book_flight.php" class="btn btn-blue">Book Now</a>
        </div>

        <div class="card">
            <i class="fas fa-search"></i>
            <h3>Search Flights</h3>
            <p>Explore available flights and find the best options for your plans.</p>
            <a href="#" class="btn btn-blue">Search Flights</a>
        </div>

        <div class="card">
            <i class="fas fa-briefcase"></i>
            <h3>My Bookings</h3>
            <p>View and manage all your current and past flight reservations.</p>
            <a href="#" class="btn btn-green">View Bookings</a>
        </div>

        <div class="card">
            <i class="fas fa-tasks"></i>
            <h3>Manage Reservations</h3>
            <p>Modify or cancel your existing reservations as needed.</p>
            <a href="#" class="btn btn-green">Manage Now</a>
        </div>

        <div class="card">
            <i class="fas fa-user"></i>
            <h3>View Profile</h3>
            <p>Update your personal information and view account details.</p>
            <a href="#" class="btn btn-blue">My Profile</a>
        </div>

        <div class="card">
            <i class="fas fa-sign-out-alt"></i>
            <h3>Logout</h3>
            <p>Securely log out of your account when you're done.</p>
            <a href="logout.php" class="btn btn-red">Sign Out</a>
        </div>

    </div>

</body>
</html>