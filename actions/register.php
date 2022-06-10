<?php

include "../classes/User.php";

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$username = $_POST['username'];
$password =password_hash($_POST['password'], PASSWORD_DEFAULT);

$user = new User;
$user->createUser($fname,$lname,$username,$password);