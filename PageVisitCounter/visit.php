<?php
session_start();

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 1;
} else {
    $_SESSION['visits']++;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Visit Counter</title>
</head>
<body>

<h2>Page Visit Counter</h2>
<p>You have visited this page <strong><?php echo $_SESSION['visits']; ?></strong> times this session.</p>

<a href="reset.php">Reset Counter</a>

</body>
</html>
