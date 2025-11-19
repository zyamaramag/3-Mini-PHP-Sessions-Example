<?php
session_start();

if (isset($_POST['q2']) && $_POST['q2'] == "Paris") {
    $_SESSION['score']++;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
</head>
<body>

<h2>Quiz Completed</h2>
<p>Your total score is: <strong><?php echo $_SESSION['score']; ?></strong></p>

<a href="quiz1.php">Try Again</a>

<?php unset($_SESSION['score']); ?>

</body>
</html>
