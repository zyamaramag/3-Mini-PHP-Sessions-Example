<?php
session_start();
$_SESSION['start_time'] = time();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Activity Timer</title>
</head>
<body>
    <h2>Activity Timer Started</h2>
    <p>Your session timer has begun.</p>

    <a href="timer_status.php">Check Time Spent</a>
</body>
</html>
