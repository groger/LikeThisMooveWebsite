<?php
include("db.php");
unset($_SESSION['user_name']);
header("Location: login.php");
?>