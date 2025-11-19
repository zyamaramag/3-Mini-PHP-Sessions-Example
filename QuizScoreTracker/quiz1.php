<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz - Question 1</title>
</head>
<body>

<h2>Question 1</h2>

<form method="POST" action="quiz2.php">
    <p>What is 2 + 2?</p>
    <input type="radio" name="q1" value="4"> 4<br>
    <input type="radio" name="q1" value="3"> 3<br>
    <input type="radio" name="q1" value="5"> 5<br><br>

    <button type="submit">Next</button>
</form>

</body>
</html>
