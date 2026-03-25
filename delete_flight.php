<?php
// រួមបញ្ចូលការភ្ជាប់ Database (ប្រសិនបើចង់ប្រើពិតប្រាកដ)
// include 'db_config.php';

$message = "";
if (isset($_POST['delete_flight'])) {
    // ទទួលទិន្នន័យដើម្បីស្វែងរកជើងហោះហើរដែលត្រូវលុប
    $departure = $_POST['departure_city'];
    $arrival = $_POST['arrival_city'];
    $date = $_POST['departure_date'];

    // កូដ SQL សម្រាប់លុប (ឧទាហរណ៍)
    // $sql = "DELETE FROM flights WHERE departure_city='$departure' AND arrival_city='$arrival' AND departure_date='$date'";
    
    // បង្ហាញសារបន្ទាប់ពីចុចប៊ូតុង (ដូចក្នុងរូប)
    $message = "Flight deleted!";
}
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Flight</title>
    <style>
        body {
            background-color: #fddde6; /* ពណ៌ផ្កាឈូកស្រាលដូចក្នុងរូប */
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
            font-size: 32px;
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
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* ប៊ូតុង Delete ពណ៌ក្រហម */
        .btn-delete {
            width: 100%;
            background-color: #d9534f; 
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        /* ប៊ូតុង Back ពណ៌ប្រផេះ */
        .btn-back {
            width: 100%;
            background-color: #6c757d;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
            box-sizing: border-box;
        }

        /* សារពណ៌បៃតងពេលលុបរួច */
        .success-msg {
            color: #28a745;
            font-size: 26px;
            margin-top: 20px;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Delete Flight</h1>

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

        <button type="submit" name="delete_flight" class="btn-delete">Delete</button>
        <a href="admin_dashboard.php" class="btn-back">Back to Dashboard</a>
    </form>

    <?php if ($message != ""): ?>
        <div class="success-msg"><?php echo $message; ?></div>
    <?php endif; ?>
</div>

</body>
</html>