<?php

include 'login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$email = test_input($_POST['email']);

header("location : mybookings.php");

}
?>