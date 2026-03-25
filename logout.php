<?php
// ១. ចាប់ផ្ដើម Session ដើម្បីអាចចូលទៅលុបវាបាន
session_start();

// ២. លុបទិន្នន័យក្នុង Session ទាំងអស់ដែលមានស្រាប់
session_unset();

// ៣. បំផ្លាញ Session ចោលទាំងស្រុងពីក្នុង System
session_destroy();

// ៤. បញ្ជូនអ្នកប្រើប្រាស់ត្រឡប់ទៅកាន់ទំព័រ Login វិញដោយស្វ័យប្រវត្តិ
header("Location: login.php");
exit();
?>