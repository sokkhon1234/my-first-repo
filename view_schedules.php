<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { background: #82ccff; text-align: center; font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; background: #222; color: white; margin-top: 20px; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #444; }
        .btn-back { background: #0084ff; color: white; padding: 10px 20px; border: none; border-radius: 5px; margin-top: 20px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Flight Schedules</h1>
    <table>
        <tr><th>Flight Id</th><th>Departure City</th><th>Arrival City</th><th>Departure Date</th></tr>
        <?php
        $res = mysqli_query($conn, "SELECT * FROM flights");
        while($row = mysqli_fetch_assoc($res)){
            echo "<tr><td>{$row['id']}</td><td>{$row['departure_city']}</td><td>{$row['arrival_city']}</td><td>{$row['departure_date']}</td></tr>";
        }
        ?>
    </table>
    <button class="btn-back">Back to Dashboard</button>
</body>
</html>