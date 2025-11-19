<?php
session_start();
unset($_SESSION['visits']);
header("Location: visit.php");
exit();
