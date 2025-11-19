<?php
session_start();

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

if (isset($_POST['q1']) && $_POST['q1'] == "4") {
    $_SESSION['score']++;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz - Question 2</title>
</head>
<body>

<h2>Question 2</h2>

<form method="POST" action="quiz_result.php">
    <p>What is the capital of France?</p>
    <input type="radio" name="q2" value="Paris"> Paris<br>
    <input type="radio" name="q2" value="London"> London<br>
    <input type="radio" name="q2" value="Rome"> Rome<br><br>

    <button type="submit">Finish</button>
</form>

</body>
</html>
