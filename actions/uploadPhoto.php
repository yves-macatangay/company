<?php
include_once "../classes/User.php";
session_start();

$id = $_SESSION['user_id'];
$filename = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];

$user = new User;
$user->uploadPhoto($id,$filename,$tmp_name);
