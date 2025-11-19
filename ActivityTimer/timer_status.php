<?php
session_start();

if (!isset($_SESSION['start_time'])) {
    echo "Timer has not been started yet.";
    exit();
}

$elapsed = time() - $_SESSION['start_time'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Timer Status</title>
</head>
<body>
    <h2>Activity Timer</h2>
    <p>You have been active for <strong><?php echo $elapsed; ?></strong> seconds.</p>

    <a href="timer_start.php">Restart Timer</a>
</body>
</html>
