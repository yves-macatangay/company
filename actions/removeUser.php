<?php

include_once "../classes/User.php";

$id = $_GET['user_id'];

$user = new User;
$user->deleteUser($id);