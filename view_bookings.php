<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>All Bookings</title>
    <style>
        body { background: linear-gradient(to bottom, #e8f5c8, #f8fcfc); font-family: sans-serif; text-align: center; margin: 0; padding: 20px; }
        h1 { margin-top: 40px; color: #333; }
        .search-box { margin: 30px auto; width: 400px; text-align: left; }
        .search-box label { display: inline-block; width: 150px; margin-bottom: 10px; color: #444; }
        .search-box input { padding: 8px; border-radius: 5px; border: 1px solid #ccc; width: 200px; }
        .btn-search { background-color: #8395a7; color: white; border: none; padding: 10px 25px; border-radius: 5px; cursor: pointer; }
        
        table { width: 100%; border-collapse: collapse; background: #1a1a1a; color: white; margin-top: 20px; }
        th { padding: 15px; text-align: left; border-bottom: 2px solid #444; }
        td { padding: 15px; text-align: left; background-color: #2d3436; }
        .btn-back { background-color: #0084ff; color: white; border: none; padding: 10px 20px; border-radius: 5px; margin-top: 20px; cursor: pointer; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>

    <h1>All Bookings</h1>

    <div class="search-box">
        <label>Search By Date:</label> <input type="date"><br>
        <label>Search By Flight ID:</label> <input type="text"><br>
        <center><button class="btn-search">Search</button></center>
    </div>

    <table>
        <tr>
            <th>User Id</th> <th>User Name</th> <th>Flight Id</th> <th>Departure City</th> <th>Arrival City</th> <th>Departure Date</th> <th>Seat Number</th>
        </tr>
        </table>

    <a href="admin_dashboard.php" class="btn-back">Back to Dashboard</a>

</body>
</html>