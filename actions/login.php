<?php

include_once "../classes/User.php";

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User;
$user->login($username,$password);