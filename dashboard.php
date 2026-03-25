<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard - Flight Booking</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <i class="fas fa-plane"></i> Flight Booking
        </div>
        <div class="nav-links">
            <a href="#" class="nav-item"><i class="fas fa-book"></i> Book Flight</a>
            <a href="#" class="nav-item"><i class="fas fa-search"></i> Search Flights</a>
            <a href="#" class="nav-item"><i class="fas fa-briefcase"></i> My Bookings</a>
            <a href="logout.php" class="nav-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <i class="fas fa-ticket-alt"></i>
            <h3>Book a Flight</h3>
            <p>Find and book your perfect flight to any destination with our easy-to-use booking system.</p>
            <a href="book.php" class="btn btn-blue">Book Now</a>
        </div>

        <div class="card">
            <i class="fas fa-search"></i>
            <h3>Search Flights</h3>
            <p>Explore available flights and find the best options for your travel plans.</p>
            <a href="search.php" class="btn btn-blue">Search Flights</a>
        </div>

        <div class="card">
            <i class="fas fa-suitcase"></i>
            <h3>My Bookings</h3>
            <p>View and manage all your current and past flight reservations in one place.</p>
            <a href="bookings.php" class="btn btn-green">View Bookings</a>
        </div>

        <div class="card">
            <i class="fas fa-list-ul"></i>
            <h3>Manage Reservations</h3>
            <p>Modify or cancel your existing reservations as needed.</p>
            <a href="manage.php" class="btn btn-green">Manage Now</a>
        </div>

        <div class="card">
            <i class="fas fa-user"></i>
            <h3>View Profile</h3>
            <p>Update your personal information and view your account details.</p>
            <a href="profile.php" class="btn btn-blue">My Profile</a>
        </div>

        <div class="card">
            <i class="fas fa-external-link-alt"></i>
            <h3>Logout</h3>
            <p>Securely log out of your account when you're done.</p>
            <a href="logout.php" class="btn btn-red">Sign Out</a>
        </div>
    </div>

    <script>
        // បន្ថែម JavaScript បន្តិចបន្តួចសម្រាប់ Interactive
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function() {
                console.log("Navigating to: " + this.innerText);
            });
        });
    </script>
</body>
</html>