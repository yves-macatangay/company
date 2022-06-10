<?php

include_once "../classes/User.php";

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$username = $_POST['username'];
$id = $_POST['user_id'];

$user = new User;
$user->editUser($id, $fname, $lname, $username);