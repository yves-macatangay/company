<?php

session_start();
session_unset();
session_destroy();

header("location: ../views"); //go to views/index.php
exit;