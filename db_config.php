<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "flight_system"; // ត្រូវឱ្យដូចឈ្មោះ Database ក្នុង phpMyAdmin របស់អ្នក

// បន្ទាត់ទី 8 ដែលអាចមានបញ្ហា
$conn = mysqli_connect($host, $user, $password, $dbname);

// ឆែកមើលការតភ្ជាប់
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>