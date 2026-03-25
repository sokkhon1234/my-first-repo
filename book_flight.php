<?php
$message = "";
if (isset($_POST['reserve'])) {
    // កន្លែងនេះសម្រាប់ទទួលទិន្នន័យកក់
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $date = $_POST['date'];
    $seat = $_POST['seat'];

    // បង្ហាញសារជោគជ័យពណ៌បៃតងដូចក្នុងរូប
    $message = "Reservation was successfully added to the system.";
}
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Flight</title>
    <style>
        body {
            background-color: #87ceeb; /* ពណ៌មេឃស្រាល */
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .booking-box {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 380px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-weight: normal;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #fff;
        }

        .btn-reserve {
            background-color: #007bff; /* ពណ៌ខៀវ */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        /* សារជោគជ័យពណ៌បៃតង */
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 4px;
            width: 410px;
            margin-top: 20px;
            text-align: left;
            border: 1px solid #c3e6cb;
            font-size: 14px;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="booking-box">
        <h1>Book a Flight</h1>
        <form method="POST">
            <div class="form-group">
                <label>Departure City:</label>
                <input type="text" name="departure" placeholder="Kerala" required>
            </div>
            <div class="form-group">
                <label>Arrival City:</label>
                <input type="text" name="arrival" placeholder="Tamilnadu" required>
            </div>
            <div class="form-group">
                <label>Departure Date:</label>
                <input type="date" name="date" value="2025-05-24" required>
            </div>
            <div class="form-group">
                <label>Seat Number:</label>
                <input type="text" name="seat" placeholder="5" required>
            </div>
            <button type="submit" name="reserve" class="btn-reserve">Reserve</button>
        </form>
    </div>

    <?php if ($message != ""): ?>
        <div class="alert-success">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <a href="dashboard_customer.php" class="btn-back">Back to Dashboard</a>

</body>
</html>