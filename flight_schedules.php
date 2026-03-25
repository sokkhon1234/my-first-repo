<?php
// ១. រួមបញ្ចូលឯកសារភ្ជាប់ Database
include 'db_config.php'; 

// ២. សរសេរ SQL Query ដើម្បីទាញយកជើងហោះហើរទាំងអស់
$sql = "SELECT * FROM flights ORDER BY departure_date ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Schedules</title>
    <style>
        body {
            background-color: #80c4ff; /* ពណ៌ខៀវស្រាលដូចក្នុងរូបភាព */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
            margin-top: 50px;
            margin-bottom: 40px;
            font-size: 36px;
            font-weight: normal;
        }

        /* រចនាប័ទ្មតារាង */
        table {
            width: 90%;
            border-collapse: collapse;
            margin-bottom: 30px;
            background-color: #262626;
        }

        th {
            background-color: #1a1a1a; /* ពណ៌ខ្មៅសម្រាប់ Header */
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: bold;
            border: 1px solid #333;
        }

        td {
            color: #ccc;
            padding: 15px;
            border: 1px solid #444;
        }

        tr:hover td {
            background-color: #333; /* ប្តូរពណ៌បន្តិចពេលដាក់ Mouse លើ */
        }

        /* ប៊ូតុង Back to Dashboard */
        .btn-back {
            background-color: #007bff;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }

        .no-data {
            text-align: center;
            padding: 20px;
            color: #ff4d4d;
        }
    </style>
</head>
<body>

    <h1>Flight Schedules</h1>

    <table>
        <thead>
            <tr>
                <th>Flight Id</th>
                <th>Departure City</th>
                <th>Arrival City</th>
                <th>Departure Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // ៣. ប្រើ Loop ដើម្បីបង្ហាញទិន្នន័យពី Database
            if ($result && mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['departure_city'] . "</td>";
                    echo "<td>" . $row['arrival_city'] . "</td>";
                    echo "<td>" . date('d-M-Y', strtotime($row['departure_date'])) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='no-data'>មិនមានជើងហោះហើរក្នុងប្រព័ន្ធឡើយ</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="admin_dashboard.php" class="btn-back">Back to Dashboard</a>

</body>
</html>