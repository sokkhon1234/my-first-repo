<!DOCTYPE html>
<html>
<head>
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: sans-serif; background: #f0f2f5; margin: 0; }
        .navbar { background: #3f51b5; color: white; padding: 15px 50px; display: flex; justify-content: space-between; }
        .container { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; padding: 50px; }
        .card { background: white; padding: 30px; border-radius: 12px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .btn { padding: 10px 25px; border-radius: 20px; color: white; text-decoration: none; display: inline-block; margin-top: 15px; width: 80%; }
        .btn-blue { background: #3f51b5; }
        .btn-green { background: #4caf50; }
        .btn-red { background: #f44336; }
    </style>
</head>
<body>
    <div class="navbar">
        <h2><i class="fas fa-plane"></i> Flight Booking</h2>
        <div>Book Flight | Search Flights | My Bookings | Logout</div>
    </div>
    <div class="container">
        <div class="card"><i class="fas fa-suitcase fa-3x"></i><h3>Book a Flight</h3><a href="book_flight.php" class="btn btn-blue">Book Now</a></div>
        <div class="card"><i class="fas fa-search fa-3x"></i><h3>Search Flights</h3><a href="#" class="btn btn-blue">Search Flights</a></div>
        <div class="card"><i class="fas fa-briefcase fa-3x"></i><h3>My Bookings</h3><a href="#" class="btn btn-green">View Bookings</a></div>
        <div class="card"><i class="fas fa-list fa-3x"></i><h3>Manage Reservations</h3><a href="#" class="btn btn-green">Manage Now</a></div>
        <div class="card"><i class="fas fa-user fa-3x"></i><h3>View Profile</h3><a href="#" class="btn btn-blue">My Profile</a></div>
        <div class="card"><i class="fas fa-sign-out-alt fa-3x"></i><h3>Logout</h3><a href="#" class="btn btn-red">Sign Out</a></div>
    </div>
</body>
</html>