<?php
// រួមបញ្ចូលឯកសារភ្ជាប់ Database (ប្រសិនបើមាន)
// include 'db_config.php';

$message = "";
if (isset($_POST['add_flight'])) {
    // ទទួលទិន្នន័យពី Form
    $departure = $_POST['departure_city'];
    $arrival = $_POST['arrival_city'];
    $date = $_POST['departure_date'];

    // កន្លែងនេះអ្នកអាចសរសេរ SQL INSERT ដើម្បីរក្សាទុកក្នុង Database
    // $sql = "INSERT INTO flights (departure_city, arrival_city, departure_date) VALUES ('$departure', '$arrival', '$date')";
    
    // បង្ហាញសារជោគជ័យ (ដូចក្នុងរូប)
    $message = "Flight added to the system!";
}
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flight</title>
    <style>
        body {
            background-color: #a3f7d9; /* ពណ៌ផ្ទៃខាងក្រោយស្រដៀងក្នុងរូប */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            font-weight: normal;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #1a4d3c;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* ការពារកុំឱ្យ Input រីកធំជាង Container */
        }

        .btn-add {
            width: 100%;
            background-color: #1e7d58; /* ពណ៌បៃតងចាស់ */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .btn-back {
            width: 100%;
            background-color: #5c636a; /* ពណ៌ប្រផេះ */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .success-msg {
            color: #1e7d58;
            font-size: 24px;
            margin-top: 20px;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Add Flight</h1>

    <form method="POST" action="">
        <div class="form-group">
            <label>Departure City:</label>
            <input type="text" name="departure_city" placeholder="Chennai" required>
        </div>

        <div class="form-group">
            <label>Arrival City:</label>
            <input type="text" name="arrival_city" placeholder="Delhi" required>
        </div>

        <div class="form-group">
            <label>Departure Date:</label>
            <input type="date" name="departure_date" required>
        </div>

        <button type="submit" name="add_flight" class="btn-add">Add</button>
        <a href="admin_dashboard.php" class="btn-back">Back to Dashboard</a>
    </form>

    <?php if ($message != ""): ?>
        <div class="success-msg"><?php echo $message; ?></div>
    <?php endif; ?>
</div>

</body>
</html>